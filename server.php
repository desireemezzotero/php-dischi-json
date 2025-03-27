<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if( $_POST['title'] && $_POST['artist'] && $_POST['img'] && $_POST['year'] && $_POST['genre']) {

  
  //prendo tutti gli elementi del form
  $title = $_POST['title'];
  $artist = $_POST['artist'];
  $img = $_POST['img'];
  $year = $_POST['year'];
  $genre = $_POST['genre']; 
  
    //prendo le stringhe 
    $json_text  = file_get_contents('./disc.json');
    
    //trasformo da json a php
    $json = json_decode($json_text ,true);
    
    //aggiungo i nuovi elementi 
    $json[ ] = [
       "title" => $title,
       "artist" => $artist,
        "img" => $img, 
        "year" => $year, 
        "genre" => $genre 
      ];
  
    //riconverto la struttura in json
    $json_new = json_encode($json);
  
    //sovrascrizzione del file json
    $result = file_put_contents('./disc.json', $json_new);
if ($result === false) {
  echo "Errore nella scrittura del file disc.json. Dettagli: " . error_get_last()['message'];
} else {
    echo "File scritto correttamente.";
}
   
   // header('Location: ./index.php');
} else {
  header('Location: ./index.php');
}

?>