<?php

namespace HTMLKit;


/**
 * Description of HTMLList
 *
 * @author thiago
 */
class HTMLListItem extends \HTMLKit\HTMLElement{


  /**
   * Classe que representa o elemento HTML <li></li>
   *
   * @param string $tag
   * @param string $class
   * @param string $id
   * @param string $name
   * @param string $comment
   * @param string $title
   * @return \HTMLKit\HTMLElement
   */
  public function __construct(HTMLElement $element = null, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    if(!is_null($element)){
      $this->addElements($element);
    }
    return parent::__construct("li", $class, $id, $name, $comment, $title);
  }



}

?>
