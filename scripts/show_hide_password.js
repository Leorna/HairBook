let hiddenPwordCreate = true
let hiddenLogin = true

function showPwordCreate() {
    let pword = document.getElementById('pass')
    let pwordConfirm = document.getElementById('pass-confirm')
    let button = document.getElementById('create-account')

    if (hiddenPwordCreate) {
        pword.type = 'text'
        pwordConfirm.type = 'text'
        button.innerText = 'Hide passwords'
        hiddenPwordCreate = false
    } else {
        pword.type = 'password'
        pwordConfirm.type = 'password'
        button.innerText = 'Show passwords'
        hiddenPwordCreate = true
    }
}

function showPwordLogin() {
    let pword = document.getElementById('passlogin')
    let button = document.getElementById('login')

    if (hiddenLogin) {
        pword.type = 'text'
        button.innerText = 'Hide password'
        hiddenLogin = false
    } else {
        pword.type = 'password'
        button.innerText = 'Show password'
        hiddenLogin = true
    }
}