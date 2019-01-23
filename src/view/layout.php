<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Wencke Nuyt"/>
  <meta name="description" content="Internationaal Straattheaterfestival Beveren"/>
  <meta name="keywords" content="Major Atelier, redesign, ISB"/>
  <title>ISB | 2018</title>
  <?php echo $css;?>

  <script>
      WebFontConfig = {
        custom: {
          families: ["Radikal", "Canoodle"],
          urls: ["./assets/fonts/fonts.css"]
        }
      };

      (function(d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src = "js/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
  </script>
  </head>

  <body>
    <div class="topbar container">
      <!-- <ul class="social">
        <li><a href="https://www.facebook.com"><img src="./assets/img/social/facebook.png" alt="Facebook"></a></li>
        <li><a href="https://www.instagram.com"><img src="./assets/img/social/instagram.png" alt="Instagram"></a></li>
        <li><a href="https://twitter.com"><img src="./assets/img/social/twitter.png" alt="Twitter"></a></li>
      </ul> -->
      <div class="topright">
        <p>Donkvijverstraat, 9120 Beveren</p>
        <ul class="talen">
          <li class="taal nederlands">NL</li>
          <li class="taal">FR</li>
          <li class="taal">EN</li>
        </ul>
      </div>
    </div>
    <header class="header container">
      <h1 class="heading-1">Internationaal<br> Straattheaterfestival <br> 24 tot 26 augustus 2018</h1>
      <nav>
        <h2 class="heading-2 hidden">Navigatie</h2>
        <ul class="navigatie">
          <li class="<?php if($currentPage == 'index') echo 'active';?>"><a class="nav" href="index.php">Home</a></li>
          <li class="<?php if($currentPage == 'programma') echo 'active';?>"><a class="nav" href="index.php?page=programma">Programma</a></li>
          <li><a class="nav" href="index.php">Plan</a></li>
          <li><a class="nav" href="index.php">Praktisch</a></li>
        </ul>
      </nav>
    </header>
    <main class="container">
      <?php echo $content;?>
      <section class="footer">
        <h2 class="heading-2 hidden">Footer</h2>
        <p class="totop"><a href="#top" class='totop__link'><span class='hidden'>Back to top</span></a></p>
        <div class="footer-content">
          <article class="article-sponsors">
              <h3 class="heading-3">Onze partners</h3>
              <ul class="sponsors">
                <li><a class="link" href="http://www.winkeldorp.be"><img src="./assets/img/sponsor/sponsor1.png" alt="sponsor winkeldorpen"></a></li>
                <li><a class="link" href="http://beverse-feesten.be"><img src="./assets/img/sponsor/sponsor2.png" alt="sponsor beverse feesten"></a></li>
                <li><a class="link" href="http://www.aouteneclats.be"><img src="./assets/img/sponsor/sponsor3.png" alt="sponsor aout en eclats"></a></li>
                <li><a class="link" href="http://www.warandeshopping.be"><img src="./assets/img/sponsor/sponsor4.png" alt="sponsor warande shopping"></a></li>
              </ul>
          </article>
          <div class="footer-wrapper">
              <article>
                  <h3 class="heading-3">Nuttige links</h3>
                  <ul>
                    <li class="link-hover"><a class="link" href="index.php?page=programma">Programma</a></li>
                    <li class="link-hover"><a class="link" href="index.php">Bereikbaarheid</a></li>
                    <li class="link-hover"><a class="link" href="index.php">Voor het hele gezin</a></li>
                    <li class="link-hover"><a class="link" href="index.php">Vrijwilligers/ jobs/ stage</a></li>
                    <li class="link-hover"><a class="link" href="index.php">Veelgestelde vragen</a></li>
                  </ul>
              </article>
              <article>
                  <h3 class="heading-3">Volg ons</h3>
                  <ul>
                    <li class="link-hover"><a class="link" href="https://www.facebook.com/">Facebook</a></li>
                    <li class="link-hover"><a class="link" href="https://www.instagram.com/?hl=n">Instagram</a></li>
                    <li class="link-hover"><a class="link" href="https://twitter.com/?lang=nl">Twitter</a></li>
                    <li class="link-hover"><a class="link" href="https://straattheaterfestivalbeveren.wordpress.com/">Nieuwsbrief</a></li>
                  </ul>
              </article>
              <article>
                  <h3 class="heading-3">Contacteer ons</h3>
                  <address>
                  Donkvijverstraat<br>
                  9120 Beveren
                  </address>
                  <p>T <span><a class="link" href="tel:+32(0)3 750 16 29">+32(0)3 750 16 29</a></span></p>
                  <p>E <span><a class="link" href="mailto:erik.apers@beveren.be">erik.apers@beveren.be</a></span></p>
              </article>
            </div>
          </div>
      </section>
    </main>
    <footer class="copyright container"><small>&copy; Wencke Nuyt</small></footer>
    <?php echo $js;?>
  </body>
</html>
