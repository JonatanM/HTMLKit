<?php

namespace HTMLKit;

/**
 * Description of HTMLLabel
 *
 * @author thiago
 */
class HTMLLabel extends \HTMLKit\HTMLElement {

  protected $for;

  /**
   * Classe que representa o elemento HTML <label for=""></label>
   * 
   * @param String $value
   * @param String $class
   * @param String $id
   * @param String $name
   * @param String $comment
   * @param String $title
   * @return \HTMLKit\HTMLElement $element
   */
  function __construct($value, $for = null, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    $this->setValue($value);
    $this->setFor($for);
    return parent::__construct("label", $class, $id, $name, $comment, $title);
  }

  /**
   *
   * @return String
   */
  public function getFor() {
    return $this->for;
  }

  /**
   *
   * @param String $for
   */
  public function setFor($for) {
    $this->for = $for;
    if(!is_null($for)){
      $this->addAtributes("for", $this->getFor());
    }
  }


}

?>