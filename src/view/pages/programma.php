<section class='programma'>
<header>
  <h2 class="heading-1 header__programma">Programma</h2>
  <span class="header__prog"><img src="./assets/img/bg/1_100.png" alt="achtergrond" class="hidden"></span>
</header>

  <section class="filter_section">
    <h3 class="heading-2">Filter</h3>
    <form action="index.php?page=programma" method="get" class="filter container">
    <input type="hidden" name="page" value="programma"/>
      <div class="filter__group">
          <legend for="dag" class="filter__titel">Toon mij:</legend>
          <ul class="checkbox">
            <li class= "filter__li">
              <input type="checkbox" value="dag" id="vrijdag" name="vrijdag" class="filter__input">
              <label for="vrijdag" class="filter__label <?php if (isset($_GET['vrijdag'])){echo 'checked';}?>">Vrijdag</label>
            </li>
            <li class= "filter__li">
              <input type="checkbox" value="dag" id="zaterdag" name="zaterdag" class="filter__input">
              <label for="zaterdag" class="filter__label <?php if (isset($_GET['zaterdag'])){echo 'checked';}?>">Zaterdag</label>
            </li>
            <li class= "filter__li">
              <input type="checkbox" value="dag" id="zondag" name="zondag" class="filter__input">
              <label for="zondag" class="filter__label <?php if (isset($_GET['zondag'])){echo 'checked';}?>">Zondag</label>
            </li>
          </ul>
      </div>
      <div class="filter__group">
          <legend for="type" class="filter__titel">Filter enkel op:</legend>
          <ul class="checkbox">
            <li class= "filter__li">
              <input type="checkbox"  value="type" id="voorstelling" name="voorstelling" class="filter__input <?php if (isset($_GET['voorstelling'])){echo 'actie';}?>">
              <label for="voorstelling" class="filter__label <?php if (isset($_GET['voorstelling'])){echo 'checked';}?>">voorstelling</label>
            </li>
            <li class= "filter__li">
              <input type="checkbox" value="type" id="straatact" name="straatact" class="filter__input">
              <label for="straatact" class="filter__label <?php if (isset($_GET['straatact'])){echo 'checked';}?>">straatact</label>
            </li>
            <li class= "filter__li">
              <input type="checkbox" value="type" id="activiteit" name="activiteit" class="filter__input">
              <label for="activiteit" class="filter__label <?php if (isset($_GET['activiteit'])){echo 'checked';}?>">activiteit</label>
            </li>
            <li class= "filter__li">
              <input type="checkbox" value="true" id="kinderen" name="kinderen" class="filter__input">
              <label for="kinderen" class="filter__label <?php if (isset($_GET['kinderen'])){echo 'checked';}?>">Kinderen</label>
            </li>
          </ul>
      </div>
      <input type="submit" value="toepassen" name="submit" class="body-groot filter__submit input">
    </form>
  </section>

  <section class="container">
    <h3 class="heading-2">Resultaten</h3>
    <div class='act__section'>
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
              type="image/jpg"
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
            <p class='body-groot strong act__datum'><?php echo $act["datum"];?></p>
            <div class='act__info'>
                <h4 class='heading-2 act__naam'><?php echo $act["artiest_naam"];?> (<?php echo $act["land"];?>)</h4>
                <h5 class='heading-3 act__titel'><?php echo $act["act_naam"];?></h5>
                <p class='body-klein act__locatie'><?php echo $act["locatie_naam"];?> | <?php echo $act["beginuur"];?> | <?php echo $act["kinderen"];?></p>
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
       </label> -->
      </div>
  </section>

 </section>
