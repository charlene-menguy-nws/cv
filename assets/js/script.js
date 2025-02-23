console.log("Script chargé");

document.querySelector('.burger-icon').addEventListener('click', function() {
    document.querySelector('.menu').classList.toggle('show-menu');
});

document.querySelectorAll('.menu a').forEach(function(link) {
    link.addEventListener('click', function() {
        document.querySelector('#menu-toggle').checked = false;
        document.querySelector('.menu').classList.remove('show-menu');
    });
});

window.addEventListener('scroll', function() {
    const backToTop = document.querySelector('.back-to-top');
    if (window.scrollY > 200) { 
        backToTop.classList.add('show-back-to-top');
    } else {
        backToTop.classList.remove('show-back-to-top');
    }
});

