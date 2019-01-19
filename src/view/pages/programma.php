    <header class="header">
      <h1 class="header__title"><spans class="header__title--variant">Programma</span></h1>
    </header>

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
    <form action="index.php" class="filter__form">
    <div class="form-group">
          <label for="days">Toon mij:</label>
          <button type="button" class="filterbutton alle">Alle</button>
          <button type="button" class="filterbutton vrijdag">Vr 24.08</button>
          <button type="button" class="filterbutton zaterdag">Za 25.08</button>
          <button type="button" class="filterbutton zondag">Zo 26.08</button>
			</div>
      <div class="form-group">
          <label for="seasons">Filter enkel op:</label>
          <select name="seasons" id="seasons" class="seasons form-control">
            <option value="0">----------</option>
          </select>
			</div>
      <div class="form-group">
          <label for="kids">
            <input type="checkbox" name="kids" class="kids" id="kids" value="true">
            <span>Kinderen</span>
         </label>
      </div>
      <div class="form-group">
          <input type="hidden" name="action" value="filter" />
          <label for="term" class="form__label">
            <span class="hidden">Search</span>
            <input type="search" id="term" name="term" class="input input--filter" value="<?php echo $term;?>">
          </label>
      </div>
      <div>
         <input type="submit" value="Filter" class="form__submit input input--button">
      </div>
    </form>
  </section>

      <section class="players">
          <h2 class="hidden">Resultaten</h2>
        <?php echo $content;?>
      </section>


      <ul class="players__list">
<?php
  foreach($acts as $act){
    ?>
    <li class='player'>
        <a href="index.php?page=detail&amp;id=<?php echo $act['id'];?>">
        <span class='player__name'><?php echo $act["type"];?> | <?php echo $act["artiest_naam"];?> (<?php echo $act["land"];?>) | <?php echo $act["act_naam"];?></span>
        <span class='player__stat'><?php echo $act["datum"];?> | <?php echo $act["locatie_naam"];?> | <?php echo $act["beginuur"];?></span>
        </a>
    </li>
    <?php
  }
?>
