<?php
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

    switch ($alert) {
        case "inschrijven_succes":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Uw gegevens zijn verzonden.
                  </div>';
            header("Refresh: 3; ./index.php?content=home");
        break;

        case "inschrijven_gefaald":
            echo '<div class="alert alert-danger mt-4 w-50 mx-auto text-center" role="alert">
                    Er is iets fout gegaan. Probeer het later nog eens...
                  </div>';
            header("Refresh: 3; ./index.php?content=form");
        break;
    }

?>