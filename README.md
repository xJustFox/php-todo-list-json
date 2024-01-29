### Esercizio di oggi: PHP ToDo List JSON
nome repo: `php-todo-list-json`
#### Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo. <br>
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.
- Stack:
    -  Html, CSS, VueJS (importato tramite CDN), axios, PHP
#### Consigli
Nello svolgere l’esercizio seguite un approccio graduale. <br>
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”). <br>
Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte). <br>
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
#### Bonus
Mostrare lo stato del task → se completato, barrare il testo
Permettere di segnare un task come completato facendo click sul testo
Permettere il toggle del task (completato/non completato)
Abilitare l’eliminazione di un task
Aggiungere la possibilità di aggiungere un task