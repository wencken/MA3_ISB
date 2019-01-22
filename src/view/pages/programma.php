<section>
<header><h2 class="heading-2">Programma</h2></header>

  <?php
    if(!empty($_SESSION['error'])) {
      echo '<div class="error box">' . $_SESSION['error'] . '</div>';
    }
    if(!empty($_SESSION['info'])) {
      echo '<div class="info box">' . $_SESSION['info'] . '</div>';
    }
  ?>

  <section class="filter">
    <h3 class="heading-3">Filter</h3>
    <form action="index.php?page=programma" method="get" class="filter__form">
    <input type="hidden" name="page" value="programma" />
      <div class="form-group">
          <label for="dag">Toon mij:</label>
          <!-- <input type="checkbox" name="alle" class="checkbox" id="alle" value="alle">
          <span>Alle</span> -->
          <input type="checkbox" value="dag" name="vrijdag">
          <span>vrijdag</span>
          <input type="checkbox" value="dag" name="zaterdag">
          <span>zaterdag</span>
          <input type="checkbox" value="dag" name="zondag">
          <span>zondag</span>
      </div>
      <div class="form-group">
          <label for="type">Filter enkel op:</label>
          <input type="checkbox"  value="type" name="voorstelling">
          <span>voorstelling</span>
          <input type="checkbox" value="type" name="straatact">
          <span>straatact</span>
          <input type="checkbox" value="type" name="activiteit">
          <span>activiteit</span>
      </div>
<!-- <div class="form-group">
          <label for="kids">Kinderen</label>
          <input type="checkbox" value="kids" name="kinderen">
      </div> -->
      <input type="submit" value="toepassen" name="submit" class="form__submit input input--button">
    </form>
  </section>

  <section class="players">
    <h3 class="heading-3">Resultaten</h3>
    <ul class="players__list">
    <?php
      foreach($acts as $act){
        ?>
        <li class='player'>
            <a href="index.php?page=detail&amp;id=<?php echo $act["act_id"];?>">
            <img src="./assets/img/<?php echo $act["afbeelding"];?>" alt="<?php echo $act['act_naam'];?>" />
            <span class='player__name'><?php echo $act["type"];?> | <?php echo $act["artiest_naam"];?> (<?php echo $act["land"];?>) | <?php echo $act["act_naam"];?></span>
            <span class='player__stat'><?php echo $act["datum"];?> | <?php echo $act["locatie_naam"];?> | <?php echo $act["beginuur"];?></span>
            </a>
        </li>
        <?php
      }
    ?>
    </ul>
  </section>

 </section>
