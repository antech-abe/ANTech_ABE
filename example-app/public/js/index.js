
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    if(window.scrollY == 0){
        header.classList.remove('header_scroll');
    }else{
        header.classList.add('header_scroll');
    }
});

let welcomeHeader = document.querySelector('#welcome_section')
welcomeHeader.setAttribute('class', 'well_come_bg')

let imageRentHouse = document.querySelector('#image_rent_house')
imageRentHouse.style.backgroundImage = 'url(assets/img/familia-em-mudanca-casa-geminada-casa-.jpg)'