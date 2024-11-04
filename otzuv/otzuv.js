console.log('Скрипт загружен');

const burgerMenu = document.querySelector('.burger-menu');
const menu = document.querySelector('.menu');
burgerMenu.addEventListener('click', () => {
    menu.classList.toggle('active');
});


document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const namee = document.getElementById('namee').value.trim();
    const emaill = document.getElementById('emaill').value.trim();
    const messagee = document.getElementById('messagee').value.trim();

    if (namee === '' || emaill === '' || messagee === '') {
        alert('Пожалуйста, заполните все поля.');
        return;
    }

    alert('Заявка отправлена!');
    this.submit();
});