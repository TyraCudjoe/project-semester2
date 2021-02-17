<!-- als de pagina opgeroepen word met content word er .php achter gezet anders gaat de pagina naar home.php   -->
<?php
    if(isset($_GET["content"])){
        include("./" . $_GET["content"] . ".php");
    } else {
        include("./home.php");
    }
?>