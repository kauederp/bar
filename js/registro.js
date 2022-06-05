var btnSubmit = document.querySelector('.btn-success')
var senha = document.getElementById('inputSenha')
var repeteSenha = document.getElementById('inputRepeteSenha')
btnSubmit.classList.add('disabled')


setInterval(() => {
    if (senha.value == "" || repeteSenha.value == "" || repeteSenha.value != senha.value) {
        btnSubmit.classList.add('disabled')
    } else if (repeteSenha.value == senha.value) {
        btnSubmit.classList.remove('disabled')
    }
}, 100)
console.log("morri")