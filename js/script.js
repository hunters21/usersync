document.getElementById('uploadButton').addEventListener('click', function() {
    const fileInput = document.getElementById('csvFile');
    const file = fileInput.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('csvOutput').value = event.target.result;
        };
        reader.readAsText(file);
    }
});
