const navSlide = ()=>{
  const burger = document.querySelector('.burger');
  const navBrand = document.querySelector('.nav-brand');
  const navSlider = document.querySelector('.nav-menu');
  const navLinks = document.querySelectorAll('.nav-link');
  const navBar = document.querySelector('nav');

  // watch for touch clicks on the whole navbar
  navBar.addEventListener('click', () => {
    // animate accordinaly
    navSlider.classList.toggle('nav-active');
    burger.classList.toggle('burger-active');
    navBrand.classList.toggle('nav-active');
    navLinks.forEach((link, index) => {
      if ( link.style.animation ) {
        link.style.animation = ``
      } else {
        link.style.animation = `navLinksFade 0.25s ease-in forwards ${index / 10 + 0.1 }s`
      }
    });
  });
}

navSlide();
