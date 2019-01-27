<section class="home">
<header class="home__header">
  <h2 class="heading-1 hidden">Home</h2>
  <a class="header__cta body__home" href="#spektakel"><span class="header__hidden">Ontdek</span></a>
  <a class="header__cta__mobile body__home" href="index.php?page=programma"><span class="header__mobile">Ontdek het programma</span></a>
 <!-- <picture>
    <source srcset="./assets/img/header/header4_100.webp" type="image/webp">
    <source srcset="./assets/img/header/header4_100.png" type="image/png">
    <img class="home__header" src="./assets/img/header/header4_100.png" alt="hoofdingsafbeelding">
  </picture>
  <picture>
    <source srcset="./assets/img/header/header3_100.webp" type="image/webp">
    <source srcset="./assets/img/header/header3_100.png" type="image/png">
    <img class="home__header" src="./assets/img/header/header3_100.png" alt="hoofdingsafbeelding">
  </picture>
  <picture>
    <source srcset="./assets/img/header/header2_100.webp" type="image/webp">
    <source srcset="./assets/img/header/header2_100.png" type="image/png">
    <img class="home__header" src="./assets/img/header/header2_100.png" alt="hoofdingsafbeelding">
  </picture>
  <picture>
    <source srcset="./assets/img/header/header1_100.webp" type="image/webp">
    <source srcset="./assets/img/header/header1_100.png" type="image/png">
    <img class="home__header" src="./assets/img/header/header1_100.png" alt="hoofdingsafbeelding">
  <picture> -->
</header>

<article class="spektakel container" id="spektakel">
  <div class="spektakel__groep">
    <div>
      <h3 class="heading-2 titel__home">Een onvergetelijk spektakel</h3>
      <p class="cta hide__mobile body__home"><a class="underline--magical cta__link" href="index.php?page=programma">Programma</a></p>
    </div>
    <p class="spektakel__lijn body__home">Humor, acrobatie, stuntwerk van de bovenste plank uit ruim <span class="strong">15 verschillende </span>landen! Bovenal geniet u van dit festival volledig <span class="strong">GRATIS</span>.</p>
  </div>
  <div class="spektakel__content">
    <?php
      foreach($acts as $act){
      ?>
    <article class="spektakel__article">
      <a class='spektakel__link' href="index.php?page=detail&amp;id=<?php echo $act["act_id"];?>">
      <div class="spektakel__hover">
        <h4 class='heading-2 spektakel__naam'><?php echo $act["act_naam"];?></h4>
      </div>
        <picture class="spektakel__img">
        <source
        type="image/webp"
        srcset="
        assets/img/<?php echo $act['afbeelding'];?>_33.webp 240w,
        assets/img/<?php echo $act['afbeelding'];?>_50.webp 480w,
        assets/img/<?php echo $act['afbeelding'];?>_67.webp 640w,
        assets/img/<?php echo $act['afbeelding'];?>_75.webp 720w
        "
        sizes="(min-width: 1440px) 30vw,
        (min-width: 1024px) 30vw,
        (min-width: 768px) 40vw,
        (min-width: 320px) 90vw,
        (min-width: 0) 90vw
        "
        />
        <source
        type="image/jpg"
        srcset="
        assets/img/<?php echo $act['afbeelding'];?>_33.jpg 240w,
        assets/img/<?php echo $act['afbeelding'];?>_50.jpg 480w,
        assets/img/<?php echo $act['afbeelding'];?>_67.jpg 640w,
        assets/img/<?php echo $act['afbeelding'];?>_75.jpg 720w
        "
        sizes="(min-width: 1440px) 30vw,
        (min-width: 1024px) 30vw,
        (min-width: 768px) 40vw,
        (min-width: 320px) 90vw,
        (min-width: 0) 90vw
        "
        />
        <img class='spektakel__image'
        src="./assets/img/<?php echo $act['afbeelding'];?>_50.jpg"
        alt="<?php echo $act["act_naam"];?>"/>
      </picture>
      </a>
    </article>
    <?php
    }
    ?>
  </div>
</article>

