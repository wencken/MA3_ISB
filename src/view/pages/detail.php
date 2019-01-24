<section class="detail">
<h2 class="heading-1 hidden"><?php echo $act["act_naam"];?></h2>

<article class="detail__header container">
  <h3 class="heading-2 hidden">In de kijker</h3>
  <p class="detail__terug"><a class="detail__link terug" href="index.php?page=programma">Terug naar overzicht</a></p>

  <section class="detail__informatie">
    <div class="beeld__tekst">
      <h4 class=""><?php echo $act["artiest_naam"]?> - <?php echo $act["artiest_id"];?> stelt voor</h4>
      <p class="heading-2"><?php echo $act["act_naam"];?> - <?php echo $act["act_id"];?></p>
      <p class="detail__omschrijving"><?php echo $act["omschrijving"];?></p>
      <p><a class="detail__link" href="https://www.facebook.com">Ik ben aanwezig</a></p>
    </div>

    <div class="beeld__groot">
    <picture class="beeld__img">
            <source
            type="image/webp"
            srcset="
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_10.webp 155w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_20.webp 310w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_33.webp 517w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_50.webp 776w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_67.webp 1034w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_75.webp 1164w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_85.webp 1319w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_100.webp 1552w
            "
            sizes="(min-width: 1440px) 59rem,
            (min-width: 1024px) 47rem,
            (min-width: 768px) 36rem,
            (min-width: 320px) 54rem,
            (min-width: 0) 100vw
            "
            />
            <source
            type="image/jpg"
            srcset="
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_10.jpg 155w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_20.jpg 310w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_33.jpg 517w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_50.jpg 776w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_67.jpg 1034w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_75.jpg 1164w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_85.jpg 1319w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_100.jpg 1552w
            "
            sizes="(min-width: 1440px) 59rem,
            (min-width: 1024px) 47rem,
            (min-width: 768px) 36rem,
            (min-width: 320px) 54rem,
            (min-width: 0) 100vw
            "
            />
            <img
            class="beeld__img"
            src="./assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_100.jpg"
            alt="<?php echo $act["act_naam"];?>" />
        </picture>
    </div>
  </section>

  <nav>
      <h4 class="hidden">Bekijk meer acts</h4>
      <a class="detail__link" href="index.php?page=detail&amp;id=<?php echo $previous ?>"><- previous</a>
      <a class="detail__link" href="index.php?page=detail&amp;id=<?php echo $next ?>">next -></a>
  </nav>
</article>

<article class='detail__praktisch'>
  <div class="container">
  <h3 class="heading-2 detail__titel">Praktische informatie</h3>
  <div class='praktisch__wrapper'>
  <article class="praktisch__datum">
    <h4 class="praktisch__subtitel">Datum</h4>
    <p class="praktisch__tekst"><?php echo $act["datum"];?></p>
  </article>

  <article class="praktisch__tijdstip">
    <h4 class="praktisch__subtitel">Tijdstip</h4>
    <p class="praktisch__tekst"><?php echo $act["beginuur"];?></p>
    <p class="praktisch__tekst"><?php echo $act["duur"];?></p>
  </article>

  <article class="praktisch__locatie">
    <h4 class="praktisch__subtitel">Locatie <?php echo $act["locatie_id"];?></h4>
    <p class="praktisch__tekst"><?php echo $act["locatie_naam"];?></p>
    <p class="praktisch__tekst">9120 Beveren</p>
    <p class="praktisch__tekst">Belgium</p>
  </article>
  </div>
  </div>
</article>

