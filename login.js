function validazione(event){
    if(form.username.value.length == 0 || form.password.value.length == 0) {
        document.querySelector("#validation").classList.remove("hidden");
        event.preventDefault();
    }
        
}

const form = document.forms['login'];
form.addEventListener('submit', validazione);