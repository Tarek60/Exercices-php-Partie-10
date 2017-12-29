<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/lib/bootstrap.min.css">
        <title>TP 1</title>
    </head>
    <body>
        <div class="formulaire">
            <img src="assets/img/e2n.jpg" />
            <?php
            if (empty($_POST)) {
                ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-offset-4">
                            <h1>Formulaire E2N</h1>
                            <form action="index.php" method="POST" class="formulaire">
                              <label>Nom : </label><input type="text" name="lastname" />
                              <div class="space"></div>
                              <label>Prénom : </label><input type="text" name="firstname" />
                              <div class="space"></div>
                              <label>Date de naissance : </label><input type="text" name="birthday" />
                              <div class="space"></div>
                              <label>Lieu de naissance : </label><input type="text" name="birthplace" />
                              <div class="space"></div>
                              <label>Nationalité : <input type="text" name="nationality" />
                              <div class="space"></div>
                              <label>Adresse : </label><input type="text" name="adresse" />
                              <div class="space"></div>
                              <label>Email : </label><input type="email" name="email" />
                              <div class="space"></div>
                              <label>N° de téléphone : <input type="text" name="phone" />
                              <div class="space"></div>
                              <label>Diplôme : </label><select name="diplome">
                                <option value="Sans">Sans</option>
                                <option value="Bac">Bac</option>
                                <option value="Bac+1">Bac+1</option>
                                <option value="Bac+2">Bac+2</option>
                                <option value="Bac+3">Bac+3</option>
                                <option value="Supérieur">Supérieur</option>
                              </select>
                              <div class="space"></div>
                              <label>N° de pôle emploi : </label><input type="number" name="emploi" />
                              <div class="space"></div>
                              <label>Nombres de badges : </label><input type="number" name="badge" />
                              <div class="space"></div>
                              <label>Lien codecademy : </label><input type="text" name="codecademy" />
                              <div class="space"></div>
                               <!-- <table>
                                    <tr>
                                        <th>Nom : </th>
                                        <td><input type="text" name="lastname" /></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Prénom : </th>
                                        <td><input type="text" name="firstname" /></td>
                                    </tr>
                                    <tr>
                                        <th>Date de naissance : </th>
                                        <td><input type="text" name="birthday" /></td>
                                    </tr>
                                    <tr>
                                        <th>Lieu de naissance : </th>
                                        <td><input type="text" name="birthplace" /></td>
                                    </tr>
                                    <tr>
                                        <th>Nationalité : </th>
                                        <td><input type="text" name="nationality" /></td>
                                    </tr>
                                    <tr>
                                        <th>Adresse : </th>
                                        <td><input type="text" name="adresse" /></td>
                                    </tr>
                                    <tr>
                                        <th>Email : </th>
                                        <td><input type="email" name="email" /></td>
                                    </tr>
                                    <tr>
                                        <th>Téléphone : </th>
                                        <td><input type="text" name="phone" /></td>
                                    </tr>
                                    <tr>
                                        <th>Diplôme : </th>
                                        <td><select name="diplome">
                                                <option value="Sans">Sans</option>
                                                <option value="Bac">Bac</option>
                                                <option value="Bac+1">Bac+1</option>
                                                <option value="Bac+2">Bac+2</option>
                                                <option value="Bac+3">Bac+3</option>
                                                <option value="Supérieur">Supérieur</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Numéro pôle emploi : </th>
                                        <td><input type="number" name="emploi" /></td>
                                    </tr>
                                    <tr>
                                        <th>Nombre de badges : </th>
                                        <td><input type="number" name="badge" /></td>
                                    </tr>
                                    <tr>
                                        <th>Lien codecademy : </th>
                                        <td><input type="text" name="codecademy" /></td>
                                    </tr>
                                </table> -->
                                <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
                                <textarea name="hero" rows="8" cols="80"></textarea>
                                <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</p>
                                <textarea name="hack" rows="8" cols="80"></textarea>
                                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                                <textarea name="experience" rows="8" cols="80"></textarea><br>
                                <input type="submit" value="Validez" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } else {
            if (isset($_POST)) {
                /* echo 'Vous vous appellez ' . $_POST['firstname'] . ' ' . $_POST['lastname']; ?><br>
                  <?php echo 'Vous êtes née le ' . $_POST['birthday'] . ', à ' . $_POST['birthplace']; ?><br>
                  <?php echo 'Vous êtes de nationalité ' . $_POST['nationality']; ?><br>
                  <?php echo 'Votre adresse est ' . $_POST['adresse']; ?><br>
                  <?php echo 'Votre email est : ' . $_POST['email']; ?><br>
                  <?php echo 'Votre n° de téléphone est le ' . $_POST['phone']; ?><br>
                  <?php echo 'Votre dernier diplôme est : ' . $_POST['diploma']; ?><br>
                  <?php echo 'N° pôle emploi : ' . $_POST['emploi']; ?><br>
                  <?php echo 'Nombres de badges : ' . $_POST['badge']; ?><br> */
                ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="valid">
                                <h1>Résultats du formulaire</h1>
                                <p>Votre nom/prénom : <?php echo $_POST['lastname'] . ' ' . $_POST['firstname']; ?></p>
                                <p>Votre date de naissance : <?php echo $_POST['birthday']; ?></p>
                                <p>Votre lieu de naissance : <?php echo $_POST['birthplace']; ?></p>
                                <p>Votre adresse : <?php echo $_POST['adresse']; ?></p>
                                <p>Votre email : <?php echo $_POST['email']; ?></p>
                                <p>Votre n° de téléphone : <?php echo $_POST['phone']; ?></p>
                                <p>Votre dernier diplôme : <?php echo $_POST['diplome']; ?></p>
                                <p>N° pôle emploi : <?php echo $_POST['emploi']; ?></p>
                                <p>Nombre de badges : <?php echo $_POST['badge']; ?></p>
                                <p>Lien codecademy : <a href="<?php echo $_POST['codecademy']; ?>"><?php echo $_POST['codecademy']; ?></a></p>
                                <p><strong>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</strong></p>
                                <p><?php echo $_POST['hero']; ?></p>
                                <p><strong>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</strong></p>
                                <p><?php echo $_POST['hack']; ?></p>
                                <p><strong>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</strong></p>
                                <p><?php echo $_POST['experience']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </body>
</html>
