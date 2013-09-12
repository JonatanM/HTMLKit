<?php

namespace HTMLKit;

/**
 * Classe que representa o elemento HTML <li></li>
 *
 * Exemplo:
 * <code>
 *  $li = new HTMLKit\HTMLListItem(new HTMLKit\HTMLLink("Exemplo", "#"));
 *  $ul = new HTMLKit\HTMLLists(HTMLKit\unordered, "nav nav-pills nav-stacked");
 *  $ul->addElements($li);
 *  $this->setContent($ul);
 *   <!-- O exemplo acima irá resultar: -->
 *
 * <ul>
 *  <li>
 *    <a href="#">Exemplo</a>
 *  </li>
 * </ul>
 *
 * </code>
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
