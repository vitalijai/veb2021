let input1 = document.querySelectorAll('form>input');
let input2 = document.querySelectorAll('form>div');
var h3 = document.querySelectorAll('h3');
var h1 = document.getElementById('head_search');
var fm = document.getElementById('search');

window.addEventListener('resize', function(event){
    if(this.window.innerHeight < 480)
    {
     h3.forEach(element=>element.style.fontSize="14px");
     input1.forEach(element=>element.style.height="30px");
     input1.forEach(element=>element.style.width="150px");
     input2.forEach(element=>element.style.height="30px");
     input2.forEach(element=>element.style.width="100px");
     h1.style.fontSize="24px";
     fm.style.gridAutoFlow="none";
   }
    else
    {
       h3.forEach(element=>element.style.fontSize="19px");
       input1.forEach(element=>element.style.height="50px");
       input1.forEach(element=>element.style.width="200px");
       input2.forEach(element=>element.style.height="50px");
      input2.forEach(element=>element.style.width="200px");
       h1.style.fontSize="32px";
      
    }
  });
