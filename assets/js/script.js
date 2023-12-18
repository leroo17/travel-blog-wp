function openMenu() {

    const menuBtn = document.getElementById('menu');
    menuBtn.addEventListener ('click', () => {
        const menuBurger = document.getElementById('menu-burger');
        menuBurger.style.display = 'flex';
    }
)};

function closeMenu() {

    const closeBtn = document.getElementById('close-btn');
    closeBtn.addEventListener('click', () => {
        const menuBurger = document.getElementById('menu-burger');
        menuBurger.style.display = 'none';
    }
)};

openMenu();
closeMenu();