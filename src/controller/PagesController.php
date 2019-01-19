<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PagesDAO.php';

class PagesController extends Controller {

  // private $todoDAO;
  private $pagesDAO;

  function __construct() {
    $this->pagesDAO = new PagesDAO();
  }
  public function index() {
  }

  public function programma() {
    // if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
    //   $acts = $this->pagesDAO->search($_GET['term']);
    //   $this->set('title', "Acts for ". $_GET['term']);
    //   $this->set('term',$_GET['term']);
    // }else{
      $acts = $this->pagesDAO->selectAll();
      $this->set('title', "Alle");
      $this->set('term','');
    // }

    $this->set('acts', $acts);
    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($acts);
      exit();
    }
  }
  public function detail() {
    if(empty($_GET['id']) || !$act = $this->pagesDAO->selectByActId($_GET['id'])) {
      $_SESSION['error'] = 'Invalid Product';
      header('Location: index.php');
    }
    $this->set('act', $act);

    $knoppen = $this->pagesDAO->selectAll();
    $ids = array();
    foreach($knoppen as $knop){
      $ids[] = $knop["id"];
    }
    $current = array_search($act["id"], $ids);
    $next = $current + 1;
    $previous = $current - 1;
    if($next == count($ids)){
      $next = 0;
    }
    if($previous < 0){
      $previous = count($ids)-1;
    }
    $this->set('next', $ids[$next]);
    $this->set('previous', $ids[$previous]);
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
