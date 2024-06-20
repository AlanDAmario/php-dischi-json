<?php

$artist = [
    //TRASFORMATO IN ARRAY INDICIZZATO DI ARRAY ASSOCIATIVI
    //IN PARTENZA ERA [{  "title" => "New Jersey",}]
    [
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "year" => 1988,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
        "genre" => "Rock"
    ],
    [
        "title" => "Live at Wembley 86",
        "author" => "Queen",
        "year" => 1992,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
        "genre" => "Pop"
    ],
    [
        "title" => "Ten\"s Summoner\"s Tales",
        "author" => "Sting",
        "year" => 1993,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
        "genre" => "Pop"
    ],
    [
        "title" => "Steve Gadd band",
        "author" => "Steve Gadd Band",
        "year" => 2018,
        "poster" => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
        "genre" => "Jazz"
    ],
    [
        "title" => "Brave new World",
        "author" => "Iron Maiden",
        "year" => 2000,
        "poster" => "https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg",
        "genre" => "Metal"
    ],
    [
        "title" => "One more car, one more rider",
        "author" => "Eric Clapton",
        "year" => 2002,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
        "genre" => "Rock"
    ]
];

//********************************************************************************************* */

// codice PHP che serve per inviare una risposta JSON ben formattata al client, rendendo i dati facilmente utilizzabili da applicazioni web.

//'HEADER'Questo comando PHP invia un'intestazione HTTP al client (di solito un browser) che indica il tipo di contenuto della risposta.

//'Content-Type'Questo comando PHP indica il tipo di contenuto della risposta.
header('Content-Type: application/json');

//Questo comando PHP converte un array o un oggetto PHP in una stringa JSON e la invia al client.
echo json_encode($artist);
