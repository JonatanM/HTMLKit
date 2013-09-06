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
  function __construct(HTMLElement $element = null, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    throw new Exception("================   Implementar    =====================");

    if(!is_null($element)){
      $this->addElements($element);
    }
    return parent::__construct("nav", $class, $id, $name, $comment, $title);
  }


}

?>