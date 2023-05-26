/*Salvo all'interno di una variabile un riferimento al mio form */
const form_acc = document.forms['form_access'];
console.log(form_acc);
/*Creo un event listener che partirà ogni qualvolta si preme invio e i campi non sono stati riempiti e richiamerà la funzione controlla dati*/
form_acc.addEventListener('submit', controllo);

function controllo(event) {
    /*salvo i diversi input del mio form all'interno di inputs e successivamente lo itero*/
    const inputs = form_acc.querySelectorAll('input');
for (const iter of inputs) {
    /*controllo se i campi sono stati effettivamente riempiti */
    if (iter.value === ""){
        /*Creo una variabile in cui vado a salvare l'id del campo non compilato */
        const salvas = document.getElementById(iter.id);
        /*Visualizzo il messaggio d'errore attivando il div */
        salvas.classList.remove("hidden");
        /*Blocco l'invio del form */
        event.preventDefault();
    }
}
}

fetch('http://localhost/homework1/boh.php').then(onResponse).then(onText);
function onResponse(messagge){
    if (messagge.ok){
        return messagge.text();
    }
}

function onText(text){
    console.log(text);
}