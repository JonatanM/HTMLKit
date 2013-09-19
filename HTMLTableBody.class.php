<?php

namespace HTMLKit;

/**
 * Description of HTMLTableBody
 *
 * @author thiago
 */
class HTMLTableBody extends \HTMLKit\HTMLTable{

  public function __construct($class = null, $id = null, $name = null, $comment = null, $title = null) {

    $tbody = parent::__construct($class, $id, $name, $comment, $title);
    $tbody->setTag("tbody");
    $tbody->setClass($class);
    return $tbody;
  }

  /**
   *
   * @param \HTMLKit\HTMLTableRow $row
   */
  public function setRow(\HTMLKit\HTMLTableRow $row) {
    $this->addElements($row);
  }

  /**
   *
   * @param \HTMLKit\HTMLTableRow $row
   */
  public function addElements(\HTMLKit\HTMLTableRow $row) {
    parent::addElements($row);
  }




}

?>
