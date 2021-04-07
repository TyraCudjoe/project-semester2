<?php
    include("./connectdb.php");
    include("./functions.php");

    $sql = 'SELECT * FROM `inschrijvingen`';
    $result = mysqli_query($conn, $sql);

    $records = "";
    while ($record = mysqli_fetch_assoc($result)) {
        $records .= "<tr>
                        <th scope='row'>" . $record["id"] . "</th>
                        <td>" . $record["voornaam"] . "</td>
                        <td>" . $record["tussenvoegsel"] . "</td>
                        <td>" . $record["achternaam"] . "</td>
                        <td>" . $record["geslacht"] . "</td>
                        <td>" . $record["geboortedatum"] . "</td>
                        <td>" . $record["email"] . "</td>   
                        <td>" . $record["telefoonnummer"] . "</td>
                        <td>" . $record["huisnummer"] . "</td> 
                        <td>" . $record["postcode"] . "</td>
                     </tr>";
    }
?>




<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Voornaam</th>
                            <th scope="col">Tussenvoegsel</th>
                            <th scope="col">Achternaam</th>
                            <th scope="col">Geslacht</th>
                            <th scope="col">Geboortedatum</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefoonnummer</th>
                            <th scope="col">Huisnummer</th>
                            <th scope="col">Postcode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            echo $records;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>