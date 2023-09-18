document.getElementById('submitBtn').addEventListener('click', function() {
    const inputPath = document.getElementById('pathInput').value;
    
    if (inputPath.endsWith('.csv')) {
        // Check if the file exists; this is a basic check, 
        // in a real-world scenario you would have to use server-side code to check the existence.
        fetch(inputPath, { method: 'HEAD' })
            .then(response => {
                if (response.ok) {
                    document.getElementById('output').value = "The CSV path is valid.";
                } else {
                    document.getElementById('output').value = "The CSV path is invalid or the file doesn't exist.";
                }
            })
            .catch(error => {
                document.getElementById('output').value = "The CSV path is invalid or the file doesn't exist.";
            });
    } else {
        document.getElementById('output').value = "This is not a CSV file.";
    }
});