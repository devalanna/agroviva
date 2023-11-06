function onLoad(){
    const nomeInput = document.getElementById('nome');
    const nomeErro = document.getElementById('nome-erro')
    nomeInput.addEventListener('blur', () => {
        nomeErro.innerHTML = ''
        if(nomeInput.value === '')
        {
            nomeErro.innerHTML = 'nome obrigatório'
        }
    })

    const emailInput = document.getElementById('email')
    const emailErro = document.getElementById('email-erro')
    emailInput.addEventListener('blur', () => {
        emailErro.innerHTML =''
        if (!emailInput.value.includes('@'))
        {
            emailErro.innerHTML = 'email invalido'
        }
    })

    const senhaInput = document.getElementById('senha')
    const senhaErro = document.getElementById('senha-erro')
    senhaInput.addEventListener('blur', () => {
        senhaErro.innerHTML =''
        if(senhaInput.value.length < 8)
        {
            senhaErro.innerHTML = 'conter no minimo 8 caracteres'
        }
    })

    const idadeInput = document.getElementById('idade')
    const idadeErro = document.getElementById('idade-erro')
    idadeInput.addEventListener('blur', () => {
        idadeErro.innerHTML =''
        if(parseInt(idadeInput.value) === 0 || idadeInput.value === '')
        {
            idadeErro.innerHTML = 'idade obrigatória'
        }
    })

    
}

document.addEventListener('DOMContentLoaded', onLoad)
