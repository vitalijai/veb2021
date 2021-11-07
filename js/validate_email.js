const form  = document.getElementById('form');
var textbox = document.querySelectorAll('input');
const email = document.getElementById('mail');
const emailError = document.querySelector('span.error');

email.addEventListener('input', function (event) {

  if (email.validity.valid & email.value.length > 5) {
   
    emailError.textContent = ''; 
    emailError.className = 'error'; 
  } else {
    showError();
  }
});

form.addEventListener('submit', function (event) {
  if(!email.validity.valid) {
    showError();
    event.preventDefault();
  }
  textbox.forEach(element => {
    if(element.value.length == 0)
      event.preventDefault();
  });

});

function showError() {
  if(email.validity.valueMissing) {

    emailError.textContent = 'Поле пустое.';
  } else if(email.validity.typeMismatch) {
    
    emailError.textContent = 'Это не e-mail.';
  } else if(email.value.length < 5) {
    emailError.textContent = `Поле короткое`;
  }
  emailError.className = 'error active';
}