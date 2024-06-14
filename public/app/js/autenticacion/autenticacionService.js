let authService = {
    login: (data)=>{
        fetch("autenticacion/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            if(!response.ok){
                throw new Error(response.status)
            }
            return response.json()
        })
        .then(data => {
            if(data.error != ""){
                console.error("Error interno")
            }
            else{
                console.info("todo bien")
            }
            console.log("Respuesta del servidor", data)
        })
        .catch(error => {
            console.error("ERROR EN LA PETICION", error)
        })
    }
}