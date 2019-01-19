<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProgrammaDAO.php';

class ProgrammaController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->programmaDAO = new ProgrammaDAO();
  }

  public function index() {
    if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
      $acts = $this->programmaDAO->search($_GET['term']);
      $this->set('title', "Acts for ". $_GET['term']);
      $this->set('term',$_GET['term']);
    }else{
      $acts = $this->programmaDAO->selectAll();
      $this->set('title', "Alle");
      $this->set('term','');
    }

    $this->set('acts', $acts);
    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($acts);
      exit();
    }
  }

  public function detail(){

  }
/*
  private function handleSearchPlayer() {

    if (!$searchActsResult) {
      $errors = "No acts found";
      $this->set('errors', $errors);
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'error',
          'errors' => $errors
        ));
        exit();
      }else{
        return $errors;
      }
      $_SESSION['error'] = $errors;
    } else {
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'ok',
          'todo' => $searchActsResult
        ));
        exit();
      }else{
        return searchActsResult;
      }
      $_SESSION['info'] = count($searchActsResult). " acts found";
      header('Location: index.php');
      exit();
    }
  }*/

}
