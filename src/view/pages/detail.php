<section>
  <div id="detail-information">
      <p><a href="index.php?page=programma">Terug naar overzicht</a></p>
  </div>
  <header>
      <h2><?php echo $act["artiest_naam"]?> - <?php echo $act["artiest_id"];?> stelt voor</h2>
      <h1 class="product-title"><?php echo $act["act_naam"];?> - <?php echo $act["id"];?></h1>
  </header>
  <div id="product-description"><?php echo $act["omschrijving"];?></div>
  <div id="detail-information">
      <p><a href="https://www.facebook.com">Facebook</a></p>
  </div>
</section>

<section>
  <header><h2>Meer beeldmateriaal</h2></header>
  <!-- <ul>
    <?php
    foreach($productImages as $productImage) {
      echo '<li>';
      echo '<a class="product-image-link" href="index.php?page=detail&amp;id=' . $product['id'] . '&amp;image=' . $productImage['id'] . '">';
      echo '<img src="' . $productImage['image'] . '" alt="' . $product['name'] . '" />';
      echo '</a>';
      echo '</li>';
    }
    ?>
  </ul> -->
</section>
