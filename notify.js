let overlay = document.querySelector(".overlay");
let blueBtn = document.querySelector(".blue-btn");
let secondBtn = document.querySelector(".second-btn");

blueBtn.addEventListener('click', () =>{
    overlay.classList.toggle("show");

});
secondBtn.addEventListener('click', () =>{
    overlay.classList.toggle("show");
    
});