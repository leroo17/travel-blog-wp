function openMenu() {
    const menuBtn = document.getElementById('menu');
    menuBtn.onclick = () => {
        const menuBurger = document.getElementById('menu__list-burger');
        menuBurger.style.display = 'flex';
    }
};

function closeMenu() {
    const closeBtn = document.getElementById('close-btn');
    closeBtn.onclick = () => {
        const menuBurger = document.getElementById('menu__list-burger');
        menuBurger.style.display = 'none';
    }
};

openMenu();
closeMenu();