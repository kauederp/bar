var divOpcoes = document.getElementById('usuarioOpcoes')
var divUsuario = document.getElementById('usuario')

var btnMenu = document.getElementById('btnMenu')
var menu = document.getElementById('menu')




btnMenu.onclick = () => {
    if (menu.classList.contains('d-none')) {
        menu.classList.remove('d-none')
    } else {
        menu.classList.add('d-none')
    }

}

divUsuario.addEventListener('mouseover', () => {
    divOpcoes.classList.remove('d-none')
})
divUsuario.addEventListener('mouseleave', () => {
    divOpcoes.addEventListener('mouseleave', () => {
        divOpcoes.classList.add('d-none')
    })
})