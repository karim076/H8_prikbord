<?php

$action = $_POST['action'];
if($action == "edit")
{
    //Haal variabelen op, doe inputvalidatie
    $title = $_POST['title'];
    if(empty($title))
    {
        die("Vul een titel in")
    }

    //....



    //1. Haal de verbinding erbij
    //...

    //2. Schrijf query met placeholders
    $query = "UPDATE berichten SET title = :title, content = :content WHERE id = :id";
    
    //3. Zet query om naar statement
    $statement = $conn->prepare($query);

    //4. Voer statement uit, geef nu waarden mee voor de placeholders
    //...

    //5. Niet van toepassing bij een UPDATE-query

    //Stuur gebruiker terug naar lijst met berichten (index.php in hoofdmap)
    //...

}

//.... hier komt de delete-code

