<section>
<header><h2 class="heading-2 hidden"><?php echo $act["act_naam"];?></h2></header>

<section>
  <div id="detail-information">
      <p><a href="index.php?page=programma"><-Terug naar overzicht</a></p>
  </div>
  <header>
      <h3><?php echo $act["artiest_naam"]?> - <?php echo $act["artiest_id"];?> stelt voor</h3>
      <h4 class="heading-2 product-title"><?php echo $act["act_naam"];?> - <?php echo $act["id"];?></h4>
  </header>
  <div id="product-description"><?php echo $act["omschrijving"];?></div>
  <div id="product-description"><?php echo $act["datum"];?> | <?php echo $act["beginuur"];?></div>
  <div id="product-description">Locatie: <?php echo $act["locatie_naam"];?></div>
  <div id="detail-information">
      <p><a href="https://www.facebook.com">Facebook</a></p>
  </div>
  <div id="product-image">
      <?php echo '<img src="./assets/img/'. $grootAfbeelding["afbeelding"] . '" alt="' . $act["act_naam"] . '" />';?>
  </div>
</section>

  <section class="more-images clearfix">
      <header><h2>Meer beeldmateriaal</h2></header>
      <ul>
          <?php
          foreach($actAfbeeldingen as $actAfbeelding) {
            echo '<li>';
            echo '<a class="product-image-link" href="index.php?page=detail&amp;id=' . $act["id"] . '&amp;image=' . $actAfbeelding["id"] . '">';
            echo '<img src="./assets/img/'. $actAfbeelding["afbeelding"] . '" alt="' . $act["act_naam"] . '" />';
            echo '</a>';
            echo '</li>';
          }
          ?>
      </ul>
  </section>

  <nav>
      <a class="nav-link nav-link-previous" href="index.php?page=detail&amp;id=<?php echo $previous ?>"><- previous</a>
      <a class="nav-link nav-link-next" href="index.php?page=detail&amp;id=<?php echo $next ?>">next -></a>
  </nav>
</section>

</section>
