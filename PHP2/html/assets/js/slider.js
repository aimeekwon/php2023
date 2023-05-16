const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        clickable : true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const btnStop = document.querySelector(".swiper-button-stop");
const btnStart = document.querySelector(".swiper-button-play");

btnStart.style.display = "none";
btnStart.addEventListener("click",()=>{
    swiper.autoplay.start();
    btnStop.style.display = "block";
    btnStart.style.display = "none";
});
btnStop.addEventListener("click",()=>{
    swiper.autoplay.stop();
    btnStop.style.display = "none";
    btnStart.style.display = "block";
});