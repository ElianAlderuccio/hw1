function validazione(event){
    if(form.nome.value.length == 0 || form.cognome.value.length == 0 || form.username.value.length == 0 ||
        form.email.value.length == 0 || form.password.value.length == 0) {
        
        document.querySelector("#validation").classList.remove("hidden");
        event.preventDefault();
    }
        
}

const form = document.forms['register'];
form.addEventListener('submit', validazione);