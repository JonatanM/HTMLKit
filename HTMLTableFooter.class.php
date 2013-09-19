<?php

namespace HTMLKit;

/**
 * Description of HTMLTableFooter
 *
 * @author thiago
 */
class HTMLTableFooter extends \HTMLKit\HTMLTable{

  public function __construct($class = null, $id = null, $name = null, $comment = null, $title = null) {
    $tfooter = parent::__construct($class, $id, $name, $comment, $title);
    $tfooter->setTag("tfooter");
    return $tfooter;
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