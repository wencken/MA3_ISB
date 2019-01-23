<section class="detail">
<h2 class="heading-2 hidden"><?php echo $act["act_naam"];?></h2>

<article class="detail__header">
  <h3 class="detail__titel hidden">In de kijker</h3>
  <p class="detail__link"><a href="index.php?page=programma"><-Terug naar overzicht</a></p>

  <section class="detail__informatie">
      <h4 class="detail__titel"><?php echo $act["artiest_naam"]?> - <?php echo $act["artiest_id"];?> stelt voor</h4>
      <p class="heading-2"><?php echo $act["act_naam"];?> - <?php echo $act["act_id"];?></p>
      <p class="detail__omschrijving"><?php echo $act["omschrijving"];?></p>
      <p class="detail__link"><a href="https://www.facebook.com">Facebook</a></p>
  </section>

  <section>
    <h4 class='detail__titel hidden'><?php echo $act["act_naam"];?> in beeld</h4>
    <div class="beeld__groot">
        <img src="./assets/img/<?php echo $grootAfbeelding["afbeelding"];?>_100.jpg" alt="<?php echo $act["act_naam"];?>" />
    </div>
  </section>

  <nav>
      <h4 class="detail__titel hidden">Bekijk meer acts</h4>
      <a class="detail__link" href="index.php?page=detail&amp;id=<?php echo $previous ?>"><- previous</a>
      <a class="detail__link" href="index.php?page=detail&amp;id=<?php echo $next ?>">next -></a>
  </nav>
</article>

<article class='detail__praktisch'>
  <h3 class="detail__titel">Praktische informatie</h3>
  <div class="praktisch__omschrijving">
    <p>Datum</p>
    <p><?php echo $act["datum"];?></p>
  </div>
  <div class="praktisch__omschrijving">
    <p>Tijdstip</p>
    <p><?php echo $act["beginuur"];?>(<?php echo $act["duur"];?>)</p>
  </div>
  <div class="praktisch__omschrijving">
    <p>Locatie</p>
    <p><?php echo $act["locatie_naam"];?></p>
    <p>9120 Beveren</p>
    <p>Belgium</p>
  </div>
</article>

<article class="beeldmateriaal">
    <h3 class="heading-3 detail__titel">Meer beeldmateriaal</h3>
    <div id="beeld__groot">
        <?php echo '<img src="./assets/img/'.$grootAfbeelding["afbeelding"].'_100.jpg" alt="' . $act["act_naam"] . '" />';?>
    </div>
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
  <h3 class="detail__titel">Ontdek meer op:</h3>
  <p><?php echo $act["website"];?></p>
  <ul>
    <li><a class="detail__link" href="https://www.facebook.com"><img src="./assets/img/social/facebook.png" alt="Facebook"></a></li>
    <li><a class="detail__link" href="https://www.instagram.com"><img src="./assets/img/social/instagram.png" alt="Instagram"></a></li>
    <li><a class="detail__link" href="https://twitter.com"><img src="./assets/img/social/twitter.png" alt="Twitter"></a></li>
  </ul>
</article>

<article class='ookop'>
  <h3 class="detail__titel">Ook op <?php echo $act["datum"];?></h3>
  <?php
  foreach($days as $day){
  ?>
      <article class='act__article'>
      <a class='act_link' href="index.php?page=detail&amp;id=<?php echo $day["id"];?>">
      <picture class="act__image">
          <source
          type="image/webp"
          srcset="
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_10.webp 155w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_20.webp 310w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_33.webp 517w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_50.webp 776w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_67.webp 1034w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_75.webp 1164w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_85.webp 1319w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_100.webp 1552w
          "
          sizes="(min-width: 1440px) 59rem,
          (min-width: 1024px) 47rem,
          (min-width: 768px) 36rem,
          (min-width: 320px) 54rem,
          (min-width: 0) 100vw
          "
          />
          <source
          srcset="
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_10.jpg 155w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_20.jpg 310w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_33.jpg 517w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_50.jpg 776w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_67.jpg 1034w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_75.jpg 1164w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_85.jpg 1319w,
          assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_100.jpg 1552w
          "
          sizes="(min-width: 1440px) 59rem,
          (min-width: 1024px) 47rem,
          (min-width: 768px) 36rem,
          (min-width: 320px) 54rem,
          (min-width: 0) 100vw
          "
          />
          <img
          src="./assets/img/<?php echo $actAfbeeldingen["afbeelding"];?>_100.jpg"
          alt="<?php echo $act['act_naam'];?>" />
        </picture>
        <p class='act__datum'><?php echo $day["datum"];?></p>
        <div class='act-div__grid'>
            <h4 class='act__naam'><?php echo $day["artiest_naam"];?> (<?php echo $day["land"];?>)</h4>
            <p class='act__titel'><?php echo $day["act_naam"];?></p>
        </div>
      </a>
    </article>
    <?php
    }
  ?>
  <p class="detail__link"><a href="index.php?page=programma">Ontdek meer</a></p>
</article>

</section>
