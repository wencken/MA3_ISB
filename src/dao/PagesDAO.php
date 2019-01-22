<?php

require_once( __DIR__ . '/DAO.php');

class PagesDAO extends DAO {
   public function selectAll() {
    $sql = "SELECT * FROM `ISB_programmatie`
    INNER JOIN `ISB_locatie` ON `ISB_programmatie`.`locatie_id` = `ISB_locatie`.`id`
    INNER JOIN `ISB_act` ON `ISB_programmatie`.`act_id` = `ISB_act`.`id`
    LEFT JOIN `ISB_artiest` on `ISB_act`.`artiest_id`=`ISB_artiest`.`id`
    WHERE `ISB_programmatie`.`id`= `ISB_programmatie`.`id`
    ORDER BY `datum` ASC, `beginuur` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function filteren($dag = '', $type= ''){
    $sql = "SELECT * FROM (((`ISB_programmatie`
    INNER JOIN `ISB_locatie` ON `ISB_programmatie`.`locatie_id` = `ISB_locatie`.`id`)
    INNER JOIN `ISB_act` ON `ISB_programmatie`.`act_id` = `ISB_act`.`id`)
    LEFT JOIN `ISB_artiest` on `ISB_act`.`artiest_id`=`ISB_artiest`.`id`)
    WHERE 1";

    if (!empty($dag)){
      $sql .= " AND `ISB_programmatie`.`datum` = :dag";
    }
    if (!empty($type)) {
      $sql .= " AND `ISB_act`.`type` = :type";
    }

    // $sql .= " ORDER BY `datum` ASC, `beginuur` ASC";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($dag)){
      $stmt->bindValue(':dag','%'.$dag.'%');
    }
    if (!empty($type)) {
      $stmt->bindValue(':type', $type);
    }

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  // public function search($term){
  //   $sql = "SELECT * FROM `ISB_programmatie` where `act_naam` like :term limit 25";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':term','%'.$term.'%');
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  public function selectAllTypes() {
    $sql = "SELECT DISTINCT `type` FROM `ISB_act` ORDER BY `type`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllDays() {
    $sql = "SELECT DISTINCT `datum`  FROM `ISB_programmatie` ORDER BY `datum`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id) {
    $sql = "SELECT `ISB_artiest`.*, `ISB_programmatie`.*, `ISB_act`.* FROM `ISB_act`
    INNER JOIN `ISB_artiest`ON `ISB_act`.`artiest_id` = `ISB_artiest`.`id`
    INNER JOIN `ISB_programmatie` ON `ISB_act`.`id` = `ISB_programmatie`.`act_id`
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
