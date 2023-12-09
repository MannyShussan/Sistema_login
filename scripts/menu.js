const botao = document.getElementById('menu')
const menu1 = document.getElementById("user")

botao.addEventListener('click', function () {
    const menu = document.getElementById('lateral')
    menu.classList.toggle('sumir')
})


menu1.addEventListener('click', function (evento) {
    const janela = document.getElementById('menu-1')
    janela.classList.toggle("ocultar")
})