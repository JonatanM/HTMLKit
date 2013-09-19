<?php

namespace HTMLKit;

/**
 * Description of HTMLTable
 *
 * @author thiago
 */
class HTMLTable extends \HTMLKit\HTMLElement{

  private $thead = array();
  private $tbody = null;
  private $tfooter = null;


  public function __construct($class = null, $id = null, $name = null, $comment = null, $title = null) {
    $table = parent::__construct("table", $class, $id, $name, $comment, $title);
    if(is_null($class)){
      $class = "table";
    }
    return $table;
  }


  /**
   *
   * @return \HTMLKit\HTMLTableHeader
   */
  private function createHeader($value, $class){
    $th = new \HTMLKit\HTMLTableHeader();
    $th->setValue($value);
    if(!is_null($class)){
      $th->setClass($class);
    }
    return $th;
  }

  /**
   *
   * @return \HTMLKit\HTMLTableBody()
   */
  private function createTbody(){

    if(is_null($this->getTbody())){
      $this->setTbody(new \HTMLKit\HTMLTableBody());
    }
    return $this->getTbody();

  }

  /**
   *
   * @param mixed $values
   * @param string $class
   */
  public function addheader($values, $class = null){
    if (gettype($values) == "array") {
      foreach ($values as $value){
        $this->setThead($this->createHeader($value, $class));
      }
    }
    else{
      $this->setThead($this->createHeader($values, $class));
    }
  }
  /**
   *
   * @return \HTMLKit\HTMLTableHead
   */
  public function getThead() {
    return $this->thead;
  }

  /**
   *
   * @param \HTMLKit\HTMLTableHeader $thead
   */
  public function setThead(\HTMLKit\HTMLTableHeader $thead) {
    $this->thead[] = $thead;
  }


  public function addRow(\HTMLKit\HTMLTableRow $row){
    $tbody = $this->createTbody();
    $tbody->setRow($row);
    return $row;
  }

  public function addFooter(\HTMLKit\HTMLTableRow $row){
    $footer = new \HTMLKit\HTMLTableFooter();
    $footer->addElements($row);
    $this->setTfooter($footer);
  }

  /**
   *
   * @return \HTMLKit\HTMLTableBody
   */
  public function getTbody() {
    return $this->tbody;
  }

  /**
   *
   * @param \HTMLKit\HTMLTableBody $tbody
   */
  public function setTbody(\HTMLKit\HTMLTableBody $tbody) {
    $this->tbody = $tbody;
  }

  /**
   *
   * @return \HTMLKit\HTMLTableFooter
   */
  public function getTfooter() {
    return $this->tfooter;
  }

  /**
   *
   * @param \HTMLKit\HTMLTableFooter $tfooter
   */
  public function setTfooter(\HTMLKit\HTMLTableFooter $tfooter) {
    $this->tfooter = $tfooter;
  }

  /**
   * Método responsável por preencher conteúdo em um HTML.
   * @return string
   */
  protected function insertContent(){

    if(count($this->getThead()) > 0){
      $thead = new \HTMLKit\HTMLTableHead();
      foreach ($this->getThead() as $th){
        $thead->addElements($th);
      }
      $this->addElements($thead);
    }

    if(!is_null($this->getTbody())){
        $this->addElements($this->getTbody());

    }

    if(!is_null($this->getTfooter())){
      $this->addElements($this->getTfooter());
    }

    return parent::insertContent();

  }


}

?>