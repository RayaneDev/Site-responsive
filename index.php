<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='#234070' name='theme-color'>
  <meta name="keywords" content="" />

  <meta name="description" content="Maquette de site web pour serveur Minecraft" />
  <meta property="og:site_name" content="MinecraftServerExample.000webhostapp.com"/>


  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <![endif]-->

  <title>Minecraft Server Example</title>

  <link rel="stylesheet" href="css/main.css" />
  <link rel="icon" href="images/favicon.ico" />

</head>
<body>

  <header class="l-header-menu">
    <div class="l-header-center">



      <div class="l-overlay"></div>
      <nav class="m-header-menu">

        <div class="l-menu-icon" onclick="select_menu(this)">
          <div class="l-bars">
            <div class="bar-1"></div>
            <div class="bar-2"></div>
            <div class="bar-3"></div>
          </div>
        </div>
        <ul>
          <li><a href="#welcome">Serveur</a></li>
          <li><a href="#team">Équipe</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav>

      <div class="l-infos">
        <span class="logged">12</span> connectés | <span class="registered">107</span> inscrits
        <a href="#"><div class="l-header-logo">
        </div></a>
      </div>

    </div>
  </header>

  <div class="l-wrapper">
    <span class="anchor" id="welcome"></span>
    <div class="l-welcome">
      <div class="l-address"><img src="images/logo-mc.jpg" alt="logo" class="logo" />play.server.com</div>
    </div>
    <span class="anchor" id="team"></span>
    <section class="l-team">
      <h2>Notre équipe</h2>
      <div class="l-members">
        <div class="l-member"><div class="l-pseudo">Name 1</div><img src="images/head.jpg" alt="Avatar" /></div>
        <div class="l-member"><div class="l-pseudo">Name 2</div><img src="images/head.jpg" alt="Avatar" /></div>
        <div class="l-member"><div class="l-pseudo">Name 3</div><img src="images/head.jpg" alt="Avatar" /></div>
        <div class="l-member"><div class="l-pseudo">Name 4</div><img src="images/head.jpg" alt="Avatar" /></div>
        <div class="l-member"><div class="l-pseudo">Name 5</div><img src="images/head.jpg" alt="Avatar" /></div>
      </div>
      <div class="l-presentation">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed scelerisque magna. Ut posuere et libero ac venenatis. Curabitur elementum vel urna eget tincidunt. Donec faucibus, nisi et venenatis efficitur, sapien felis mollis mi, finibus maximus elit elit eu ante. Aenean varius lacus ac tortor malesuada porttitor. Aliquam sit amet placerat metus. Curabitur ac tincidunt est, id efficitur elit. Nam molestie, massa non consequat maximus, urna velit euismod elit, non pretium tortor mauris eget metus.
        </p>

      </div>
    </section>
    <span class="anchor" id="contact"></span>
    <div class="l-contact">
      <section class="l-contact-wrapper">
        <h2 class="contact-title">Contactez-nous</h2><br />
        <span class="warning">Ceci est une maquette, inutile d'envoyer un message !</span>
        <div class="m-form-container">
          <form method="post" action="#">
            <label for="name">Pseudo :</label><input type="text" name="name" id="name" /><br />
            <label for="email">Adresse-mail :</label><input type="email" name="email" id="email" /><br />
            <label for="message">Message :</label><br /><textarea id="message" name="message"></textarea><br />
            <input type="submit" name="submit" value="Envoyer" /><br />
          </form>
        </div>
        <section class="l-social-network">
          <h2 class="join-title">Rejoins-nous !</h2>
          <div class="l-group">
            <div class="l-bloc"><a href="http://www.facebook.fr" target="_blank"><img src="images/fb.jpg" alt="Facebook" class="icon-fb" /></a></div>
            <div class="l-bloc"><a href="http://www.twitter.fr" target="_blank"><img src="images/twitter.jpg" alt="Twitter" class="icon-twitter" /></a></div>
            <div class="l-bloc"><a href="http://www.youtube.fr" target="_blank"><img src="images/youtube.jpg" alt="Youtube" class="icon-youtube" /></a></div>
          </div>
        </section>
        </section>
      </div>
  </div>

  <footer class="l-footer">
    <span>Minecraft Server Example - (c) Copyright Dranosty 2017</span>
  </footer>



<script src="js/script.js"></script>
</body>
</html>
