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

  <body >
    <div class="topbar">
      <div class="topright container">
          <ul class="social">
              <li><a href="https://www.facebook.com"><img src="./assets/img/social/facebook_67.png" alt="Facebook"></a></li>
              <li><a href="https://www.instagram.com"><img src="./assets/img/social/instagram_20.png" alt="Instagram"></a></li>
              <li><a href="https://twitter.com"><img src="./assets/img/social/twitter_50.png" alt="Twitter"></a></li>
          </ul>
          <p class="body-klein">Donkvijverstraat, 9120 Beveren</p>
          <ul class="talen">
              <li class="body-klein taal underline">NL</li>
              <li class="body-klein taal">FR</li>
              <li class="body-klein taal">EN</li>
          </ul>
      </div>
    </div>

    <header class="header__bg">
      <div class=" header__top container">
        <div class="burger__titel">
          <h1 class="burger__h1 heading-0"><a class="navi" href="index.php">ISB </a></h1>
          <h2 class="burger__h2 body-0">
            <span>24.08</span>
            <span>25.08</span>
            <span>26.08</span>
          </h2>
        </div>

        <div class="burger__menu">
          <nav class="burger__nav">
            <h2 class="hidden">Navigatie</h2>
            <ul class="navigatie">
              <li class="<?php if($currentPage == 'index') echo 'active';?>"><a class="heading-5 nav" href="index.php">Home</a></li>
              <li class="<?php if($currentPage == 'programma') echo 'active';?>"><a class="heading-5 nav" href="index.php?page=programma">Programma</a></li>
              <li><a class="heading-5 nav" href="index.php">Plan</a></li>
              <li><a class="heading-5 nav" href="index.php">Praktisch</a></li>
            </ul>
          </nav>
          <!-- <ul class="burger__talen">
              <li class="body-klein taal underline">NL</li>
              <li class="body-klein taal">FR</li>
              <li class="body-klein taal">EN</li>
          </ul>
          <ul class="burger__social">
              <li><a href="https://www.facebook.com"><img src="./assets/img/social/facebook.png" alt="Facebook"></a></li>
              <li><a href="https://www.instagram.com"><img src="./assets/img/social/instagram.png" alt="Instagram"></a></li>
              <li><a href="https://twitter.com"><img src="./assets/img/social/twitter.png" alt="Twitter"></a></li>
          </ul> -->
        </div>

        <div class="menu-icon">
          <span class="line"></span>
          <span class="line line--second"></span>
          <span class="line line--third"></span>
        </div>
        </div>
        <!-- <nav>
          <ul class="navigatie">
              <li class="<?php if($currentPage == 'index') echo 'active';?>"><a class="heading-5 nav" href="index.php">Home</a></li>
              <li class="<?php if($currentPage == 'programma') echo 'active';?>"><a class="heading-5 nav" href="index.php?page=programma">Programma</a></li>
              <li><a class="heading-5 nav" href="index.php">Plan</a></li>
              <li><a class="heading-5 nav" href="index.php">Praktisch</a></li>
          </ul>
        </nav> -->
      </header>

    <main class="main">
      <?php echo $content;?>
      <section class="footer">
        <h2 class="heading-2 hidden">Footer</h2>
        <div class="footer-content container">
        <p class="totop"><a href="#top" class='totop__link'><span class='hidden'>Back to top</span></a></p>
          <article class="footer__sponsors">
              <h3 class="heading-5 sponsors__titel">Onze partners</h3>
              <ul class="sponsors">
                <li class="sponsor__link een"><a class="link" href="http://www.winkeldorp.be"><img src="./assets/img/sponsor/sponsor1_50.png" alt="sponsor winkeldorpen"></a></li>
                <li class="sponsor__link twee"><a class="link" href="http://beverse-feesten.be"><img src="./assets/img/sponsor/sponsor2_50.png" alt="sponsor beverse feesten"></a></li>
                <li class="sponsor__link drie"><a class="link" href="http://www.aouteneclats.be"><img src="./assets/img/sponsor/sponsor3_50.png" alt="sponsor aout en eclats"></a></li>
                <li class="sponsor__link vier"><a class="link" href="http://www.warandeshopping.be"><img src="./assets/img/sponsor/sponsor4_50.png" alt="sponsor warande shopping"></a></li>
              </ul>
          </article>
          <article class="footer__link">
              <h3 class="heading-5">Nuttige links</h3>
              <ul>
                <li><a class="link body-klein" href="index.php?page=programma">Programma</a></li>
                <li><a class="link body-klein" href="index.php">Bereikbaarheid</a></li>
                <li><a class="link body-klein" href="index.php">Voor het hele gezin</a></li>
                <li><a class="link body-klein" href="index.php">Vrijwilligers/ jobs/ stage</a></li>
                <li><a class="link body-klein" href="index.php">Veelgestelde vragen</a></li>
              </ul>
          </article>
          <article class="footer__volg">
              <h3 class="heading-5">Volg ons</h3>
              <ul>
                <li><a class="link body-klein" href="https://www.facebook.com/">Facebook</a></li>
                <li><a class="link body-klein" href="https://www.instagram.com/?hl=n">Instagram</a></li>
                <li><a class="link body-klein" href="https://twitter.com/?lang=nl">Twitter</a></li>
                <li><a class="link body-klein" href="https://straattheaterfestivalbeveren.wordpress.com/">Nieuwsbrief</a></li>
              </ul>
          </article>
          <article class="footer__contact">
              <h3 class="heading-5">Contacteer ons</h3>
              <address class="body-klein">
              Donkvijverstraat<br>
              9120 Beveren
              </address>
              <p class="body-klein accent strong">T <span><a class="link body-klein" href="tel:+32(0)3 750 16 29">+32(0)3 750 16 29</a></span></p>
              <p class="body-klein accent strong">E <span><a class="link body-klein" href="mailto:erik.apers@beveren.be">erik.apers@beveren.be</a></span></p>
          </article>
        </div>
      </section>
    </main>
    <footer class="copyright"><small>&copy; Wencke Nuyt</small></footer>
    <?php echo $js;?>
  </body>
</html>
