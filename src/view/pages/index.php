<section class="home">
<header class="home__header">
  <h2 class="heading-1 hidden">Home</h2>
  <a class="header__cta" href="#spektakel"><span class="header__hidden">Ontdek</span></a>
  <a class="header__cta__mobile" href="index.php?page=programma"><span class="header__mobile">Ontdek het programma</span></a>
</header>

<article class="spektakel container" id="spektakel">
  <div class="spektakel__groep">
    <div>
      <h3 class="heading-2">Een onvergetelijk spektakel</h3>
      <p class="cta"><a class=" underline--magical cta__link" href="index.php?page=programma">Programma</a></p>
    </div>
    <p class="spektakel__lijn">Humor, acrobatie, stuntwerk van de bovenste plank uit ruim <span class="strong">15 verschillende </span>landen! Bovenal geniet u van dit festival volledig <span class="strong">GRATIS</span>.</p>
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
      <img class='spektakel__image' src="./assets/img/<?php echo $act['afbeelding'];?>_50.jpg" alt="<?php echo $act["act_naam"];?>"/>
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
    <h3 class="heading-2 familiedag__lijn">Familiedag</h3>
    <p class="familiedag__tekst">Ook dit jaar geniet je op zaterdag opnieuw van vaste voorstellingen gericht op de hele familie. Wij voorzien kinderkoptelefoons en voor de allerkleinste oorkappen. Mis dit niet en beleef dit avontuur samen!</p>
    <p class="cta familiedag__cta"><a class="underline--magical cta__link" href="index.php?page=programma">Programma</a></p>
  </div>
  <div class="familiedag__img">
    <img class="familiedag__image" src="./assets/img/familie/1_50.jpg" alt="sfeerfoto 1 familiedag">
  </div>
  </div>
</article>

<!-- <article class="intro container">
  <div>
    <h3 class="heading-2">"Een weekend vol verwondering en bewondering"</h3>
    <p>Het laatste weekend van augustus wordt een knaller voor jong en oud.  Een arsenaal aan gekke wezens of vriendelijke gastheren staan te popelen om u te ontmoeten!</p>
    <p class="cta"><a class="underline--magical cta__link" href="index.php?page=programma">Programma</a></p>
  </div>
  <img src="" alt="">
</article> -->

<article class="praktisch container">
  <h3 class="heading-2 hidden">Praktisch</h3>
 <img src="./assets/img/plattegrond/algemeen_50.png" alt="kaart van ISB">
</article>

<article class="nieuwsbrief container">
  <h3 class="heading-1 hidden">Nieuwsbrief</h3>
  <article class="nieuwsbrief__article">
    <h4 class="heading-2">Wil je op de hoogte blijven van onze laatste nieuwtjes?</h4>
    <p class='nieuwsbrief__tekst'>Schrijf je dan in op onze nieuwsbrief.</p>
    <form action="" class='nieuwsbrief__form'>
      <input type="hidden" action="" value="">
      <label for="email" class="email__label">e-mailadres</label>
      <input type="text" name="email" class="email" style="border:none">
      <input type="submit" value="Houd me op de hoogte!" name="submit" class="nieuwsbrief__submit">
    </form>
  </article>
</article>

</section>
