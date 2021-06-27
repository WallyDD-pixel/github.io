<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleac.css">
  <title>AUTO ÉCOLE LES CHÉNES</title>
  <link rel="favicon" type="image/png" href="./logo.png">
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="./index.php"><img src="./logo.png" class = "img2"alt="logo"></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href ="./code.html"data-after="projets">code en ligne</a></li>
            <li><a href="./formation.html" data-after="About">Formation</a></li>
            <li><a href="./contact.php" data-after="Contact">Contact</a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- fin Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>AUTO ÉCOLE LES CHÉNES<span></span></h1>
        <a href="#projets" type="button" class="cta">présentation</a>
      </div>
    </div>
  </section>
  <!-- fin Hero Section  -->
<!-- Projets Section -->
<section id="projets">
  <div class="clc">
   
  <div class="projets container">
    <div class="projets-header">
      <h1 class="section-title">AUTO ÉCOLE LES CHÉNES <hr width="100%" size="7px" color="#00000"></h1>
      <h2>L'école de la bonne conduite <hr width="55%" size="7px" color="#00000"></h2>
    <p>Notre politique de prix attractifs avec nos différentes formules tout compris est sans aucuns doute à l'origine de notre succés mais seule la qualité de notre travail et la satisfaction de nos éléves assurent notre pérennité.<br>Le serieux, l'efficacité et le dynamisme de notre équipepédagogique qualifiés,font que chaque année,de nombreux futurs conducteur nous rejoignent.
    
  </p>
  <h1 class="section-title">Info<hr width="100%" size="7px" color="#00000"></h1>
      
    <p><strong>Téléphone</strong>: 01 30 32 80 48 <br><strong>Adresse </strong>: 205 Rue des Chênes Bruns, 95000 Cergy <br><strong>Email</strong>: autoecoledeschenescergy@hotmail.com 
  </p>
  </div>
 
  </div>
  
    
</section>
<!-- fin Projets Section -->
 <!-- Footer -->
 <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>AUTO ÉCOLE LES CHÉNES</span></h1></div>
      <h2>L'auto école de la bonne conduite</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href=""><img src="https://img.icons8.com/ios/50/000000/instagram.png"/></a>
        </div>
        <div class="social-item">
          <a href=""><img src="https://img.icons8.com/ios/100/000000/facebook--v1.png"/></a>
        </div>
        <div class="social-item">
          <a href=""><img src="https://img.icons8.com/material-outlined/100/000000/twitter.png"/></a>
        </div>
      </div>
      <p>Copyright © 2021 wall-E. Tous les droits réservés</p>
    </div>
  </section>
  <!-- fin Footer -->
  <script>
    const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});
  </script>
</body>
</html>
