const botao = document.getElementById('menu')

botao.addEventListener('click', function () {
    const menu = document.getElementById('lateral')
    if(temClasse(menu, 'sumir')){
        menu.classList.remove('sumir')
    }else{
        menu.classList.add('sumir')
    }
})

function temClasse(el, classe) {
    return (el.className.split(' ').indexOf(classe) + 1);
}