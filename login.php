<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Connexion</title>
    <link rel="stylesheet" href="Styles/login.css"/>
  </head>
  <body>
    <div id="bg"></div>

    <form method="post" action="function.php">
      <!-- <img src="Assets/sam.png" class="logo" /> -->
      <h1>Page de connexion</h1>
      <div class="form-field">
        <input type="text" name="nom" placeholder="Nom d'utilisateur" required />
      </div>

      <div class="form-field">
        <input type="password" name="password" placeholder="Mot de passe" required />
      </div>

      <div class="form-field">
        <input class="btn" type="submit" value="Se connecter">
        <a class="button" href="verifier.html">S'inscrire</a> 
        
      </div>
    </form>
   
  </body>
</html>
