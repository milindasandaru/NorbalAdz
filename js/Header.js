const header = document.querySelector('.header');

window.addEventListener('scroll', () => {
    const currentScroll = document.documentElement.scrollTop;

    if (currentScroll > header.offsetTop) {
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }

    const opacity = currentScroll === 0? 0.1 : Math.min(currentScroll / 100, 0.9);
    header.style.backgroundColor = `rgba(255, 255, 255, ${opacity})`;
});