var button = document.querySelectorAll('button');
var input =document.querySelectorAll('input');

button[1].addEventListener('click', function(){
document.cookie = "login="+input[0].value;
document.cookie = "password="+input[1].value;

alert(document.cookie);
});