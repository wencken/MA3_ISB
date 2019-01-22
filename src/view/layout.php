<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Wencke Nuyt"/>
  <meta name="description" content="Internationaal Straattheaterfestival Beveren"/>
  <meta name="keywords" content="Major Atelier, redesign, ISB"/>
  <title>ISB | 2018</title>
    <?php echo $css;?>
  </head>

  <body class = "container">
    <nav>
      <ul class="navigatie">
        <li class="<?php if($currentPage == 'index') echo 'active';?>"><a class="nav" href="index.php">Home</a></li>
        <li class="<?php if($currentPage == 'programma') echo 'active';?>"><a class="nav" href="index.php?page=programma">Programma</a></li>
        <li><a class="nav" href="index.php">Plan</a></li>
        <li><a class="nav" href="index.php">Praktisch</a></li>
      </ul>
    </nav>
    <main>
      <?php echo $content;?>
      <section class ="footer_content">
        <h2 class="hidden">footer</h2>
        <article>
          <h3>Onze partners</h3>
          <ul>
            <li><a class="link" href="http://www.winkeldorp.be"><img src="./assets/img/sponsor/sponsor1.png"></a></li>
            <li><a class="link" href="http://beverse-feesten.be"><img src="./assets/img/sponsor/sponsor2.png"></a></li>
            <li><a class="link" href="http://www.aouteneclats.be"><img src="./assets/img/sponsor/sponsor3.png"></a></li>
            <li><a class="link" href="http://www.warandeshopping.be"><img src="./assets/img/sponsor/sponsor4.png"></a></li>
          </ul>
        </article>
        <div>
          <article>
              <h3>Nuttige links</h3>
              <ul>
                <li class="link-hover"><a class="link" href="index.php?page=programma">Programma</a></li>
                <li class="link-hover"><a class="link" href="index.php">Bereikbaarheid</a></li>
                <li class="link-hover"><a class="link" href="index.php">Voor het hele gezin</a></li>
                <li class="link-hover"><a class="link" href="index.php">Vrijwilligers/ jobs/ stage</a></li>
                <li class="link-hover"><a class="link" href="index.php">Veelgestelde vragen</a></li>
              </ul>
          </article>
          <article>
              <h3>Volg ons</h3>
              <ul>
                <li class="link-hover"><a class="link" href="https://www.facebook.com/">Facebook</a></li>
                <li class="link-hover"><a class="link" href="https://www.instagram.com/?hl=n">Instagram</a></li>
                <li class="link-hover"><a class="link" href="https://twitter.com/?lang=nl">Twitter</a></li>
                <li class="link-hover"><a class="link" href="https://straattheaterfestivalbeveren.wordpress.com/">Nieuwsbrief</a></li>
              </ul>
          </article>
          <article>
              <h3>Contacteer ons</h3>
              <address>
              Donkvijverstraat<br>
              9120 Beveren
              </address>
              <p>T <span><a class="link" href="tel:+32(0)3 750 16 29">+32(0)3 750 16 29</a></span></p>
              <p>E <span><a class="link" href="mailto:erik.apers@beveren.be">erik.apers@beveren.be</a></span></p>
          </article>
        </div>
      </section>
    </main>
    <footer>
      <small>&copy; Wencke Nuyt</small>
    </footer>
    <?php echo $js;?>
  </body>
</html>
