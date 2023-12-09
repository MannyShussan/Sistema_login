const dispositivos = document.querySelectorAll('.disp')

dispositivos.forEach(function (elemento) {
    elemento.addEventListener('click', function () {
        if (this.className.substring(5, 11) == "Tomada") {
            this.classList.toggle("Tomada-off")
            this.classList.toggle("Tomada-on")
        } else if (this.className.substring(5, 16) == "Interruptor") {
            this.classList.toggle("Interruptor-on")
            this.classList.toggle("Interruptor-off")
        }
        // console.log(this.attributes[1].value); //imprime no console a chave primária do dispositivo clicado
    })
})