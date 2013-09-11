<?php

namespace HTMLKit;

/**
 * Classe que representa o elemento HTML <nav></nav>
 *
 * Exemplo:
 * <code>
 *   $div = new \HTMLKit\HTMLDiv();
 *   $div->addElement(new HTMLParagraph("Hello World");
 *   $div->toHTML();
 *
 *   <!-- O exemplo acima irá resultar: -->
 *   <nav>
 *     <ul>
 *      <li>Opção 1</li>
 *      <li>Opção 2</li>
 *      <li>Opção 3</li>
 *     </ul>
 *   </nav>
 *
 * </code>
 *
 * @author thiago
 */
class HTMLNav extends \HTMLKit\HTMLElement {

  /**
   *
   * @param \HTMLKit\HTMLElement $element
   * @param String $class
   * @param String $id
   * @param String $name
   * @param String $comment
   * @param String $title
   * @return \HTMLKit\HTMLElement $element
   */
  public function __construct(HTMLLists $lists = null, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    $nav = parent::__construct("nav", $class, $id, $name, $comment, $title);
    if(!is_null($lists)){
      $nav->addElements($lists);
    }
    return $nav;
  }

  /**
   *
   * @param \HTMLKit\HTMLListItem $listItem
   * @param type $value
   * @param type $class
   * @param type $id
   * @param type $name
   * @param type $comment
   * @param type $title
   * @return \HTMLKit\HTMLLink
   */
  public function dropdownNav(HTMLLists $lists) {
    $drop = $lists->getDropdown();
    $drop_elements = $drop->getElements();
    $ul = $drop_elements[0];
    $ul->setClass("dropdown-menu");
    $span = new \HTMLKit\HTMLSpan("");
    $span->setClass("caret");
    $link = new \HTMLKit\HTMLLink("Drop ".$span, "#");

    $link->addAtributes("data-toggle", "dropdown");

    $li = new \HTMLKit\HTMLListItem();
    $li->addElements($link);
    $li->addElements($ul);
    $li->setClass("dropdown");

    return $li;
  }

}

?>