<?php
require_once __DIR__ . '/classes/Movie.php';

$movies = [
    new Movie(
        "Spider-Man: No Way Home",
        "en_US",
        "Jon Watts",
        ["Tom Holland", "Benedict Cumberbatch", "Zendaya"],
        "https://m.media-amazon.com/images/M/MV5BZWMyYzFjYTYtNTRjYi00OGExLWE2YzgtOGRmYjAxZTU3NzBiXkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_.jpg",
        "In seguito agli eventi di Spider-Man: Far from Home, la vita di Peter Parker viene stravolta dopo che Mysterio rivela al mondo la sua identità. Peter chiede aiuto a Stephen Strange affinché usi la magia per far scordare a tutti la sua identità. Ma l'incantesimo non va come previsto e Peter si ritrova a dover affrontare nemici da altri universi e a scoprire cosa significa davvero essere Spider-Man.",
        "2021-12-15",
        "USA",
        8.4
    ),
    new Movie(
        "Uncharted",
        "en_US",
        "Ruben Fleischer",
        ["Tom Holland", "Mark Wahlberg", "Antonio Banderas"],
        "https://m.media-amazon.com/images/M/MV5BMzBiZjlkYzItN2QyNS00MzYwLWJmZTAtZWEwOTBkMTNmZjlhXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg",
        "La storia è un prequel dei giochi, con Holland nei panni di un Drake più giovane, che ci mostra i dettagli di come ha incontrato e fatto amicizia con Sully.",
        "2022-02-17",
        "USA",
        null
    ),
    new Movie(
        "Matrix: Resurrections",
        "en_US",
        "Lana Wachowski",
        ["Keanu Reeves", "Carrie-Anne Moss", "Yahya Abdul-Mateen II"],
        "https://m.media-amazon.com/images/M/MV5BMGJkNDJlZWUtOGM1Ny00YjNkLThiM2QtY2ZjMzQxMTIxNWNmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg",
        "Due realtà differenti caratterizzano il mondo: una rappresentata dalla vita di tutti i giorni e un'altra nascosta e inaccessibile. Per scoprire se la sua realtà è un costrutto fisico o mentale, per conoscere veramente se stesso, Mr. Anderson dovrà scegliere di seguire ancora una volta il Bianconiglio. E se Thomas, Neo, ha imparato qualcosa è che la scelta, pur essendo un'illusione, è ancora una volta la via d'uscita o di ingresso in Matrix. Ovviamente, Neo sa già cosa deve fare. Ma quello che ancora non sa è che Matrix è più forte, più sicura e più pericolosa che mai. Salvato da Matrix per diventare il salvatore dell'umanità, ancora una volta dovrà scegliere quale strada prendere.",
        "2022-01-01",
        "USA",
        6.9
    ),
    new Movie(
        "L'era glaciale - Le avventure di Buck",
        "en_US",
        "John C. Donkin",
        ["Utkarsh Ambudkar", "Sean Kenin", "Jake Green"],
        "https://m.media-amazon.com/images/M/MV5BZTA4NmFiZjQtYWI2NC00Y2Y0LWI5M2ItOTcwZmM5YzliOGViXkEyXkFqcGdeQXVyNjMwMTM0MTA@._V1_.jpg",
        "I fratelli Possum Crash ed Eddie hanno deciso di trovare un posto tutto loro, ma si ritrovano intrappolati nel mondo perduto",
        "2022-01-28",
        "USA",
        6.3
    ),
    new Movie(
        "Un Natale al Sud",
        "it_IT",
        "Federico Marsicano",
        ["Massimo Boldi", "Biagio Izzo", "Anna Tatangelo"],
        "https://m.media-amazon.com/images/M/MV5BNGRmYTU3OWYtNDQ4OS00NzRiLWFiYWItYTkyZjIwNGYyZWM0L2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMjQ3NzUxOTM@._V1_.jpg",
        "Ambrogio e Peppino festeggiano il Natale insieme alle loro famiglie. I loro figli hanno una relazione con due ragazze incontrate su un' app di incontri e decidono di aiutarli.",
        "2016-12-01",
        "Italy",
        4.8
    ),
];

foreach ($movies as $movie) {
    $movie->released = $movie->isReleased();
}

header('Content-Type: application/json');

echo json_encode($movies);
?>