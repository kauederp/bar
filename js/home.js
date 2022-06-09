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


    


listar()
var resp;

var select = document.getElementsByTagName('select')[0]

select.addEventListener('change',()=>{
    listar()
    console.log('listando')
})



 function listar(){
    const request = new XMLHttpRequest()

    request.open('GET', '?p=api&quantidade')

    request.onload = function() {
        resp = JSON.parse(this.responseText)
        select.innerHTML = ''
        for (let i = 0; i < resp.items.length; i++) {
            let option = document.createElement('option')
            if(resp.items[i].quantidade >= 1){
                option.value = resp.items[i].id
                option.innerText = resp.items[i].nome

                select.appendChild(option)
            }
        }
    }  

    request.onerror = function() {
        console.log('erro ao executar a requisição')
    }

    request.send()
}
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});