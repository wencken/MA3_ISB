<?php

require_once( __DIR__ . '/DAO.php');

class PagesDAO extends DAO {
   public function selectAll() {
    $sql = "SELECT * FROM `ISB_programmatie`
    INNER JOIN `ISB_locatie` ON `ISB_programmatie`.`locatie_id` = `ISB_locatie`.`id`
    INNER JOIN `ISB_act` ON `ISB_programmatie`.`act_id` = `ISB_act`.`id`
    AND `artiest_id` LEFT JOIN `ISB_artiest` on `ISB_act`.`artiest_id`=`ISB_artiest`.`id` WHERE `ISB_programmatie`.`id`= `ISB_programmatie`.`id` ORDER BY `datum` ASC, `beginuur` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  // public function search($term){
  //   $sql = "SELECT * FROM `ISB_programmatie` where act_id like :term limit 25";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':term','%'.$term.'%');
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  // public function selectByActId($id) {
  //   $sql = "SELECT `ISB_artiest`.*, `ISB_act`.* FROM `ISB_artiest` INNER JOIN `ISB_act`ON `ISB_artiest`.`id` = `ISB_act`.`artiest_id` WHERE `ISB_act`.`id`=:id";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }

  public function selectByActId($id) {
    $sql = "SELECT `ISB_artiest`.*, `ISB_programmatie`.*, `ISB_act`.* FROM `ISB_act`
    INNER JOIN `ISB_artiest`ON `ISB_act`.`artiest_id` = `ISB_artiest`.`id`
    INNER JOIN `ISB_programmatie` ON `ISB_act`.`id` = `ISB_programmatie`.`act_id` WHERE `ISB_act`.`id`=:id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  //combineren met AFBEELDINGEN
  // public function selectById($id) {
  //   $sql = "SELECT `products`.*, `product_images`.`image` FROM `products` RIGHT JOIN `product_images` ON `products`.`id` = `product_images`.`product_id` WHERE `products`.`id` = :id GROUP BY `products`.`id`";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }
}
