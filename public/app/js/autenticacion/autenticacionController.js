let authController = {
    data: {
        usuario: "danielperez",
        clave: "daniel123"
    },
    login: ()=>{
        authService.login(authController.data)
        .then(response => {
            if(response.error === "" && response.mensaje === "OK"){
                window.location.href = "usuario/index"
            }
        })
    }
}

document.addEventListener("DOMContentLoaded", ()=>{
    let btnLogin = document.getElementById("btnLogin")
    btnLogin.onclick = () => {
        authController.login()
    }
})