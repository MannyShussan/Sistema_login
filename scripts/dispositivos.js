const dispositivos = document.querySelectorAll('.disp')

dispositivos.forEach(function (elemento) {
    elemento.addEventListener('click', function () {
        if (temClasse(this, "Tomada-off")) {
            this.classList.remove("Tomada-off")
            this.classList.add("Tomada-on")
        } else if (temClasse(this, "Tomada-on")) {
            this.classList.remove("Tomada-on")
            this.classList.add("Tomada-off")
        } else if (temClasse(this, "Interruptor-on")) {
            this.classList.remove("Interruptor-on")
            this.classList.add("Interruptor-off")
        } else {
            this.classList.remove("Interruptor-off")
            this.classList.add("Interruptor-on")
        }
        // console.log(this.attributes[1].value); //imprime no console a chave primária do dispositivo clicado
    })
})

function temClasse(el, classe) {
    return (el.className.split(' ').indexOf(classe) + 1);
}