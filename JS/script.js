document.getElementById('calculatorForm').
addEventListener('submit', function(event) {
    event.preventDefault();
    var form = event.target;
    var formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            document.body.innerHTML = data;
        });
});