<?php

namespace HTMLKit;

/**
 * Um elemento HTML é um componente individual HTML definido por tags de inicio e fim.
 * Um emelemto HTML pode ter vários atributos.
 *
 * @author thiago
 */
class HTMLElement {

  private $class = null;
  private $id = null;
  private $name = null;
  private $tag = null;
  private $comment = null;
  private $title = null;
  private $value = null;
  private $elements = array();
  private $atributes = array();

  /**
   *
   * @param String $tag
   * @param String $class
   * @param String $id
   * @param String $name
   * @param String $comment
   * @param String $title
   * @return \HTMLKit\HTMLElement
   */
  function __construct($tag, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    $this->class = $class;
    $this->id = $id;
    $this->name = $name;
    $this->tag = $tag;
    $this->comment = $comment;
    $this->title = $title;

    return $this;
  }

  /**
   *
   * @return type
   */
  public function getAtributes() {
    return $this->atributes;
  }

  public function addAtributes($atribute, $valor) {
    $this->atributes[$atribute] = $valor;
  }

    /**
   *
   * @return String
   */
  public function getValue() {
    return $this->value;
  }

  /**
   *
   * @param String $value
   */
  public function setValue($value) {
    $this->value = $value;
  }

  /**
   *
   * @param \HTMLKit\HTMLElement $element
   */
  public function addElements(HTMLElement $element){
    if(count($this->elements) == 0){
      $this->elements = array();
      $this->elements[] = $element;
    }
    else{
      $this->elements[] = $element;
    }
  }

  /**
   *
   * @return Array \HTMLKit\HTMLElement
   */
  public function getElements(){
    return $this->elements;
  }


  /**
   *
   * @return String
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   *
   * @param String $title
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   *
   * @return String
   */
  public function getComment() {
    return $this->comment;
  }

  /**
   *
   * @param String $comment
   */
  public function setComment($comment) {
    $this->comment = $comment;
  }

  /**
   *
   * @return String
   */
  public function getTag() {
    return $this->tag;
  }

  /**
   *
   * @param String $tag
   */
  public function setTag($tag) {
    $this->tag = $tag;
  }

  /**
   *
   * @return String
   */
  public function getClass() {
    return $this->class;
  }

  /**
   *
   * @param String $class
   */
  public function setClass($class) {
    if(is_null($this->getClass())){
      $this->class = $class;
    }
    else{
      $this->class .= " " . $class;
    }
  }

  /**
   *
   * @return String
   */
  public function getId() {
    return $this->id;
  }

  /**
   *
   * @param String $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   *
   * @return String
   */
  public function getName() {
    return $this->name;
  }

  /**
   *
   * @param String $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * Elemento html
   */
  public function toHTML() {
    echo $this->__toString();
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
   * Método responsável por iniciar uma tag HTML.
   * @return string
   */
  protected function openTag(){
    $s = "";

    if (!is_null($this->getComment())) {
      $s .= "<!-- ";
      $s .= $this->getComment();
      $s .= "\n  ====================================================================";
      $s .= " --!>";
      $s .= "\n";
    }

    $s .= "<" . $this->getTag();

    if (!is_null($this->getId())) {
      $s .= " id='" . $this->getId() . "'";
    }

    if (!is_null($this->getClass())) {
      $s .= " class='" . $this->getClass() . "'";
    }

    if (!is_null($this->getName())) {
      $s .= " name='" . $this->getName() . "'";
    }

    if (!is_null($this->getTitle())) {
      $s .= " title='" . $this->getTitle() . "'";
    }

    if(count($this->getAtributes()) > 0){
      foreach ($this->getAtributes() as $atributes => $value){
        $s .= " " . $atributes . "='" . $value . "'";
      }
    }
    $s .= ">";
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

    if(count($this->getElements() > 0)){
      foreach ($this->getElements() as $element) {
        $s .= $element;
      }
      $s .= "\n";
    }
    return $s;

  }

  /**
   * Método responsável por encerrar uma tag HTML.
   * @return String
   */
  protected function closeTag(){
    return "</" . $this->getTag() . ">";
  }

}

?>