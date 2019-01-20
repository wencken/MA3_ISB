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

  public function selectById($id) {
    $sql = "SELECT * FROM `ISB_afbeelding` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


  // public function insert($data) {
  //   $errors = $this->getValidationErrors($data);
  //   if(empty($errors)) {
  //     $sql = "INSERT INTO `ISB_afbeelding` (`act_id`, `afbeelding`) VALUES (:act_id, :afbeelding)";
  //     $stmt = $this->pdo->prepare($sql);
  //     $stmt->bindValue(':act_id', $data['act_id']);
  //     $stmt->bindValue(':afbeelding', $data['afbeelding']);
  //     if($stmt->execute()) {
  //       $insertedId = $this->pdo->lastInsertId();
  //       return $this->selectById($insertedId);
  //     }
  //   }
  //   return false;
  // }

  // public function update($id, $data) {
  //   $errors = $this->getValidationErrors($data);
  //   if(empty($errors)) {
  //     $sql = "UPDATE `ISB_afbeelding` SET `act_id` = :act_id, `afbeelding` = :afbeelding WHERE `id` = :id";
  //     $stmt = $this->pdo->prepare($sql);
  //     $stmt->bindValue(':act_id', $data['act_id']);
  //     $stmt->bindValue(':afbeelding', $data['afbeelding']);
  //     $stmt->bindValue(':id', $id);
  //     if($stmt->execute()) {
  //       return $this->selectById($id);
  //     }
  //   }
  //   return false;
  // }

  // public function delete($id) {
  //   $sql = "DELETE FROM `ISB_afbeelding` WHERE `id` = :id";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   return $stmt->execute();
  // }

  // public function getValidationErrors($data) {
  //   $errors = array();
  //   if(!isset($data['act_id'])) {
  //     $errors['act_id'] = 'Please Enter a Product Id';
  //   }
  //   if(!isset($data['afbeelding'])) {
  //     $errors['afbeelding'] = 'Please Enter an Image';
  //   }
  //   return $errors;
  // }
}
