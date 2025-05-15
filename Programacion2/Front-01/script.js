function validarFormulario() {
    let nombre = document.getElementById("nombre").value.trim();
    let correo = document.getElementById("correo").value.trim();
    
    //validar si los campos estan vacios
    if (!nombre === "" || !correo === "") {
        alert("Por favor, completa todos los campos.");
        return;
    }
    //validar el formato del correo 
    if (!correo.includes("@") || !correo.includes(".") ){ 
        alert("Por favor, ingresa un correo electrónico válido.");
        return;
    }
    //si todo esta correcto
    alert("Formulario enviado correctamente.")
    
}