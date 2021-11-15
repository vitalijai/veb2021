const form = document.getElementById('form');
var rgf = document.getElementById('registration_form');
var textbox = document.querySelectorAll('input');
const email = form.mail;
const telefon = form.telefon;
const error = document.querySelectorAll('span');
const pass = form.password;
const pass_repeated = form.password_repeated;

email.addEventListener('input', function (event) {

  if (email.validity.valid & email.value.length > 5) {

    error[1].textContent = '';
    error[1].className = 'error';
  } else {
    showError();
  }
});

form.addEventListener('submit', function (event) {

  //валидация почти
  if (!email.validity.valid) {
    showError();
    event.preventDefault();
  }
  //проверка заполнености полей перед отправкой
  for (let i = 0; i < textbox.length; i++) {
    if (textbox[i].value.length == 0) {
      event.preventDefault();
      break;
    }
  }
});

function showError() {
  if (email.validity.valueMissing) {

    error[1].textContent = 'Поле пустое.';
  } else if (email.validity.typeMismatch) {

    error[1].textContent = 'Это не e-mail.';
  } else if (email.value.length < 5) {
    error[1].textContent = `Поле короткое`;
  }
  error[1].className = 'error active';
}

rgf.addEventListener('mouseout', function (event) {
  let target = event.target;
  target.placeholder = "Заполните это поле";
});


telefon.addEventListener('input', function () {
  let regex = /^((\+?3)?8)?0\d{9}$/;
  if (regex.test(telefon.value)) {
    error[0].textContent = '';
    error[0].className = 'error';
  }
  else {
    error[0].className = 'error active';
    error[0].textContent = `Неверный формат телефона`;
  }
});

function password_repeated() {
  if (pass.value != pass_repeated.value) {
    error[2].className = 'error active';
    error[2].textContent ='Пароли должни совпадать';
  }
  else{
    error[2].className = 'error';
    error[2].textContent ='';
  }
}
pass.addEventListener('input',password_repeated);
pass_repeated.addEventListener('input', password_repeated);