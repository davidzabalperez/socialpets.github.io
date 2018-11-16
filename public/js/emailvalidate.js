//EMAIL vALIDATE 
function validation() {
    //contar cuentas arrobas
    //caracteres raros
    //buscar un punto si las dos posiciones seguientes hay caracteres
    var valor_email = document.getElementById("email").value;
    var arroba = valor_email.indexOf("@");
    var punto = valor_email.lastIndexOf(".");
    if(!valor_email || punto<arroba+2 || punto+2 == vallor_email.length) {
        alert("Email erroneo");
        return false;
    }else if(){
        //numero arrobas
        //que solo halla puntos y @
    }else{
        alert("logeado!");
    }
}