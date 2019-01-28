<?php
require_once __DIR__ . '/DAO.php';
class ImageDAO extends DAO {
  public function selectByActId($act_id) {
    $sql = "SELECT * FROM `ISB_afbeelding` WHERE `act_id` = :act_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':act_id', $act_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAll() {
    $sql = "SELECT * FROM `ISB_afbeelding`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectImage() {
    $sql = "SELECT * FROM `ISB_afbeelding`
    INNER JOIN `ISB_act` ON `ISB_afbeelding`.`act_id` = `ISB_act`.`id`
    WHERE `afbeelding` LIKE '%1' ORDER BY rand() LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id) {
    $sql = "SELECT *FROM `ISB_afbeelding` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
