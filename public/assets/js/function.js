document.querySelectorAll('.dropdown-toggle').forEach(item => {
    item.addEventListener('click', event => {

        if(event.target.classList.contains('dropdown-toggle') ){
            event.target.classList.toggle('toggle-change');
        }
        else if(event.target.parentElement.classList.contains('dropdown-toggle')){
            event.target.parentElement.classList.toggle('toggle-change');
        }
    })
});

(function () {
    'use strict'
    const forms = document.querySelectorAll('.requires-validation')
    Array.from(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
