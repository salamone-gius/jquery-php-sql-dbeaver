<!-- inserisco il codice con le informazioni da iniettare nell'HTML all'interno del tag all'inizio del foglio di lavoro -->
<?php
    $name = "Giuseppe";
    $surname = "Salamone";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
        <style>
            h1, h3 {
                text-align: center;
            }
            p {
                text-align: justify;
            }
        </style>
    </head>
    <body>
        
        <h1>PHP</h1>

        <p>PHP è un linguaggio server-side particolarmente diffuso nello sviluppo web perchè può essere facilmente integrato nell'HTML, è open-source ed è utilizzabile su qualsiasi sistema operativo.<br>
        
        Viene eseguito direttamente sul server dove è hostato il sito, non può reagire ad un evento scatenato dall'utente, crea codice HTML che verrà poi visualizzato dal browser.<br>

        Come JS è un linguaggio Case Sensitive, quindi occhio a maiuscole e minuscole, niente spazi o -. I nomi composti vanno scritti con underscore ($mia_variabile) o in camelCase ($miaVariabile). I commenti su una riga saranno preceduti da // o #, quelli su più righe dovranno essere racchiusi all'interno di /* ... */ <br>
    
        Il codice deve essere delimitato dal tag < ? php ? > </p>

        <h3>Inizio esempi utilizzando php</h3>

        <!-- richiamo il tag php dove voglio stampare le informazioni contenute utilizzando la funzione echo -->

        <!-- La funzione echo STAMPA $variabili, 'stringhe di testo' o integer -->
        <p>Ciao, mi chiamo <?php echo $name; echo ' '; echo $surname; ?> ed ho <?php echo 35; ?> anni.</p>




    </body>
</html>