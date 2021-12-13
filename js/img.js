var prev = document.querySelectorAll('.img_prev');
var next = document.querySelectorAll('.img_next');
var content = document.querySelector('.content');
var count_img;
var number_img = 0;
var dir_img;

//
var img = document.querySelectorAll('.img1');

var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
}

function handleImg(img, observer) {
    img.forEach(e => {
        //  console.log(e.intersectionRatio)
        if (e.intersectionRatio > 0)
            loadImg(e.target);
        // console.log(e.target);
    })
}

function loadImg(img) {
    img.style.backgroundImage = img.getAttribute('data');
    // console.log(img.getAttribute('data'));
}
var observer = new IntersectionObserver(handleImg, options);
img.forEach(e => {
    observer.observe(e);
})
//

content.addEventListener('mouseover', function (event) {
    let target = event.target;
    if (target.classList.contains('img1')) {
        let b = target.childNodes;
       // console.log(b);
        b[0].style.display = 'block';
        b[2].style.display = 'block';
        count_img = target.dataset.count;
        dir_img = /*target.closest(".object").dataset.id + "/"*/ target.closest(".object").dataset.id_object + "/" ;
      //   console.log(dir_img);

        number_img = 0;
    }
});
content.addEventListener('mouseout', function (event) {
    let target = event.target;
    if (target.classList.contains('img1')) {
        //console.log(event.relatedTarget.tagName);
       // console.log(target);
      
        if (!(event.relatedTarget.tagName == 'BUTTON')) {
            let b = target.childNodes;
         //   console.log(b);
            b[1].style.display = 'none';
            b[3].style.display = 'none';
        }

    }
});
content.addEventListener('click', function (event) {
    if (event.target.classList.contains('img_next')) {
        number_img = event.target.closest(".img1").dataset.current_pic;
        number_img++;
        if(number_img > count_img)
        {
            number_img = 1; 
        }
       // console.log(number_img);
        event.target.closest(".img1").dataset.current_pic = number_img;
        event.target.closest(".img1").style.backgroundImage = "url('/uploaded_pictures/" + dir_img + "image" + number_img + ".jpg')";
    }

});
content.addEventListener('click', function (event) {
    if (event.target.classList.contains('img_prev')) {

        number_img = event.target.closest(".img1").dataset.current_pic;
        number_img--;
        if(number_img == 0)
        {
            number_img = count_img; 
        }
        event.target.closest(".img1").dataset.current_pic = number_img;
      //  console.log(number_img);
        event.target.closest(".img1").style.backgroundImage = "url('/uploaded_pictures/" + dir_img + "image" + number_img + ".jpg')";
    }
});

