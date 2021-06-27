<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="connexion.css" media="screen" type="text/css" />
    </head>
    <body>
        
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Connexion à l'espace Administrateur</span></div>
        <form action="verificationad.php" method="POST">
          <div class="row">
          <i class="far fa-user"></i>
            <input type="text" name="username"placeholder="Nom d'utilisateur" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password"placeholder="Mot de passe" required>
          </div>
          
          <div class="row button">
            <input type="submit" value="Connexion">
          </div>
          <div id="color-background"></div>
          
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
    <script>
        const inputs = document.querySelectorAll(".input");

function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
	  parent.classList.remove("focus");
	}
}

inputs.forEach(input => {
  input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
    </script>
</html>