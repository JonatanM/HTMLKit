<?php

namespace HTMLKit;

/**
 *  Classe que representa o elemento HTML <span></span>
 *
 * @author thiago
 */
class HTMLLink extends \HTMLKit\HTMLElement{

  /**
   *
   * @param string $value
   * @param string $class
   * @param string $id
   * @param string $name
   * @param string $comment
   * @param string $title
   * @return \HTMLKit\HTMLElement
   */
  function __construct($value, $url, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    $this->setValue($value);
    $link = parent::__construct("a", $class, $id, $name, $comment, $title);
    $link->addAtributes("href", $url);
    return $link;
  }


}

?>