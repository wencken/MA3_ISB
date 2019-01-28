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

  <link rel="preload" href="style.css" as="style">
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
          <li><a href="https://www.facebook.com">
          <picture>
              <source srcset="./assets/img/social/facebook_67.webp" type="image/webp">
              <source srcset="./assets/img/social/facebook_67.png" type="image/png">
              <img src="./assets/img/social/facebook_67.webp" alt="Facebook">
          </picture>
          </a></li>
          <li><a href="https://www.instagram.com">
          <picture>
                <source srcset="./assets/img/social/instagram_20.webp" type="image/webp">
                <source srcset="./assets/img/social/instagram_20.png" type="image/png">
                <img src="./assets/img/social/instagram_20.webp" alt="Instagram">
            </picture>
          </a></li>
          <li><a href="https://twitter.com">
          <picture>
                <source srcset="./assets/img/social/twitter_50.webp" type="image/webp">
                <source srcset="./assets/img/social/twitter_50.png" type="image/png">
                <img src="./assets/img/social/twitter_50.webp" alt="Twitter">
          </picture>
          </a></li>
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
        </div>

        <div class="menu-icon">
          <span class="line"></span>
          <span class="line line--second"></span>
          <span class="line line--third"></span>
       </div>
      </header>

    <main class="main">
      <?php echo $content;?>
      <section class="footer">
        <h2 class="heading-2 hidden">Footer</h2>
        <div class="footer-content container">
        <p class="totop"><a href="#top" class='totop__link'><span class='hidden'>Back to top</span></a></p>
        <div class="wrapper1">
          <article class="footer__sponsors">
              <h3 class="heading-5 sponsors__titel titel__footer">Onze partners</h3>
              <ul class="sponsors">
                <li class="sponsor__link een">
                  <a class="link" href="http://www.winkeldorp.be">
                  <picture class="sponsor__image">
                  <source
                  type="image/webp"
                  srcset="
                  ./assets/img/sponsor/sponsor1_10.webp 24w,
                  ./assets/img/sponsor/sponsor1_20.webp 49w,
                  ./assets/img/sponsor/sponsor1_33.webp 81w,
                  ./assets/img/sponsor/sponsor1_50.webp 122w,
                  ./assets/img/sponsor/sponsor1_67.webp 163w,
                  ./assets/img/sponsor/sponsor1_75.webp 183w,
                  ./assets/img/sponsor/sponsor1_85.webp 207w,
                  ./assets/img/sponsor/sponsor1_100.webp 244w
                  "
                  sizes="(min-width: 1440px)  10rem,
                  (min-width: 1024px) 10rem,
                  (min-width: 768px)  8rem,
                  (min-width: 320px)  8rem,
                  (min-width: 0)  8rem
                  "
                  />
                  <source
                  type="image/png"
                  srcset="
                  ./assets/img/sponsor/sponsor1_10.png 24w,
                  ./assets/img/sponsor/sponsor1_20.png 49w,
                  ./assets/img/sponsor/sponsor1_33.png 81w,
                  ./assets/img/sponsor/sponsor1_50.png 122w,
                  ./assets/img/sponsor/sponsor1_67.png 163w,
                  ./assets/img/sponsor/sponsor1_75.png 183w,
                  ./assets/img/sponsor/sponsor1_85.png 207w,
                  ./assets/img/sponsor/sponsor1_100.png 244w
                  "
                  sizes="(min-width: 1440px)  10rem,
                  (min-width: 1024px) 10rem,
                  (min-width: 768px)  8rem,
                  (min-width: 320px)  8rem,
                  (min-width: 0)  8rem
                  "
                  />
                  <img
                  src="./assets/img/sponsor/sponsor1_50.png"
                  alt="sponsor winkeldorpen">
                  </picture>
                  </a>
                </li>
                <li class="sponsor__link twee">
                  <a class="link" href="http://beverse-feesten.be">
                  <picture class="sponsor__image">
                  <source
                  type="image/webp"
                  srcset="
                  ./assets/img/sponsor/sponsor2_10.webp 28w,
                  ./assets/img/sponsor/sponsor2_20.webp 57w,
                  ./assets/img/sponsor/sponsor2_33.webp 95w,
                  ./assets/img/sponsor/sponsor2_50.webp 142w,
                  ./assets/img/sponsor/sponsor2_67.webp 189w,
                  ./assets/img/sponsor/sponsor2_75.webp 213w,
                  ./assets/img/sponsor/sponsor2_85.webp  241w,
                  ./assets/img/sponsor/sponsor2_100.webp 284w
                  "
                  sizes="(min-width: 1440px)  10rem,
                  (min-width: 1024px) 10rem,
                  (min-width: 768px)  8rem,
                  (min-width: 320px)  8rem,
                  (min-width: 0)  8rem
                  "
                  />
                  <source
                  type="image/png"
                  srcset="
                  ./assets/img/sponsor/sponsor2_10.png 28w,
                  ./assets/img/sponsor/sponsor2_20.png 57w,
                  ./assets/img/sponsor/sponsor2_33.png 95w,
                  ./assets/img/sponsor/sponsor2_50.png 142w,
                  ./assets/img/sponsor/sponsor2_67.png 189w,
                  ./assets/img/sponsor/sponsor2_75.png 213w,
                  ./assets/img/sponsor/sponsor2_85.png  241w,
                  ./assets/img/sponsor/sponsor2_100.png 284w
                  "
                  sizes="(min-width: 1440px)  10rem,
                  (min-width: 1024px) 10rem,
                  (min-width: 768px)  8rem,
                  (min-width: 320px)  8rem,
                  (min-width: 0)  8rem
                  "
                  />
                  <img
                  src="./assets/img/sponsor/sponsor2_50.png"
                  alt="sponsor beverse feesten">
                  </picture>
                  </a>
                </li>
                <li class="sponsor__link drie">
                  <a class="link" href="http://www.aouteneclats.be">
                  <picture class="sponsor__image">
                  <source
                  type="image/webp"
                  srcset="
                  ./assets/img/sponsor/sponsor3_10.webp 14w,
                  ./assets/img/sponsor/sponsor3_20.webp 28w,
                  ./assets/img/sponsor/sponsor3_33.webp 47w,
                  ./assets/img/sponsor/sponsor3_50.webp 70w,
                  ./assets/img/sponsor/sponsor3_67.webp 93w,
                  ./assets/img/sponsor/sponsor3_75.webp 107w,
                  ./assets/img/sponsor/sponsor3_85.webp  119w,
                  ./assets/img/sponsor/sponsor3_100.webp 140w
                  "
                  sizes="(min-width: 1440px) 7rem,
                  (min-width: 1024px) 6rem,
                  (min-width: 768px)  5rem,
                  (min-width: 320px)  6rem,
                  (min-width: 0)  5rem
                  "
                  />
                  <source
                  type="image/png"
                  srcset="
                  ./assets/img/sponsor/sponsor3_10.png 14w,
                  ./assets/img/sponsor/sponsor3_20.png 28w,
                  ./assets/img/sponsor/sponsor3_33.png 47w,
                  ./assets/img/sponsor/sponsor3_50.png 70w,
                  ./assets/img/sponsor/sponsor3_67.png 93w,
                  ./assets/img/sponsor/sponsor3_75.png 107w,
                  ./assets/img/sponsor/sponsor3_85.png  119w,
                  ./assets/img/sponsor/sponsor3_100.png 140w
                  "
                  sizes="(min-width: 1440px) 7rem,
                  (min-width: 1024px) 6rem,
                  (min-width: 768px)  5rem,
                  (min-width: 320px)  6rem,
                  (min-width: 0)  5rem
                  "
                  />
                  <img
                  src="./assets/img/sponsor/sponsor3_50.png"
                  alt="sponsor aout en eclats">
                  </picture>
                  </a>
                </li>
                <li class="sponsor__link vier">
                  <a class="link" href="http://www.warandeshopping.be">
                  <picture class="sponsor__image">
                  <source
                  type="image/webp"
                  srcset="
                  ./assets/img/sponsor/sponsor4_10.webp 20w,
                  ./assets/img/sponsor/sponsor4_20.webp 39w,
                  ./assets/img/sponsor/sponsor4_33.webp 65w,
                  ./assets/img/sponsor/sponsor4_50.webp 98w,
                  ./assets/img/sponsor/sponsor4_67.webp 131w,
                  ./assets/img/sponsor/sponsor4_75.webp 147w,
                  ./assets/img/sponsor/sponsor4_85.webp  167w,
                  ./assets/img/sponsor/sponsor4_100.webp 196w
                  "
                  sizes="(min-width: 1440px) 8rem,
                  (min-width: 1024px) 8rem,
                  (min-width: 768px)  5rem,
                  (min-width: 320px)  6rem,
                  (min-width: 0)  5rem
                  "
                  />
                  <source
                  type="image/png"
                  srcset="
                  ./assets/img/sponsor/sponsor4_10.png 20w,
                  ./assets/img/sponsor/sponsor4_20.png 39w,
                  ./assets/img/sponsor/sponsor4_33.png 65w,
                  ./assets/img/sponsor/sponsor4_50.png 98w,
                  ./assets/img/sponsor/sponsor4_67.png 131w,
                  ./assets/img/sponsor/sponsor4_75.png 147w,
                  ./assets/img/sponsor/sponsor4_85.png  167w,
                  ./assets/img/sponsor/sponsor4_100.png 196w
                  "
                  sizes="(min-width: 1440px) 8rem,
                  (min-width: 1024px) 8rem,
                  (min-width: 768px)  5rem,
                  (min-width: 320px)  6rem,
                  (min-width: 0)  5rem
                  "
                  />
                  <img
                  src="./assets/img/sponsor/sponsor4_50.png"
                  alt="sponsor warande shopping">
                  </picture>
                  </a>
                </li>
              </ul>
          </article>
         </div>

          <div class="wrapper2">
            <article class="footer__link">
                <h3 class="heading-5 titel__footer">Nuttige links</h3>
                <ul class=>
                  <li><a class="underline link body-klein" href="index.php?page=programma">Programma</a></li>
                  <li><a class="underline link body-klein" href="index.php">Bereikbaarheid</a></li>
                  <li><a class="underline link body-klein" href="index.php">Voor het hele gezin</a></li>
                  <li><a class="underline link body-klein" href="index.php">Vrijwilligers/ jobs/ stage</a></li>
                  <li><a class="underline link body-klein" href="index.php">Veelgestelde vragen</a></li>
                </ul>
            </article>
            <article class="footer__volg">
                <h3 class="heading-5 titel__footer">Volg ons</h3>
                <ul>
                  <li><a class="underline link body-klein" href="https://www.facebook.com/">Facebook</a></li>
                  <li><a class="underline link body-klein" href="https://www.instagram.com/?hl=n">Instagram</a></li>
                  <li><a class="underline link body-klein" href="https://twitter.com/?lang=nl">Twitter</a></li>
                  <li><a class="underline link body-klein" href="https://straattheaterfestivalbeveren.wordpress.com/">Nieuwsbrief</a></li>
                </ul>
            </article>
            <article class="footer__contact">
                <h3 class="heading-5 titel__footer">Contacteer ons</h3>
                <address class="body-klein">
                Donkvijverstraat<br>
                9120 Beveren
                </address>
                <p class="body-klein accent strong">T <span><a class="link body-klein underline" href="tel:+32(0)3 750 16 29">+32(0)3 750 16 29</a></span></p>
                <p class="body-klein accent strong">E <span><a class="link body-klein underline" href="mailto:erik.apers@beveren.be">erik.apers@beveren.be</a></span></p>
            </article>
          </div>

        </div>
      </section>
    </main>
    <footer class="copyright"><small>&copy; Wencke Nuyt</small></footer>
    <?php echo $js;?>
  </body>
</html>
