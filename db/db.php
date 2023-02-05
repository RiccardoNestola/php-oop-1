<?php

include_once __DIR__ . '/../models/Movie.php';

$moviesList = [];


$LockAndStock = new Movie("Lock and Stock", 1998, "147 min","Commedy","ENG", 'https://www.themoviedb.org/t/p/w1280/b2U6RVPmbQQVAajHwtmTwUBuF22.jpg', );
$Lasvegas = new Movie("Paura e delirio a Las Vegas", 1998, "158 min","Avventura, Dramma","ENG", 'https://www.themoviedb.org/t/p/w1280/qpcGVECXjFcdX6XS935u3x0NFhQ.jpg', );
$Trainspotting = new Movie("Trainspotting", 1996, "134 min","Dramma, Crime","ENG", 'https://www.themoviedb.org/t/p/w1280/rW8igIeFq2reJPgUYK5gukdSVVB.jpg', );
$_28Days = new Movie("28 Giorni Dopo", 2002, "147 min","Horror, Thriller","ENG", 'https://www.themoviedb.org/t/p/w1280/uJVX53gCTTzKB18fAm8CHwMJJvn.jpg', );
$Orange = new Movie("Arancia Meccanica", 1971, "217 min","Dramma","ENG", 'https://www.themoviedb.org/t/p/w1280/n2oKNiEq9DZljqs6xsxs8hnsW9p.jpg', );
$Donnie = new Movie("Donnie Darko", 2001, "153 min","Fantasy,Dramma,Mistero","ENG", 'https://www.themoviedb.org/t/p/w1280/26hBcVJp8Ix2Bmg7xTj7BYjDZZ1.jpg', );


array_push($moviesList, $LockAndStock , $Lasvegas, $Trainspotting, $_28Days, $Orange, $Donnie);
