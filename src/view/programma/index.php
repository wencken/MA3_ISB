<ul class="players__list">
<?php
  foreach($acts as $act){
    ?>
    <li class='player'>
        <span class='player__stat'><?php echo $act["datum"];?></span>
        <span class='player__name'><?php echo $act["act_id"];?></span>
        <span class='player__stat'><?php echo $act["locatie_id"];?> | <?php echo $act["beginuur"];?></span>
    </li>
    <?php
  }
?>
</ul>
