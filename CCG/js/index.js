function validate(){ 

    var user = document.getElementById("text-input").value; 
    var password = document.getElementById("password").value; 

    if (user == "admin" && password == "admin") { 
        window.location.href = "doacoes.html"; 
    } 

    else { 
        alert("Usuário ou resposta invalido(s)") 
    } 
} 

function home(){
    window.location.href = "index.html"
}

function save(){
    alert("Seus dados foram enviados\nEntraremos em contato em breve!!!")
    window.location.href = "index.html"
}
