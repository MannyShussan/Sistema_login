const botao = document.getElementById('menu')
const menu1 = document.getElementById("user")

botao.addEventListener('click', function () {
    const menu = document.getElementById('lateral')
    if (temClasse(menu, 'sumir')) {
        menu.classList.remove('sumir')
    } else {
        menu.classList.add('sumir')
    }
})


menu1.addEventListener('click', function (evento) {
    const janela = document.getElementById('menu-1')
    if (temClasse(janela, "ocultar")){
        janela.classList.remove("ocultar")
    }else{
        janela.classList.add("ocultar")
    }
})

function temClasse(el, classe) {
    return (el.className.split(' ').indexOf(classe) + 1);
}