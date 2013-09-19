<?php

namespace HTMLKit;

/**
 * Description of HTMLTableRow
 *
 * @author thiago
 */
class HTMLTableRow extends \HTMLKit\HTMLTable{

  private $cells = array();

  public function __construct($class = null, $id = null, $name = null, $comment = null, $title = null) {
    $thead = parent::__construct($class, $id, $name, $comment, $title);
    $thead->setTag("tr");
    return $thead;
  }

  /**
   *
   * @return \HTMLKit\HTMLTableCell $cells
   */
  public function getCells() {
    return $this->cells;
  }

  /**
   *
   * @param \HTMLKit\HTMLTableCell $cells
   */
  public function addCell(\HTMLKit\HTMLTableCell $cells) {
    $this->cells[] = $cells;
  }

  public function setCell($value) {
    $cell = new \HTMLKit\HTMLTableCell();
    $cell->setValue($value);
    $this->cells[] = $cell;
  }

    /**
   * Método responsável por preencher conteúdo em um HTML.
   * @return string
   */
  protected function insertContent(){

    $s = "";
    if(!is_null($this->getValue())){
      $s .= $this->getValue();
    }

    if(count($this->getCells() > 0)){
      foreach ($this->getCells() as $element) {
        $s .= $element;
      }
    }
    return $s;

  }



}

?>
