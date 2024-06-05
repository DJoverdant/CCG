function validate(){ 

    var user = document.getElementById("user").value; 
    var question = document.getElementById("question").value; 

    if (user == "User" && question == "Adoção") { 
        window.location.href = "adocao.html"; 
    } 
 
    else if (user == "User" && question == "Doação") { 
        window.location.href = "doacao.html"; 
    } 

    else { 
        alert("Usuário ou resposta invalido(s)") 
    } 
} 

function home(){
    window.location.href = "index.html"
}
