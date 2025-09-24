let carrinho = document.querySelector(".carrinho");
let login = document.querySelector(".login-form");

function closeMenus() {
    carrinho.classList.remove('active');
    login.classList.remove('active');
}

// Sempre fecha ao carregar a página
window.onload = closeMenus;

// Fecha ao clicar nos ícones
document.querySelector("#cart").onclick = (e) => {
    e.stopPropagation();
    carrinho.classList.toggle('active');
    login.classList.remove('active');
};
document.querySelector("#login").onclick = (e) => {
    e.stopPropagation();
    login.classList.toggle('active');
    carrinho.classList.remove('active');
};

// Fecha ao rolar a página
window.onscroll = closeMenus;

// Fecha ao clicar fora dos menus
document.addEventListener('click', function(e) {
    if (
        !carrinho.contains(e.target) &&
        !login.contains(e.target) &&
        e.target.id !== 'cart' &&
        e.target.id !== 'login'
    ) {
        closeMenus();
    }
});