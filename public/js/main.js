const photos = document.querySelector("img");
console.log(photos);

document.addEventListener('contextmenu', event => {
    console.log(event);
    if(event.target.localName != "a") {
        event.preventDefault()
    }
});