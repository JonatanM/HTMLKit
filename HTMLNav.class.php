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
 *    <p>Hello World</p>
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
   * Método responsavel por montar uma lista que representa DropDown.
   * Exemplo:
   *
   * <code>
   * 
   * $opc_principal = new HTMLKit\HTMLLists(HTMLKit\unordered, "nav nav-pills nav-stacked");
   * $opc_principal->addElements(new HTMLKit\HTMLListItem(new HTMLKit\HTMLLink("Opção 1", "#")));
   * $opc_principal->addElements(new HTMLKit\HTMLListItem(new HTMLKit\HTMLLink("Opção 2", "#")));
   * $opc_principal->addElements(new HTMLKit\HTMLListItem(new HTMLKit\HTMLLink("Opção 3", "#")));
   *
   * $dropdown = new HTMLKit\HTMLLists(\HTMLKit\unordered);
   * $dropdown->addElements(new HTMLKit\HTMLListItem(new HTMLKit\HTMLLink("Dropdown 1", "#")));
   * $dropdown->addElements(new HTMLKit\HTMLListItem(new HTMLKit\HTMLLink("Dropdown 2", "#")));
   * $dropdown->addElements(new HTMLKit\HTMLListItem(new HTMLKit\HTMLLink("Dropdown 3", "#")));
   * $dropdown->getDropdown();
   *
   * $nav = new HTMLKit\HTMLNav($opc_principal);
   * $nav_dropdown = $nav->dropdownNav($dropdown);
   * $opc_principal->addElements($nav_dropdown);
   * $this->setContent($nav);
   *
   *
   *<!-- O exemplo acima irá resultar: -->
   *
   * <nav>
   *    <ul class="nav nav-pills nav-stacked"><li><a href="#">Opção 1</a>
   *      </li>
   *        <li>
   *          <a href="#">Opção 2</a>
   *        </li>
   *        <li>
   *          <a href="#">Opção 3</a>
   *        </li>
   *        <li class="dropdown">
   *          <a href="#" data-toggle="dropdown">
   *            Drop <span class="caret"></span>
   *          </a>
   *          <ul class="dropdown-menu">
   *            <li>
   *              <a href="#">Dropdown 1</a>
   *            </li>
   *            <li>
   *              <a href="#">Dropdown 2</a>
   *            </li>
   *            <li>
   *              <a href="#">Dropdown 3</a>
   *            </li>
   *          </ul>
   *      </li>
   *    </ul>
   * </nav>
   *
   *
   * </code>
   *
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