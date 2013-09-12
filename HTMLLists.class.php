<?php

namespace HTMLKit;

const ordered = "ol";
const unordered = "ul";

/**
 * Description of HTMLList
 *
 * @author thiago
 */
class HTMLLists extends \HTMLKit\HTMLElement{

  /**
   * Classe que representa o elemento HTML <ul></ul> ou <ol></ol>
   *
   * @param string $tag
   * @param string $class
   * @param string $id
   * @param string $name
   * @param string $comment
   * @param string $title
   * @return \HTMLKit\HTMLElement
   */
  public function __construct($tag = self::unordered, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    return parent::__construct($tag, $class, $id, $name, $comment, $title);
  }

  /**
   *
   * @param \HTMLKit\HTMLListItem $element
   */
  public function addElements(HTMLListItem $element) {
    parent::addElements($element);
  }

  /**
   *
   * @param \HTMLKit\HTMLListItem $listItem
   * @param type $class
   * @param type $id
   * @param type $name
   * @param type $comment
   * @param type $title
   * @return \HTMLKit\HTMLDiv
   */
  public function getDropdown() {
    $div = new \HTMLKit\HTMLDiv();
    $div->addElements($this);
    $div->setClass("dropdown");
    return $div;
  }

}

?>