<article class="familiedag">
  <div class="container home__familiedag">
  <div class="familiedag__info">
    <h3 class="heading-2 familiedag__lijn titel__home">Familiedag</h3>
    <p class="familiedag__tekst body__home">Ook dit jaar geniet je op zaterdag opnieuw van vaste voorstellingen gericht op de hele familie. Wij voorzien <span class="strong">kinderkoptelefoons</span> en voor de allerkleinste oorkappen. Mis dit niet en beleef dit avontuur samen!</p>
    <p class="cta body__home familiedag__cta"><a class="underline--magical cta__link" href="index.php?page=programma">Programma</a></p>
  </div>
  <div class="familiedag__img">
    <picture class="familiedag__image">
      <source
      type="image/webp"
      srcset="
      assets/img/familie/1_20.webp 200w,
      assets/img/familie/1_33.webp 333w,
      assets/img/familie/1_50.webp 500w,
      assets/img/familie/1_67.webp 666w,
      assets/img/familie/1_75.webp 750w
      "
      sizes="(min-width: 1440px) 50vw,
      (min-width: 1024px) 50vw,
      (min-width: 768px) 40vw,
      (min-width: 320px) 50vw,
      (min-width: 0) 50vw
      "
      />
      <source
      type="image/jpg"
      srcset="
      assets/img/familie/1_20.jpg 200w,
      assets/img/familie/1_33.jpg 333w,
      assets/img/familie/1_50.jpg 500w,
      assets/img/familie/1_67.jpg 666w,
      assets/img/familie/1_75.jpg 750w
      "
      sizes="(min-width: 1440px) 50vw,
      (min-width: 1024px) 50vw,
      (min-width: 768px) 50vw,
      (min-width: 320px) 50vw,
      (min-width: 0) 50vw
      "
      />
      <img class="familiedag__image"
      src="./assets/img/familie/1_67.jpg"
      alt="sfeerfoto 1 familiedag">
    </picture>
  </div>
  </div>
</article>

<article class="nieuwsbrief">
  <h3 class="heading-1 nieuwsbrief__titel"><span class="hidden">Nieuwsbrief</span></h3>
  <div class="container nieuwsbrief__article">
    <h3 class="heading-2 titel__home">Wil je op de hoogte blijven van onze laatste nieuwtjes?</h3>
    <p class='nieuwsbrief__tekst body__home'>Schrijf je dan in op onze nieuwsbrief.</p>
    <form action="index.php#nieuwsbrief" method="post" class='nieuwsbrief__form'>
      <input type="hidden" action="action" value="insert">
      <div class="nieuwsbrief__field">
        <input type="text" name="email" class=" body__home email" placeholder='E-mailadres'>
        <input type="submit" value="Houd me op de hoogte" name="action" class=" body__home nieuwsbrief__submit">
      </div>
    </form>
  </div>
  </article>

<article class="video__article">
  <div class="container video">
    <h3 class="heading-2 titel__home video__titel">Kortom, een weekend vol verwondering en bewondering!</span></h3>
    <video class="video__film" controls poster='assets/img/video/sfeer3.jpg'>
     <source src='assets/img/video/video.mp4' type='video/mp4'>
    </video>
  </div>
</article>


<article class="bereikbaarheid">
  <h3 class="heading-2 hidden">Praktisch</h3>
    <picture class="bereikbaarheid__img">
      <source
      type="image/webp"
      srcset="
      assets/img/plattegrond/algemeen_33.webp 467w,
      assets/img/plattegrond/algemeen_50.webp 702w,
      assets/img/plattegrond/algemeen_67.webp 934w,
      assets/img/plattegrond/algemeen_75.webp 1052w,
      assets/img/plattegrond/algemeen_85.webp 1193w,
      assets/img/plattegrond/algemeen_100.webp 1403w
      "
      sizes="(min-width: 1440px) 105vw,
      (min-width: 1024px) 105vw,
      (min-width: 768px) 105vw,
      (min-width: 320px) 105vw,
      (min-width: 0) 105vw
      "
      />
      <source
      type="image/png"
      srcset="
      assets/img/plattegrond/algemeen_33.png 467w,
      assets/img/plattegrond/algemeen_50.png 702w,
      assets/img/plattegrond/algemeen_67.png 934w,
      assets/img/plattegrond/algemeen_75.png 1052w,
      assets/img/plattegrond/algemeen_85.png 1193w,
      assets/img/plattegrond/algemeen_100.png 1403w
      "
      sizes="(min-width: 1440px) 105vw,
      (min-width: 1024px) 105vw,
      (min-width: 768px) 105vw,
      (min-width: 320px) 105vw,
      (min-width: 0) 100vw
      "
      />
      <img class="bereikbaarheid__image"
      src="./assets/img/plattegrond/algemeen_85.png"
      alt="kaart van ISB">
    </picture>
</article>

</section>
