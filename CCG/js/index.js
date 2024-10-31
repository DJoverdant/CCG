function validate(){ 

    var user = document.getElementById("user").value; 
    var password = document.getElementById("password").value; 

    // checar no bando de dados e armazenar estes valores

} 

function go_to(x){

    if (x==0){
        setTimeout(function(){
            window.location.href = "index.html";
        }, 2000);

    }

    if (x==1){
        document.getElementById("response").innerHTML = "Dados enviados com sucesso!";
        setTimeout(function(){
            window.location.href = "index.html";
        }, 2000);

    }

    if (x==2){
        document.getElementById("response").innerHTML = "Conta criada!";
        setTimeout(function(){
            window.location.href = "login.html";
        }, 2000);

    }

    if (x==3){
        window.location.href = "signup.html";
    }

}
