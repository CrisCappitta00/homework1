/*Salvo all'interno di una variabile un riferimento al mio form */
const my_form = document.forms['form_login'];
console.log(my_form);
/*Creo un event listener che partirà ogni qualvolta si preme invio e i campi non sono stati riempiti e richiamerà la funzione controlla dati*/
my_form.addEventListener('submit', controlladati);

function controlladati(event) {
    /*salvo i diversi input del mio form all'interno di inputs e successivamente lo itero*/
    const inputs = my_form.querySelectorAll('input');
for (const iterator of inputs) {
    /*controllo se i campi sono stati effettivamente riempiti */
    if (iterator.value === ""){
        /*Creo una variabile in cui vado a salvare l'id del campo non compilato */
        const salvas = document.getElementById(iterator.id);
        /*Visualizzo il messaggio d'errore attivando il div */
        salvas.classList.remove("hidden");
        /*Blocco l'invio del form */
        event.preventDefault();
    }
}
}