<?php

require_once( __DIR__ . '/DAO.php');

class PagesDAO extends DAO {
   public function selectAll() {
    $sql = "SELECT * FROM `ISB_programmatie`
    INNER JOIN `ISB_locatie` ON `ISB_programmatie`.`locatie_id` = `ISB_locatie`.`id`
    INNER JOIN `ISB_act` ON `ISB_programmatie`.`act_id` = `ISB_act`.`id`
    LEFT JOIN `ISB_artiest` on `ISB_act`.`artiest_id`=`ISB_artiest`.`id`
    RIGHT JOIN `ISB_afbeelding` ON `ISB_act`.`id` = `ISB_afbeelding`.`act_id`
    WHERE `ISB_programmatie`.`id`= `ISB_programmatie`.`id`
    ORDER BY `datum` ASC, `beginuur` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function filter($data){
    // print_r($data);
    $sql = "SELECT * FROM `ISB_programmatie`
    INNER JOIN `ISB_locatie` ON `ISB_programmatie`.`locatie_id` = `ISB_locatie`.`id`
    INNER JOIN `ISB_act` ON `ISB_programmatie`.`act_id` = `ISB_act`.`id`
    LEFT JOIN `ISB_artiest` on `ISB_act`.`artiest_id`=`ISB_artiest`.`id`
    RIGHT JOIN `ISB_afbeelding` ON `ISB_act`.`id` = `ISB_afbeelding`.`act_id`
    WHERE 1";

    if (!empty($data['vrijdag'])) {
     $sql .= " AND `ISB_programmatie`.`datum` LIKE 'vr%' ";
      if (!empty($data['zaterdag'])) {
        $sql .= " OR `ISB_programmatie`.`datum` LIKE 'za%' ";
      }
      if (!empty($data['zondag'])) {
        $sql .= " OR `ISB_programmatie`.`datum` LIKE 'zo%' ";
      }
    } else if (!empty($data['zaterdag'])) {
      $sql .=  " AND `ISB_programmatie`.`datum` LIKE 'za%' ";
      if (!empty($data['zondag'])) {
        $sql .= " OR `ISB_programmatie`.`datum` LIKE 'zo%' ";
      }
    } else if (!empty($data['zondag'])) {
      $sql .=  " AND `ISB_programmatie`.`datum` LIKE 'zo%' ";
    }

    if (!empty($data['voorstelling'])) {
      $sql .= " AND `ISB_act`.`type` LIKE 'voorstelling%' ";
      if (!empty($data['straatact'])) {
        $sql .= " OR `ISB_act`.`type` LIKE 'straatact%' ";
      }
      if (!empty($data['activiteit'])) {
        $sql .= " OR `ISB_act`.`type` LIKE 'activiteit%' ";
      }
    } else if (!empty($data['straatact'])) {
      $sql .= " AND `ISB_act`.`type` LIKE 'straatact%' ";
      if (!empty($data['activiteit'])){
        $sql .= " OR `ISB_act`.`type` LIKE 'activiteit%' ";
      }
    } else if (!empty($data['activiteit'])) {
      $sql .= " AND `ISB_act`.`type` LIKE 'activiteit%' ";
    }

    $sql .= " ORDER BY `datum` ASC, `beginuur` ASC";

    $stmt = $this->pdo->prepare($sql);

    if (!empty($data['vrijdag'])){
      $stmt->bindValue(':vrijdag',$data['vrijdag']);
    }
    if (!empty($data['zaterdag'])){
      $stmt->bindValue(':zaterdag',$data['zaterdag']);
    }
    if (!empty($data['zondag'])){
      $stmt->bindValue(':zondag',$data['zondag']);
    }
    if (!empty($data['voorstelling'])){
      $stmt->bindValue(':voorstelling',$data['voorstelling']);
    }
    if (!empty($data['straatact'])){
      $stmt->bindValue(':straatact',$data['straatact']);
    }
    if (!empty($data['activiteit'])){
      $stmt->bindValue(':activiteit',$data['activiteit']);
    }

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id) {
    $sql = "SELECT `ISB_artiest`.*, `ISB_programmatie`.*, `ISB_act`.* , `ISB_locatie`.* FROM `ISB_act`
    INNER JOIN `ISB_artiest`ON `ISB_act`.`artiest_id` = `ISB_artiest`.`id`
    INNER JOIN `ISB_programmatie` ON `ISB_act`.`id` = `ISB_programmatie`.`act_id`
    INNER JOIN `ISB_locatie` ON `ISB_programmatie`.`locatie_id` = `ISB_locatie`.`id`
    WHERE `ISB_act`.`id`=:id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  // // combineren met AFBEELDINGEN
  // public function selectById($id) {
  //   $sql = "SELECT `ISB_act`.*, `ISB_afbeelding`.`afbeelding` FROM `ISB_act` RIGHT JOIN `ISB_afbeelding` ON `ISB_act`.`id` = `ISB_afbeelding`.`act_id` WHERE `ISB_act`.`id` = :id GROUP BY `ISB_act`.`id`";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }
}
