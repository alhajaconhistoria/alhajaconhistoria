const navSlide = () => {
    const burger = document.querySelector('.burger');
    const header = document.querySelector('.menu');
    const navLinks = document.querySelectorAll('.menu a');

    burger.addEventListener('click', () => {
        //Toggle Nav
         header.classList.toggle('nav-active');

        //Animate Links
        navLinks.forEach((link,index) => {
        if(link.style.animation){
            link.style.animation = '';
        } else {
            link.style.animation = 'navLinkFade 0.5s ease forwards ${index / 7 + 1.5}s'; 
        }
    });
    //Burger Animation
    burger.classList.toggle('toggle');
    });
}

navSlide();