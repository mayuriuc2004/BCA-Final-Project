async function runCode() {
    const code = document.getElementById("codeEditor").value;
    const input = document.getElementById("inputData").value;
    const outputElement = document.getElementById("output");
    outputElement.textContent = "Running...";

    const request = {
        language_id: 50, // C language
        source_code: btoa(code), // Encode in Base64
        stdin: btoa(input),
    };

    try {
        let response = await fetch("https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=true", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-RapidAPI-Host": "judge0-ce.p.rapidapi.com",
                "X-RapidAPI-Key": "7ae996e6bbmsh71893cfc094d469p163fe2jsna94a7c60eb1c"
            },
            body: JSON.stringify(request)
        });

        let json = await response.json();
        const token = json.token;
        
        // Fetch result
        let result;
        do {
            await new Promise(resolve => setTimeout(resolve, 2000));
            result = await fetch(`https://judge0-ce.p.rapidapi.com/submissions/${token}?base64_encoded=true`, {
                method: "GET",
                headers: {
                    "X-RapidAPI-Host": "judge0-ce.p.rapidapi.com",
                    "X-RapidAPI-Key": "7ae996e6bbmsh71893cfc094d469p163fe2jsna94a7c60eb1c"
                }
            });
            result = await result.json();
        } while (result.status.id <= 2);
        
        outputElement.textContent = atob(result.stdout || "No output or error");
    } catch (error) {
        outputElement.textContent = "Error running code.";
    }
}

function saveFile() {
    const code = document.getElementById("codeEditor").value;
    const filePath = document.getElementById("filePath").value.trim();
    
    if (!filePath) {
        alert("Please enter a valid file path.");
        return;
    }
    
    const blob = new Blob([code], { type: "text/plain" });
    const a = document.createElement("a");
    a.href = URL.createObjectURL(blob);
    a.download = filePath.endsWith(".c") ? filePath : filePath + ".c";
    a.click();
}

function resetEditor() {
    document.getElementById("codeEditor").value = "";
    document.getElementById("inputData").value = "";
    document.getElementById("output").textContent = "Output will appear here...";
    document.getElementById("filePath").value = "";
}