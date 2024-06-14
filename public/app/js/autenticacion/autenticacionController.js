let authController = {
    data: {
        usuario: "danielperez",
        clave: "daniel123"
    },
    login: ()=>{
        authService.login(authController.data)
    }
}

document.addEventListener("DOMContentLoaded", ()=>{
    let btnLogin = document.getElementById("btnLogin")
    btnLogin.onclick = () => {
        authController.login()
    }
})