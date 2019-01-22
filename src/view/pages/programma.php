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
            <span class='player__stat'><?php echo $act["kinderen"];?></span>
          </a>
        </li>
        <?php
      }
    ?>
    </ul>
  </section>

 </section>
