<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formaulaire etudiant</title>
  </head>
  <body>
    <form action="triatement.php" method="post">
      <h2>Formulaire etudiant</h2>
      <div class="field">
        <div class="inputField">
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="nom" placeholder="entrez votre nom" required>
        </div>
        <div class="inputField">
          <label for="prenom">Prenom</label>
          <input type="text" name="prenom" id="prenom" placeholder="entrez votre prenom" required>
        </div>
        <div class="inputField">
          <label for="matricule">Matricule</label>
          <input type="text" name="matricule" id="matricule" placeholder="entrez votre matricule" required>
        </div>
        <div class="inputField">
          <label for="username">User Name</label>
          <input type="text" name="username" id="username" placeholder="entrez votre username" required>
          <span id="feedback"></span>
        </div>
        <input type="submit" value="Envoyer">
      </div>
    </form>

    <?php include_once"affiche.php";?>
    <script type="module" src="./traitement_form.js"></script>
  </body>
</html>
