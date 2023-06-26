var formSignin = document.querySelector('#signin')
var formSignup = document.querySelector('#signup')
var btnColor = document.querySelector('.btnColor')

document.querySelector('#btnSignin')
  .addEventListener('click', () => {
    let btnLogin = document.getElementById('btnSignin')
    let btnCadast = document.getElementById('btnSignup')

    formSignin.style.left = "25px"
    formSignup.style.left = "450px"
    btnColor.style.left = "0px"

    btnLogin.style.color = 'white'
    btnCadast.style.color = 'black'
})

document.querySelector('#btnSignup')
  .addEventListener('click', () => {
    let btnLogin = document.getElementById('btnSignin')
    let btnCadast = document.getElementById('btnSignup')

    formSignin.style.left = "-450px"
    formSignup.style.left = "25px"
    btnColor.style.left = "110px"

    btnLogin.style.color = 'black'
    btnCadast.style.color = 'white'

})