<section>
<header><h2>Programma</h2></header>

  <?php
    if(!empty($_SESSION['error'])) {
      echo '<div class="error box">' . $_SESSION['error'] . '</div>';
    }
    if(!empty($_SESSION['info'])) {
      echo '<div class="info box">' . $_SESSION['info'] . '</div>';
    }
  ?>

  <section class="filter">
    <h2 class="filter__title">Filter</h2>
    <form action="index.php?page=programma" method="get" class="filter__form">
    <input type="hidden" name="action" value="filter" />
      <div class="form-group">
          <label for="dag">Toon mij:
          <!-- <input type="checkbox" name="alle" class="checkbox" id="alle" value="alle">
          <span>Alle</span> -->
          <?php foreach($dagen as $day):?>
          <input type="radio" name="dag" class="radiobutton" id="radiobutton" value="<?php echo $day['datum'];?>" <?php if($dag == $day['datum']) echo 'selected';?>>
          <span><?php echo $day['datum'];?></span>
          <?php endforeach;?>
          </label>
          <!-- <input type="radio" name="dag" class="radiobutton" id="vrijdag" value="vrijdag">
          <span>VRIJ</span>
          <input type="radio" name="dag" class="radiobutton" id="zaterdag" value="zaterdag">
          <span>ZAT</span>
          <input type="radio" name="dag" class="radiobutton" id="zondag" value="zondag">
          <span>ZON</span> -->
      </div>
      <div class="form-group">
          <label for="type">Filter enkel op:
          <?php foreach($categorie as $catego):?>
          <input type="checkbox" name="type" class="checkbox" id="checkbox" value="<?php echo $catego['type'];?>" <?php if($type == $catego['type']) echo 'selected';?>>
          <span><?php echo $catego['type'];?></span>
          <?php endforeach;?>
          </label>
			</div>
      <input type="submit" value="filter" class="form__submit input input--button">
    </form>
      <!-- <div class="form-group">
          <label for="kids">
            <input type="checkbox" name="kids" class="kids" id="kids" value="true">
            <span>Kinderen</span>
         </label>
      </div> -->
  </section>

      <section class="players">
          <h2 class="hidden">Resultaten</h2>
        <ul class="players__list">
        <?php
          foreach($acts as $act){
            ?>
            <li class='player'>
                <a href="index.php?page=detail&amp;id=<?php echo $act["act_id"];?>">
                <img src="./assets/act/<?php echo $act["afbeelding_id"];?>" alt="<?php echo $act['act_naam'];?>" />
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
