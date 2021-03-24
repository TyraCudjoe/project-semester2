<?php

    include("./connectdb.php");
    include("./functions.php");

    $voornaam = sanitize($_POST["voornaam"]);
    $tussenvoegsel = sanitize($_POST["tussenvoegsel"]);
    $achternaam = sanitize($_POST["achternaam"]);
    $geslacht = sanitize($_POST["geslacht"]);
    $geboortedatum = sanitize($_POST["geboortedatum"]);
    $email = sanitize($_POST["email"]);
    $telefoonnummer = sanitize($_POST["telefoonnummer"]);
    $huisnummer = sanitize($_POST["huisnummer"]);
    $postcode = sanitize($_POST["postcode"]);

    $sql = "INSERT INTO `inschrijvingen` (`id`,
                                          `voornaam`,
                                          `tussenvoegsel`,
                                          `achternaam`,
                                          `geslacht`,
                                          `geboortedatum`,
                                          `email`,
                                          `telefoonnummer`,
                                          `huisnummer`,
                                          `postcode`)
            VALUES (NULL,
                    '$voornaam',
                    '$tussenvoegsel',
                    '$achternaam',
                    '$geslacht',
                    '$geboortedatum',
                    '$email',
                    '$telefoonnummer',
                    '$huisnummer',
                    '$postcode');";
    $result = mysqli_query($conn, $sql);

    var_dump($sql);

    if($result) {
        header("Location: ./index.php?content=message&alert=inschrijven_succes");
    } else {
        header("Location: ./index.php?content=message&alert=inschrijven_gefaald");
    }

    



?>