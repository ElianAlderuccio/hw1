function open(){
    document.querySelector("#cont").classList.remove('hidden');
}

function close(){
    document.querySelector("#cont").classList.add('hidden');
}

const menuopen=document.querySelector("#menuMOBILE").addEventListener('click', open);
const menuclose=document.querySelector("#close").addEventListener('click', close);



function delLike(event){
    const pic = event.currentTarget;
    const picsrc = pic.src;
    pic.classList.add("hidden");

    fetch("delprefer.php?picsrc=" + picsrc).then(onResponse);
}

function onResponse(response){
    return response;
}

const notlike= document.querySelectorAll("#photoid");
for(const i of notlike){
    i.addEventListener('click', delLike);
}