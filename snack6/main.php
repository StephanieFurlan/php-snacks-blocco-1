<?php 

// Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form.
// Il form avrà un input di testo in cui inserire il nome di
// un invitato.
// Inseriamo nell’altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.

$listaInvitati = [
    "Pinco Pallino1",
    "Pinco Pallino2",
    "Pinco Pallino3",
    "Pinco Pallino4",
    "Pinco Pallino5",
    "Pinco Pallino6"
];

$name = $_GET["name"];

if (in_array($name, $listaInvitati)) {
    echo $name . " è nella lista degli invitati!";
} else {
    echo $name . " non è nella lista degli invitati!";
}

?>