<article class="beeldmateriaal container">
    <h3 class="heading-2">Meer beeldmateriaal</h3>
    <picture class="beeld__img">
            <source
            type="image/webp"
            srcset="
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_10.webp 155w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_20.webp 310w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_33.webp 517w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_50.webp 776w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_67.webp 1034w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_75.webp 1164w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_85.webp 1319w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_100.webp 1552w
            "
            sizes="(min-width: 1440px) 59rem,
            (min-width: 1024px) 47rem,
            (min-width: 768px) 36rem,
            (min-width: 320px) 54rem,
            (min-width: 0) 100vw
            "
            />
            <source
            type="image/jpg"
            srcset="
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_10.jpg 155w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_20.jpg 310w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_33.jpg 517w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_50.jpg 776w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_67.jpg 1034w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_75.jpg 1164w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_85.jpg 1319w,
            assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_100.jpg 1552w
            "
            sizes="(min-width: 1440px) 59rem,
            (min-width: 1024px) 47rem,
            (min-width: 768px) 36rem,
            (min-width: 320px) 54rem,
            (min-width: 0) 100vw
            "
            />
            <img
            class="beeld__img"
            src="./assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_100.jpg"
            alt="<?php echo $act["act_naam"];?>" />
    </picture>

    <ul class="beeld__ul">
        <?php
        foreach($actAfbeeldingen as $actAfbeelding) {
        ?>
        <li class="beeld__li">
        <a class="detail__link" href="index.php?page=detail&amp;id=<?php echo $act["act_id"];?>&amp;image=<?php echo $actAfbeelding["id"];?>">
        <picture class="beeld__img">
            <source
            type="image/webp"
            srcset="
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_10.webp 155w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_20.webp 310w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_33.webp 517w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_50.webp 776w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_67.webp 1034w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_75.webp 1164w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_85.webp 1319w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_100.webp 1552w
            "
            sizes="(min-width: 1440px) 59rem,
            (min-width: 1024px) 47rem,
            (min-width: 768px) 36rem,
            (min-width: 320px) 54rem,
            (min-width: 0) 100vw
            "
            />
            <source
            type="image/jpg"
            srcset="
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_10.jpg 155w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_20.jpg 310w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_33.jpg 517w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_50.jpg 776w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_67.jpg 1034w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_75.jpg 1164w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_85.jpg 1319w,
            assets/img/<?php echo $actAfbeelding["afbeelding"];?>_100.jpg 1552w
            "
            sizes="(min-width: 1440px) 59rem,
            (min-width: 1024px) 47rem,
            (min-width: 768px) 36rem,
            (min-width: 320px) 54rem,
            (min-width: 0) 100vw
            "
            />
            <img
            class="beeld__img"
            src="./assets/img/<?php echo $actAfbeelding["afbeelding"];?>_100.jpg"
            alt="<?php echo $act["act_naam"];?>" />
        </picture>
        </a>
        </li>
        <?php
        }
        ?>
    </ul>
</article>

<article class='social'>
  <div class="container">
  <h3 class="heading-2 detail__titel">Ontdek meer op:</h3>
  <p><?php echo $act["website"];?></p>
  <ul>
    <li><a class="detail__link" href="https://www.facebook.com"><img src="./assets/img/social/facebook.png" alt="Facebook"></a></li>
    <li><a class="detail__link" href="https://www.instagram.com"><img src="./assets/img/social/instagram.png" alt="Instagram"></a></li>
    <li><a class="detail__link" href="https://twitter.com"><img src="./assets/img/social/twitter.png" alt="Twitter"></a></li>
  </ul>
  </div>
</article>

<article class="container">
  <h3 class="heading-2">Ook op <?php echo $act["datum"];?></h3>
  <div class='act__section'>
  <?php
  foreach($days as $day){
  ?>
      <article class='act__article'>
      <a class='act_link' href="index.php?page=detail&amp;id=<?php echo $day["id"];?>">
      <picture class="act__image">
          <source
          type="image/webp"
          srcset="
          assets/img/<?php echo $afbeelding["afbeelding"];?>_10.webp 155w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_20.webp 310w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_33.webp 517w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_50.webp 776w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_67.webp 1034w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_75.webp 1164w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_85.webp 1319w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_100.webp 1552w
          "
          sizes="(min-width: 1440px) 59rem,
          (min-width: 1024px) 47rem,
          (min-width: 768px) 36rem,
          (min-width: 320px) 54rem,
          (min-width: 0) 100vw
          "
          />
          <source
          type="image/jpg"
          srcset="
          assets/img/<?php echo $afbeelding["afbeelding"];?>_10.jpg 155w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_20.jpg 310w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_33.jpg 517w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_50.jpg 776w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_67.jpg 1034w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_75.jpg 1164w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_85.jpg 1319w,
          assets/img/<?php echo $afbeelding["afbeelding"];?>_100.jpg 1552w
          "
          sizes="(min-width: 1440px) 59rem,
          (min-width: 1024px) 47rem,
          (min-width: 768px) 36rem,
          (min-width: 320px) 54rem,
          (min-width: 0) 100vw
          "
          />
          <img
          src="./assets/img/<?php echo $afbeelding["afbeelding"];?>_100.jpg"
          alt="<?php echo $day['act_naam'];?>" />
        </picture>
        <div class='act-div__grid'>
        <p class='body-groot strong act__datum'><?php echo $day["datum"];?></p>
        <div class='act__info'>
            <h4 class='heading-2 act__naam'><?php echo $day["artiest_naam"];?> (<?php echo $day["land"];?>)</h4>
            <p class='heading-3 act__titel'><?php echo $day["act_naam"];?></p>
        </div>
        </div>
      </a>
    </article>
    <?php
    }
  ?>
  </div>
  <p><a class="detail__link" href="index.php?page=programma">Ontdek meer</a></p>
</article>

</section>
