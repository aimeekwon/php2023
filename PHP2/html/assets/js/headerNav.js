const subMenus = document.querySelectorAll(".nav__inner > ul > li .submenu");
document.querySelectorAll(".nav__inner > ul > li").forEach(li => {
    li.addEventListener("mouseover",(e)=>{
        subMenus.forEach((el)=>{
            el.style.display = "block";
            el.style.transition = "all 0.6s";
        });
    });
    li.addEventListener("mouseout",(e)=>{
        li.addEventListener("mouseout",(e)=>{
            subMenus.forEach((el)=>{
                el.style.display = "none";
                el.style.transition = "all 0.6s";

            });
        });
    });
});

// $(".nav__inner > ul > li").mouseover(function(){
//     $(".nav__inner > ul > li").find(".submenu").stop().slideDown()
// });

// $(".nav__inner > ul > li").mouseout(function(){
//     $(".nav__inner > ul > li").find(".submenu").stop().slideUp()
// });
