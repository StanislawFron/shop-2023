window.addEventListener('DOMContentLoaded', () => {
    document.getElementById('typeLogin').addEventListener('click', function() {
        document.getElementById('typeCreate').style.borderBottom = '1px solid #fff';
        this.style.borderBottom = '1px solid #ffc107';
        hideFormCheckbox('form-statute');
        hideFormCheckbox('form-newsletter');
        showFormCheckbox('form-rememberForgot')
        document.getElementById('form-submitBtn').innerHTML = 'Zaloguj się';

    })
    
    document.getElementById('typeCreate').addEventListener('click', function() {
        document.getElementById('typeLogin').style.borderBottom = '1px solid #fff';
        this.style.borderBottom = '1px solid #ffc107';
        showFormCheckbox('form-statute');
        showFormCheckbox('form-newsletter');
        hideFormCheckbox('form-rememberForgot')
        document.getElementById('form-submitBtn').innerHTML = 'Utwórz konto';
    })
});

function showFormCheckbox(a){
    document.getElementById(a).classList.remove('d-none');
    document.getElementById(a).classList.add('d-flex');
}

function hideFormCheckbox(a){
    document.getElementById(a).classList.add('d-none');
    document.getElementById(a).classList.remove('d-flex');
}