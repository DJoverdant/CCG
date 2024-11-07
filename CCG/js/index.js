function send(to){

    const forms = document.getElementById("form");

    forms.addEventListener('submit', evento => {
        evento.preventDefault();
        
        const form_dados = new FormData(forms);
        const dados = Object.fromEntries(form_dados);
        
        fetch(to, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dados)
        })
    })
    .then(resposta => resposta.json())
    .then(data => {
        if (data.status === 'success') {
            window.location.href = data.redirect;  
        } 
        else {
            alert(data.message);  
            window.location.href = data.redirect;  
        }
    })
    .catch(error => console.error('Erro:', error));
    
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
