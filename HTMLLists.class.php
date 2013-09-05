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

  protected $list_itens = array();

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
   * @param mixed $value
   * @param mixed $index
   */
  public function addListItem($value){
      $this->list_itens[] = $value;
  }

  public function getListItens(){
    return $this->list_itens;
  }
  /**
  *
  * @return string
  */
  public function __toString() {
    $s = $this->openTag();
    $s .= $this->insertContent();
    $s .= $this->closeTag();
    return $s;
  }

  /**
  * Método responsável por preencher conteúdo em um HTML.
  * @return string
  */
 protected function insertContent(){

    $s = "";
    if(!is_null($this->getValue())){
      $s .= $this->getValue();
    }

    if(count($this->getListItens() > 0)){
      foreach ($this->getListItens() as $li) {
        $s .= "<li>" . $li . "</li>";

      }
    }
    return $s;

  }


}

?>