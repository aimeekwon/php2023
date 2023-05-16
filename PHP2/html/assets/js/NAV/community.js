// community__slider
const slider = document.querySelector(".swiper-wrapper");

let index = 0

function func (){
    let aa = (index += 1) % 3

    slider.style.transform = "translateX(" + -1160 * aa + "px)";
    slider.style.transition = "all 0.6s";

    // 닷 메뉴 활성화 하기
    let dotActive = document.querySelectorAll(".slider__dot .dot");
    dotActive.forEach((active) => active.classList.remove("active"));
    dotActive[aa].classList.add("active");
}
// dot버튼을 누르면 해당 번호의 사진으로넘어감
let imageNodes = document.querySelectorAll("slider");
let dot = document.querySelectorAll(".slider__dot .dot");
dot.forEach((el, i) => {
    el.addEventListener("click", function(){
        document.querySelector(".dot.active").classList.remove("active");
        el.classList.add("active");
        slider.style.transform = "translateX(" + -1160 * i + "px)";
    slider.style.transition = "all 0.6s";
    })
});
setInterval(func,3000);

            
            