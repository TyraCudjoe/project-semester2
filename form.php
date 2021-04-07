<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="./index.php?content=create" method="post" class="form-card">
            <label class="label" for="geslacht">Geslacht</label>
                    <div class="geslacht">
                        <select id="geslacht" class="time" name="geslacht">
                            <option value="m">Man</option>
                            <option value="v">Vrouw</option>
                            <option value="x">Zeg ik liever niet</option>  
                        </select>
                    </div>

                
                <!-- <div class="mb-3">
                    <label for="exampleInputVoornaam" class="form-label">Geslacht:</label>
                    <input type="geslacht" class="form-control" id="exampleInputVoornaam"
                        aria-describedby="voornaamHelp" name="geslacht" required>
                </div> -->


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
                 <label class="label" for="datum kiezen">Geboortedatum:</label>
                    <div class="date2">
                        <input class="date" id="start" type="date" name="geboortedatum" value="2021-01-01"
                            min="1800-01-01" max="3000-12-31">
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

                <div class="g-recaptcha" data-sitekey="6LdW0Z8aAAAAAJQ8kZXVvEZQ8TB_cV_paJYn7rDC" required></div>
                
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>