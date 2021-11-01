const form  = document.getElementById('form');

const email = document.getElementById('mail');
const emailError = document.querySelector('span.error');

email.addEventListener('input', function (event) {

  if (email.validity.valid) {
   
    emailError.textContent = ''; 
    emailError.className = 'error'; 
  } else {і
    // Если поле не валидно, показываем правильную ошибку
    showError();
  }
});

form.addEventListener('submit', function (event) {
  // Если поле email валдно, позволяем форме отправляться

  if(!email.validity.valid) {
    // Если поле email не валидно, отображаем соответствующее сообщение об ошибке
    showError();
    // Затем предотвращаем стандартное событие отправки формы
    event.preventDefault();
  }
});

function showError() {
  if(email.validity.valueMissing) {
    // Если поле пустое,
    // отображаем следующее сообщение об ошибке
    emailError.textContent = 'You need to enter an e-mail address.';
  } else if(email.validity.typeMismatch) {
    // Если поле содержит не email-адрес,
    // отображаем следующее сообщение об ошибке
    emailError.textContent = 'Entered value needs to be an e-mail address.';
  } else if(email.validity.tooShort) {
    // Если содержимое слишком короткое,
    // отображаем следующее сообщение об ошибке
    emailError.textContent = `Email should be at least ${ email.minLength } characters; you entered ${ email.value.length }.`;
  }

  // Задаём соответствующую стилизацию
  emailError.className = 'error active';
}