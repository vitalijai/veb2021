var btn = document.getElementById('button');


window.addEventListener('scroll', function() {
  if (window.pageYOffset > 200) {
    btn.style.visibility = 'visible';
    btn.style.opacity = 1;
  }
 else {
    btn.style.visibility = 'hidden';
    btn.style.opacity = 0;
 }
});


btn.addEventListener('click',function(e) {
  window.scrollTo({top: 0, behavior: 'smooth'});
});

