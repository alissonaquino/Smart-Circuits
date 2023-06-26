function reveal(){
    var reveals = document.querySelectorAll('.reveal')

    reveals.forEach((reveal) => {
        var windowHeight = window.innerHeight;
        var elementTop = reveal.getBoundingClientRect().top
        var elementVisible = 100

        if(elementTop < windowHeight - elementVisible){
            reveal.classList.add('active')
        }
        else{
            reveal.classList.remove('active')
        }
    })
}
window.addEventListener('scroll', reveal)
//slides
let contador = 1;

setInterval( function(){
    document.getElementById('slide' + contador).checked = true;
    contador++;

    if(counter > 5 ) {
        contador = 1;
    }
}, 3000 );