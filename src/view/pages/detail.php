<section class="detail">
<h2 class="heading-1 hidden"><?php echo $act["act_naam"];?></h2>
<span class="header__prog"><img src="./assets/img/bg/1_100.png" alt="achtergrond" class="hidden"></span>


<article class="detail__header container">
  <h3 class="heading-2 hidden">In de kijker</h3>
  <p class="detail__terug"><a class="detail__link body__home terug" href="index.php?page=programma">Terug naar overzicht</a></p>

  <section class="detail__informatie">
    <div class="beeld__tekst">
      <h4 class="beeld__titel body__home"><?php echo $act["artiest_naam"]?> stelt voor</h4>
      <p class="heading-1 titel__home"><?php echo $act["act_naam"];?></p>
      <p class="detail__omschrijving body__home"><?php echo $act["omschrijving"];?></p>
      <p><a class="detail__link body__home" href="https://www.facebook.com">Ik ben aanwezig</a></p>
    </div>

    <div class="beeld__groot">
    <picture>
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
            <img class="beeld__headerimg"
            src="./assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_100.jpg"
            alt="<?php echo $act["act_naam"];?>" />
        </picture>
    </div>
  </section>

  <nav class="detail__bekijkmeer">
      <h4 class="hidden">Bekijk meer acts</h4>
      <a class="detail__link body__home" href="index.php?page=detail&amp;id=<?php echo $previous ?>"><- previous</a>
      <a class="detail__link body__home" href="index.php?page=detail&amp;id=<?php echo $next ?>">next -></a>
  </nav>
</article>

<article class='detail__praktisch'>
  <h3 class="heading-2 detail__titel detail__lijn praktisch__lijn titel__home container">Praktische informatie</h3>

  <div class="container praktisch">
  <div class='praktisch__wrapper'>
    <div class="praktisch__datum">
      <picture class="praktisch__icon">
        <source type="image/webp" srcset="./assets/img/icons/calender_33.webp">
        <source type="image/png" srcset="./assets/img/icons/calender_33.png">
        <img src="./assets/img/icons/calender_50.png" alt="icon kalender">
      </picture>
      <article>
        <h4 class="body__home praktisch__subtitel">Datum</h4>
        <p class="body__home praktisch__tekst"><?php echo $act["datum"];?></p>
      </article>
    </div>

    <div class="praktisch__tijdstip">
      <picture class="praktisch__icon">
        <source type="image/webp" srcset="./assets/img/icons/time_33.webp">
        <source type="image/png" srcset="./assets/img/icons/time_33.png">
        <img src="./assets/img/icons/time_50.png" alt="icon tijdstip">
      </picture>
      <article>
        <h4 class="body__home praktisch__subtitel">Tijdstip</h4>
        <p class="body__home praktisch__tekst"><?php echo $act["beginuur"];?></p>
        <p class="body__home praktisch__tekst"><?php echo $act["duur"];?></p>
      </article>
    </div>

    <div class="praktisch__locatie">
      <picture class="praktisch__icon">
        <source type="image/webp" srcset="./assets/img/icons/locatie_33.webp">
        <source type="image/png" srcset="./assets/img/icons/locatie_33.png">
        <img src="./assets/img/icons/locatie_50.png" alt="icon locatie">
      </picture>
      <article>
        <h4 class="body__home praktisch__subtitel">Locatie <?php echo $act["locatie_id"];?></h4>
        <p class="body__home praktisch__tekst"><?php echo $act["locatie_naam"];?></p>
        <p class="body__home praktisch__tekst">9120 Beveren</p>
        <p class="body__home praktisch__tekst">Belgium</p>
      </article>
    </div>
  </div>

  <picture class="kaartje__image">
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
      sizes="(min-width: 1440px) 60vw
      (min-width: 1024px) 60vw,
      (min-width: 768px) 95vw,
      (min-width: 320px) 95vw,
      (min-width: 0) 95vw
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
      sizes="(min-width: 1440px) 60vw
      (min-width: 1024px) 60vw,
      (min-width: 768px) 95vw,
      (min-width: 320px) 95vw,
      (min-width: 0) 95vw
      "
      />
      <img class="kaartje__img"
      src="./assets/img/plattegrond/algemeen_50.png"
      alt="kaart van ISB">
    </picture>
  </div>
</article>

