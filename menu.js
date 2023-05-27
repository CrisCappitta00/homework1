//ottengo l'elemento prima foto 
const menubutton = document.getElementById('foto');
//associo l'evento click 
menubutton.addEventListener('click', clickOnTestButton);
//definisco la funzione clickOnTestButton
function clickOnTestButton(event){
    console.log('è stato effettuato il click');
}