<?php

require_once( __DIR__ . '/DAO.php');

class ProgrammaDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT * FROM `ISB_programmatie`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function search($term){
    $sql = "SELECT * FROM `ISB_programmatie` where Name like :term limit 25";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':term','%'.$term.'%');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `ISB_programmatie` WHERE `Id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }




}
