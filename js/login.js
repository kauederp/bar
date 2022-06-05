var btnSubmit = document.querySelector('.btn-success')

btnSubmit.onmouseover = () => {
    document.getElementById('logo').style.filter = 'drop-shadow(0px 0px 6px green)'
}
btnSubmit.onmouseleave = () => {
    document.getElementById('logo').style.filter = ''
}