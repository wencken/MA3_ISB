<section class='programma'>
<header><h2 class="heading-2">Programma</h2></header>

  <section class="filter">
    <h3 class="heading-3">Filter</h3>
    <form action="index.php?page=programma" method="get" class="filter__form">
    <input type="hidden" name="page" value="programma" />
      <div class="form-group toon">
          <div for="dag">Toon mij:</div>

          <input type="radio" value="dag" id="alle" name="alle"/>
          <label for="alle" class="form-title">Alle</label>

          <input type="radio" value="dag" id="vrijdag" name="vrijdag"/>
          <label for="vrijdag" class="form-title">Vrijdag</label>

          <input type="radio" value="dag" id="zaterdag" name="zaterdag"/>
          <label for="zaterdag" class="form-title">Zaterdag</label>

          <input type="radio" value="dag" id="zondag" name="zondag"/>
          <label for="zondag" class="form-title">Zondag</label>
      </div>
      <div class="checkbox">
          <div for="type">Filter enkel op:</div>
          <ul class="checkboxtags">
            <li class= "checkboxtags-li">
              <input type="checkbox"  value="type" id="voorstelling" name="voorstelling">
              <label for="voorstelling" class="checkboxtags-title form-title">voorstelling</label>
            </li>
            <li class= "checkboxtags-li">
              <input type="checkbox" value="type" id="straatact" name="straatact">
              <label for="straatact" class="checkboxtags-title form-title">straatact</label>
            </li>
            <li class= "checkboxtags-li">
              <input type="checkbox" value="type" id="activiteit" name="activiteit">
              <label for="activiteit" class="checkboxtags-title form-title">activiteit</label>
            </li>
          </ul>
      </div>
      <div class="form-group">
          <input type="checkbox" value="kids" name="kinderen">
          <label for="kinderen" class="form-title">Kinderen</label>
      </div>
      <input type="submit" value="toepassen" name="submit" class="form__submit input input--button">
    </form>
  </section>

  <section class='act__section'>
    <h3 class="heading-3">Resultaten</h3>
    <!-- <div class="load-more-container"> -->
    <!-- <input type="checkbox" class="load-more"/> -->
      <?php
        foreach($acts as $act){
          ?>
          <article class='act__article'>
          <a class='act_link' href="index.php?page=detail&amp;id=<?php echo $act["act_id"];?>">
          <p class='act__type'><?php echo $act["type"];?></p>
          <picture class="act__image">
              <source
              type="image/webp"
              srcset="
              assets/img/<?php echo $act["afbeelding"];?>_10.webp 155w,
              assets/img/<?php echo $act["afbeelding"];?>_20.webp 310w,
              assets/img/<?php echo $act["afbeelding"];?>_33.webp 517w,
              assets/img/<?php echo $act["afbeelding"];?>_50.webp 776w,
              assets/img/<?php echo $act["afbeelding"];?>_67.webp 1034w,
              assets/img/<?php echo $act["afbeelding"];?>_75.webp 1164w,
              assets/img/<?php echo $act["afbeelding"];?>_85.webp 1319w,
              assets/img/<?php echo $act["afbeelding"];?>_100.webp 1552w
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
              assets/img/<?php echo $act["afbeelding"];?>_10.jpg 155w,
              assets/img/<?php echo $act["afbeelding"];?>_20.jpg 310w,
              assets/img/<?php echo $act["afbeelding"];?>_33.jpg 517w,
              assets/img/<?php echo $act["afbeelding"];?>_50.jpg 776w,
              assets/img/<?php echo $act["afbeelding"];?>_67.jpg 1034w,
              assets/img/<?php echo $act["afbeelding"];?>_75.jpg 1164w,
              assets/img/<?php echo $act["afbeelding"];?>_85.jpg 1319w,
              assets/img/<?php echo $act["afbeelding"];?>_100.jpg 1552w
              "
              sizes="(min-width: 1440px) 59rem,
              (min-width: 1024px) 47rem,
              (min-width: 768px) 36rem,
              (min-width: 320px) 54rem,
              (min-width: 0) 100vw
              "
              />
              <img
              src="./assets/img/<?php echo $act["afbeelding"];?>_100.jpg"
              alt="<?php echo $act['act_naam'];?>" />
            </picture>
            <div class='act-div__grid'>
            <p class='act__datum'><?php echo $act["datum"];?></p>
            <div class='act__info'>
                <h4 class='act__naam'><?php echo $act["artiest_naam"];?> (<?php echo $act["land"];?>)</h4>
                <h5 class='act__titel'><?php echo $act["act_naam"];?></h5>
                <p class='act__locatie'><?php echo $act["locatie_naam"];?> | <?php echo $act["beginuur"];?> | <?php echo $act["kinderen"];?></p>
            </div>
            </div>
          </a>
        </article>
        <?php
        }
      ?>

      <!-- <label class="load-more-btn" for="load-more">
        <span class="unloaded">LOAD MORE</span>
        <span class="loaded">VIEW LESS</span>
       </label>
      </div> -->
  </section>

 </section>
