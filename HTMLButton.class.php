<?php

namespace HTMLKit;
/**
 *
 * Classe que representa o elemento HTML <button></button>
 * Description of HTMLButton
 *
 * @author thiago
 */
class HTMLButton extends \HTMLKit\HTMLElement {

  /**
   *
   * @param String $tag
   * @param String $class
   * @param String $id
   * @param String $name
   * @param String $comment
   * @param String $title
   * @return \HTMLKit\HTMLElement
   */
  function __construct($title, $class = null, $id = null, $name = null, $comment = null) {
    $this->setValue($title);
    $this->addAtributes("type", "button");
    return parent::__construct("button", $class, $id, $name, $comment, $title);
  }



}

?>