function validate(){ 

    var user = document.getElementById("user").value; 
    var question = document.getElementById("question").value; 

    if (user == "User" && question == "sim") { 
        window.location.href = "pag3.html"; 
    } 

    else if (user == "User" && question == "nao") { 
        window.location.href = "pag2.html"; 
    } 

    else { 
        alert("Usuário ou resposta invalido(s)") 
    } 
} 

function home(){
    window.location.href = "index.html"
}

function question(){
    window.location.href = "question.html"
}
