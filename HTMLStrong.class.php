<?php

namespace HTMLKit;

/**
 * Classe que representa o elemento HTML <strong></strong>
 *
 * @author thiago
 */
class HTMLStrong extends \HTMLKit\HTMLElement{

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
  function __construct($value, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    $this->setValue($value);
    return parent::__construct("strong", $class, $id, $name, $comment, $title);
  }

}

?>