function onLoad(){
    const loginInput = document.getElementById('login')
    const loginErro = document.getElementById('login-erro')
    loginInput.addEventListener('blur', () => {
        loginErro.innerHTML = ''
        if (!loginInput.value.includes('@'))
        {
            loginErro.innerHTML = 'email invalido'
        }
    })
}

document.addEventListener('DOMContentLoaded', onLoad)