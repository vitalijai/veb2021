let input = document.querySelectorAll('input');
var h3 = document.querySelectorAll('h3');
var h1 = document.getElementById('head_search');

window.addEventListener('resize', function(event){
    if(this.window.innerHeight < 480)
    {
     h3.forEach(element=>element.style.fontSize="14px");
     input.forEach(element=>element.style.height="30px");
     h1.style.fontSize="24px";
    }
    else
    {
       h3.forEach(element=>element.style.fontSize="19px");
       input.forEach(element=>element.style.height="50px");
       h1.style.fontSize="32px";
    }

    console.log(this.window.innerHeight);
  });
