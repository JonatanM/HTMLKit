<?php

namespace HTMLKit;
/**
 * Description of Heading
 *
 * @author thiago
 */
class HTMLHeading extends \HTMLKit\HTMLElement{

  /**
   * Classe que representa o elemento HTML <h1></h1> até <h6></h6>
   * @param string $value
   * @param string $size
   * @param string $class
   * @param string $id
   * @param string $comment
   * @param string $title
   * @return \HTMLKit\Heading
   */
  function __construct($value, $size = 1, $class = null, $id = null, $comment = null, $title = null) {
    $this->setValue($value);
    $tag = "h".$size;
    parent::__construct($tag, $class, $id, null, $comment, $title);
    return $this;
  }
}

?>