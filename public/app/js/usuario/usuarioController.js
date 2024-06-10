let userController = {
    data: {
        id: 0,
        apellido: "Perez",
        nombres: "Daniel",
        cuenta: "danielperez",
        clave: "daniel123",
        correo: "daniel@prueba.com",
        perfilId: 2,
        horaEntrada: "",
        horaSalida: ""
    },
    save: ()=>{
        userService.save(userController.data)
    }
}

document.addEventListener("DOMContentLoaded", ()=>{
    let btnUsuarioAlta = document.getElementById("btnUsuarioAlta")
    //btnUsuarioAlta.onclick = userController.save
    btnUsuarioAlta.onclick = () => {
        userController.save()
    }
})