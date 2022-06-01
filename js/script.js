
// dropdown menu for profile
var profile = document.querySelector('.fa-user-circle');

var dropmenu = document.querySelector('.profilemenu');

profile.addEventListener("click", (event) =>{
    event.preventDefault();
    dropmenu.classList.toggle("active");
   
}); 
// Cart Dropdown Menu
// dropdown menu for profile
var cart = document.querySelector('.fa-shopping-cart');

var dropmenu = document.querySelector('.cartmenu');

cart.addEventListener("click", () =>{
    dropmenu.classList.toggle("active");
   
});
// Navbar Fot Mobile And Ipad Device
var menuBtn = document.querySelector("#menu-bar");
var navbar = document.querySelector(".navbar");
var header = document.querySelector(".header-2");
menuBtn.addEventListener("click", () =>{
    menuBtn.classList.toggle("fa-times");
    navbar.classList.toggle("active");
});
window.onscroll = () => {
    menuBtn.classList.remove("fa-times");
    navbar.classList.remove("active");
  
    

    if(window.scrollY > 150){
        header.classList.add("active");
      
    }
    else{
        header.classList.remove("active");
       
    }
};

// Make The Deal Count Down
var countDate = new Date ('december 1, 2022 00:00:00').getTime();
function CountDown(){
    var now = new Date().getTime();
    gap = countDate - now;

    var second = 1000;
    var minute = second * 60;
    var hour = minute * 60;
    var day = hour * 24;

    var d = Math.floor(gap / (day));
    var h = Math.floor((gap % (day)) / (hour));
    var m = Math.floor((gap % (hour)) / (minute));
    var s = Math.floor((gap % (minute)) / (second));

    document.getElementById('day').innerText = d;
    document.getElementById('hour').innerText = h;
    document.getElementById('minute').innerText = m;
    document.getElementById('second').innerText = s;

}

setInterval(function(){
    CountDown();

},1000)