<article class="beeldmateriaal container" id="beeldmateriaal">
    <h3 class="heading-2 beeldmateriaal__lijn detail__lijn titel__home">Meer beeldmateriaal</h3>
    <div class="beeldmateriaal__wrapper">
    <picture class="grootbeeld__image">
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
        sizes="(min-width: 1440px) 105vw,
        (min-width: 1024px) 60vw,
        (min-width: 768px) 105vw,
        (min-width: 320px) 105vw,
        (min-width: 0) 105vw
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
        sizes="(min-width: 1440px) 105vw,
        (min-width: 1024px) 105vw,
        (min-width: 768px) 105vw,
        (min-width: 320px) 105vw,
        (min-width: 0) 105vw
        "
        />
        <img
        class="grootbeeld__img"
        src="./assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_100.jpg"
        alt="<?php echo $act["act_naam"];?>" />
    </picture>

    <ul class="beeld__ul">
        <?php
        foreach($actAfbeeldingen as $actAfbeelding) {
        ?>
        <li class="beeld__li">
        <a class="detail__link" href="index.php?page=detail&amp;id=<?php echo $act["act_id"];?>&amp;image=<?php echo $actAfbeelding["id"];?>#beeldmateriaal">
        <picture>
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
    </div>
</article>

<article class='socials'>
  <div class="container detail__socials">
  <h3 class="heading-2 titel__home">Ontdek meer op:</h3>
  <p class="body__home"><?php echo $act["website"];?></p>
  <ul class="socials__media">
    <li><a class="social__link" href="https://www.facebook.com"><img src="./assets/img/social/facebook_67.webp" alt="Facebook"></a></li>
    <li><a class="social__link" href="https://www.instagram.com"><img src="./assets/img/social/instagram_20.webp" alt="Instagram"></a></li>
    <li><a class="social__link" href="https://twitter.com"><img src="./assets/img/social/twitter_50.webp" alt="Twitter"></a></li>
  </ul>
  </div>
</article>

<article class="ookop container">
  <h3 class="heading-2 detail__lijn ook__lijn titel__home">Ook op <?php echo $act["datum"];?></h3>
  <div class='ookop__section'>
  <?php
  foreach($days as $day){
  ?>
      <article class='ookop__article'>
      <a class='act_link' href="index.php?page=detail&amp;id=<?php echo $day["id"];?>">
      <picture class="ookop__img">
          <source
          type="image/webp"
          srcset="
          assets/img/<?php echo $day["afbeelding"];?>_10.webp 155w,
          assets/img/<?php echo $day["afbeelding"];?>_20.webp 310w,
          assets/img/<?php echo $day["afbeelding"];?>_33.webp 517w,
          assets/img/<?php echo $day["afbeelding"];?>_50.webp 776w,
          assets/img/<?php echo $day["afbeelding"];?>_67.webp 1034w,
          assets/img/<?php echo $day["afbeelding"];?>_75.webp 1164w,
          assets/img/<?php echo $day["afbeelding"];?>_85.webp 1319w,
          assets/img/<?php echo $day["afbeelding"];?>_100.webp 1552w
          "
          sizes="(min-width: 1440px)  30rem,
          (min-width: 1024px)  30rem,
          (min-width: 768px)  30rem,
          (min-width: 320px) 3Orem,
          (min-width: 0)  30rem
          "
          />
          <source
          type="image/jpg"
          srcset="
          assets/img/<?php echo $day["afbeelding"];?>_10.jpg 155w,
          assets/img/<?php echo $day["afbeelding"];?>_20.jpg 310w,
          assets/img/<?php echo $day["afbeelding"];?>_33.jpg 517w,
          assets/img/<?php echo $day["afbeelding"];?>_50.jpg 776w,
          assets/img/<?php echo $day["afbeelding"];?>_67.jpg 1034w,
          assets/img/<?php echo $day["afbeelding"];?>_75.jpg 1164w,
          assets/img/<?php echo $day["afbeelding"];?>_85.jpg 1319w,
          assets/img/<?php echo $day["afbeelding"];?>_100.jpg 1552w
          "
          sizes="(min-width: 1440px)  30rem,
          (min-width: 1024px)  30rem,
          (min-width: 768px)  30rem,
          (min-width: 320px) 3Orem,
          (min-width: 0)  30rem
          "
          />
          <img class="ookop__image"
          src="./assets/img/<?php echo $day["afbeelding"];?>_100.jpg"
          alt="<?php echo $day['act_naam'];?>" />
        </picture>
        <div class='act-div__grid'>
        <p class='body-groot strong act__datum'><?php echo $day["beginuur"];?></p>
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
  <p class="cta"><a class="underline--magical body__home cta__link" href="index.php?page=programma">Ontdek meer</a></p>
</article>

</section>
