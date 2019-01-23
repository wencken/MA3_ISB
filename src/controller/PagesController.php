<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PagesDAO.php';
require_once __DIR__ . '/../dao/ImageDAO.php';

class PagesController extends Controller {

  // private $todoDAO;
  private $pagesDAO;
  private $imageDAO;

  function __construct() {
    $this->pagesDAO = new PagesDAO();
    $this->imageDAO = new ImageDAO();
  }

  public function index() {
    // var_dump('filter_vol');
    $this->set('currentPage', 'index');
  }

  public function programma() {
     $data = array(
      'alle' => (!empty($_GET['vrijdag'])) ? $_GET['vrijdag'] : '',
      'vrijdag' => (!empty($_GET['vrijdag'])) ? $_GET['vrijdag'] : '',
      'zaterdag' => (!empty($_GET['zaterdag'])) ? $_GET['zaterdag'] : '',
      'zondag' => (!empty($_GET['zondag'])) ? $_GET['zondag'] : '',
      'voorstelling' => (!empty($_GET['voorstelling'])) ? $_GET['voorstelling'] : '',
      'straatact' => (!empty($_GET['straatact'])) ? $_GET['straatact'] : '',
      'activiteit' => (!empty($_GET['activiteit'])) ? $_GET['activiteit'] : '',
      'kinderen' => (!empty($_GET['kinderen'])) ? $_GET['kinderen'] : ''
    );

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($acts);
      exit();
    }
    $acts = $this->pagesDAO->filter($data);
    $this->set('acts', $acts);
    $this->set('currentPage', 'programma');
  }

  public function detail() {
    if(empty($_GET['id']) || !$act = $this->pagesDAO->selectById($_GET['id'])) {
      $_SESSION['error'] = 'Deze act bestaat niet.';
      header('Location: index.php');
    }
    $this->set('act', $act);

    $days = $this->pagesDAO->selectByDay($act['datum']);
    $this->set('days', $days);


    $knoppen = $this->pagesDAO->selectAll();
    $ids = array();
    foreach($knoppen as $knop){
      $ids[] = $knop["id"];
    }
    $current = array_search($act["act_id"], $ids);
    $next = $current + 1;
    $previous = $current - 1;
    if($next == count($ids)){
      $next = 0;
    }
    if($previous < 0){
      $previous = count($ids)-1;
    }

    $actAfbeeldingen = $this->imageDAO->selectByActId($act['act_id']);

    $grootAfbeelding = $actAfbeeldingen[0];
    if(!empty($_GET['image']) && $actAfbeelding = $this->imageDAO->selectById($_GET['image'])) {
      $grootAfbeelding = $actAfbeelding;
    }

    $this->set('next', $ids[$next]);
    $this->set('previous', $ids[$previous]);
    $this->set('actAfbeeldingen', $actAfbeeldingen);
    $this->set('grootAfbeelding', $grootAfbeelding);
    $this->set('currentPage', 'programma');
  }

}
