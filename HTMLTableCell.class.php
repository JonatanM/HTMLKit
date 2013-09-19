<?php

namespace HTMLKit;

/**
 * Description of HTMLTableCell
 *
 * @author thiago
 */
class HTMLTableCell extends \HTMLKit\HTMLTable{

  private $cells = array();
  private $colspan = null;

  public function __construct($value = null, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    $td = parent::__construct($class, $id, $name, $comment, $title);
    if(!is_null($value)){
      $td->setValue($value);
    }
    $td->setTag("td");
    return $td;
  }

  public function getColspan() {
    return $this->colspan;
  }

  public function setColspan($colspan) {
    $this->colspan = $colspan;
    parent::addAtributes("colspan", $colspan);
  }



}

?>
