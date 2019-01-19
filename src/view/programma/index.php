<ul class="players__list">
<?php
  foreach($acts as $act){
    ?>
    <li class='player'>
        <span class='player__name'><?php echo $act["type"];?> | <?php echo $act["artiest_naam"];?> (<?php echo $act["land"];?>) | <?php echo $act["act_naam"];?></span>
        <span class='player__stat'><?php echo $act["datum"];?> | <?php echo $act["locatie_naam"];?> | <?php echo $act["beginuur"];?></span>
    </li>
    <?php
  }
?>
</ul>
