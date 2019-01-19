<section>
  <div id="detail-information">
  <p><a href="index.php?programma=programma">Terug naar overzicht</a></p>

    <header><h1 class="product-title"><?php echo $act['naam'];?></h1></header>
    <div id="product-pricing">
      <p class="price">&euro; <?php echo $acts['price'];?></p>

      <!-- TODO: zorg dat je de nodige info meegeeft aan deze link om items te kunnen adden -->
      <a id="add-to-cart" class="btn" href="index.php?page=cart&amp;action=add-to-cart&amp;id=<?php echo $acts['id']; ?>">Add to Cart</a>

    </div>
    <div id="product-description"><?php echo $acts['description'];?></div>
    <section class="more-images clearfix">
    <header><h1>Meer beeldmateriaal</h1></header>
      <ul>
        <?php
        foreach($actsImages as $actsImage) {
          echo '<li>';
          echo '<a class="product-image-link" href="index.php?page=detail&amp;id=' . $acts['id'] . '&amp;image=' . $actsImage['id'] . '">';
          echo '<img src="' . $actsImage['image'] . '" alt="' . $acts['name'] . '" />';
          echo '</a>';
          echo '</li>';
        }
        ?>
      </ul>
    </section>
  </div>
</section>
