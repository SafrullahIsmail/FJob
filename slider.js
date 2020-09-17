const gambarslide = document.querySelector('.gambar-slide');
const gambar = document.querySelectorAll('.gambar-slide img');

const prevBtn = document.querySelector('#prevbtn');
const nextBtn = document.querySelector('#nextbtn');

let counter = 1;
const size = gambar[0].clientWidth;

gambarslide.style.transform = "translateX(" + (-size * counter) + "px)";

nextBtn.addEventListener('click', ()=>{
    if(counter >= gambar.length - 1) return;
    gambarslide.style.transition = "transform 1s ease-in-out";
    counter++;
    gambarslide.style.transform = "translateX(" + (-size * counter) + "px)";
});
prevBtn.addEventListener('click', ()=>{
    if(counter <= 0) return;
    gambarslide.style.transition = "transform 1s ease-in-out";
    counter--;
    gambarslide.style.transform = "translateX(" + (-size * counter) + "px)";
});

gambarslide.addEventListener('transitionend', ()=>{
    if(gambar[counter].id === 'lastclone'){
        gambarslide.style.transition = "none";
        counter = gambar.length - 2;
        gambarslide.style.transform = "translateX(" + (-size * counter) + "px)";
    }
    if(gambar[counter].id === 'firstclone'){
        gambarslide.style.transition = "none";
        counter = gambar.length - counter;
        gambarslide.style.transform = "translateX(" + (-size * counter) + "px)";
    }
});