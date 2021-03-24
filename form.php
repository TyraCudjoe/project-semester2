<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="./index.php?content=create" method="post" class="form-card">
                <p>Geslacht:</p>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="geslacht">
                    <option selected>Kies een optie</option>
                    <option value="man">Man</option>
                    <option value="vrouw">Vrouw</option>
                    <option value="zeg ik liever niet">Zeg ik liever niet</option>
                </select>
                <div class="mb-3">
                    <label for="exampleInputVoornaam" class="form-label">Voornaam:</label>
                    <input type="voornaam" class="form-control" id="exampleInputVoornaam"
                        aria-describedby="voornaamHelp" name="voornaam" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputTussenvoegsel" class="form-label">Tussenvoegsel:</label>
                    <input type="tussenvoegsel" class="form-control" id="exampleInputTussenvoegsel"
                        aria-describedby="tussenvoegselHelp" name="tussenvoegsel">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAchternaam" class="form-label">Achternaam:</label>
                    <input type="achternaam" class="form-control" id="exampleInputAchternaam"
                        aria-describedby="achternaamHelp" name="achternaam" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputGeboortedatum" class="form-label">Geboortedatum:</label>
                    <input type="geboortedatum" class="form-control" id="exampleInputGeboortedatum"
                        aria-describedby="geboortedatumHelp" name="geboortedatum" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputTelefoonnummer1" class="form-label">Telefoonnummer:</label>
                    <input type="telefoonnummer" class="form-control" id="exampleInputTelefoonnummer1" name="telefoonnummer" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputHuisnummer1" class="form-label">Huisnummer:</label>
                    <input type="huisummer" class="form-control" id="exampleInputHuisnummer1" name="huisnummer" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPostcode1" class="form-label">Postcode:</label>
                    <input type="Postcode" class="form-control" id="exampleInputPostcode1" name="postcode" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>