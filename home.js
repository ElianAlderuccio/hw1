

function open(){
    document.querySelector("#cont").classList.remove('hidden');
}

function close(){
    document.querySelector("#cont").classList.add('hidden');
}

const menuopen=document.querySelector("#menuMOBILE").addEventListener('click', open);
const menuclose=document.querySelector("#close").addEventListener('click', close);





function createImage(src){
    const image = document.createElement('img');
    image.src = src;
    return image;
}

function onThumbnailClick(event){
    const image = createImage(event.currentTarget.src);
    document.body.classList.add('no-scroll');
    modalView.appendChild(image);
    modalView.classList.remove('hidden');
}

function onModalClick(){
    document.body.classList.remove('no-scroll');
    modalView.classList.add('hidden');
    modalView.innerHTML = '';
}

function aggiungiEvento(){
    for(const i of photo){
        i.addEventListener('click', onThumbnailClick);
    }
}

const photo= document.querySelectorAll(".photo");
aggiungiEvento();

const modalView = document.querySelector('#modal-view');
modalView.addEventListener('click', onModalClick);





function addLike(event){
    const star = event.currentTarget.querySelector(".preferiti");
    const pic = event.currentTarget.querySelector(".photo");
    star.src = "images/stella.png";

    const picsrc = pic.src;
    fetch("addprefer.php?picsrc=" + picsrc).then(onResponse);
}

function onResponse(response){
    return response;
}

const like= document.querySelectorAll("section.choice-grid div");
for(const i of like){
    i.addEventListener('click', addLike);
}





document.querySelectorAll('a[href^="#about"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.querySelectorAll('a[href^="#album"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});




let search_text="";
let search=false;

function Input(event){
    event.preventDefault();
    search_text=event.target.value;
}

function display_images(response){
    //use forEach loop to iterate on each item
    response.photos.forEach((image) => {
        const vista= document.querySelector(".display_images");
        const photo=document.createElement("div");
        photo.classList.add('displaystyle');

        const img = document.createElement('img');
        img.src = image.src.large;

        photo.appendChild(img);
        vista.appendChild(photo);
    });
}

function onClick(){
    if(input.value===""){
        document.querySelector("#alert").classList.remove("hidden");
        return;
    }

    document.querySelector("#alert").classList.add("hidden");
    cleargallery();
    search=true;
    SearchPhotos(search_text);
}

async function SearchPhotos(query){
    const data=await fetch(`https://api.pexels.com/v1/search?query=${query}?&orientation=portrait`, 
    {
        method: "GET",
        headers: {
            Accept: "application/json",
            Authorization: apikey,
        },
    });
    const response=await data.json();
    display_images(response);
}

function onResponse(response){
    return response;
}

function cleargallery(){
    document.querySelector(".display_images").innerHTML="";
}

const apikey="563492ad6f9170000100000145a8037d4e7e43529e65196161781669";
const input=document.querySelector("input");
const search_btn=document.querySelector(".search_btn");

input.addEventListener("input", Input);
search_btn.addEventListener("click",onClick);