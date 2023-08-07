const none_login = document.querySelector('.none-login');
const section = document.querySelectorAll('section');
const nav_a = document.querySelectorAll('nav a');
const login_form = document.querySelector('.fa-user');
const form = document.querySelector('.login-form');
const login_form_box = document.querySelector('.login-form .box');
const reg_link = document.querySelector('.register-link');
const log_link = document.querySelector('.login-link');

login_form.addEventListener('click', () => {
    none_login.classList.add('login_form');
    form.classList.add('form_popup');
});

nav_a.forEach(link => {
    link.addEventListener('click', () => {
        none_login.classList.remove('login_form');
        form.classList.remove('form_popup');
    });
});

window.onscroll = () => {
    section.forEach(sec => {
        const top = window.scrollY;
        const offset = sec.offsetTop - 100;
        const height = sec.offsetHeight;
        const id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            nav_a.forEach(links => {
                links.classList.remove('active');
            });
            document.querySelector('nav a[href*=' + id + ']').classList.add('active');
        }
    });
}

reg_link.addEventListener('click', () => {
    login_form_box.classList.add('active');
});

log_link.addEventListener('click', () => {
    login_form_box.classList.remove('active');
});