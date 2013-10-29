<?php

namespace HTMLKit;

/**
 * Description of HTMLForm
 *
 * @author thiago
 */
class HTMLForm extends \HTMLKit\HTMLElement {

  private $action = null;
  private $method = null;
  private $enctype = null;

  /**
   *
   * @param string $action
   * @param string $method
   * @param string $class
   * @param string $id
   * @param string $name
   * @param string $comment
   * @param string $title
   * @return \HTMLKit\HTMLElement
   */
  function __construct($action = null, $method = null, $class = null, $id = null, $name = null, $comment = null, $title = null) {

    if(is_null($action)){
      $action ="#";
    }

    if(is_null($method)){
      $method = "GET";
    }

    $this->setAction($action);
    $this->setMethod($method);

    return parent::__construct("form", $class, $id, $name, $comment, $title);
  }

  /**
   *
   * @return String
   */
  public function getAction() {
    return $this->action;
  }

  /**
   *
   * @param String $action
   */
  public function setAction($action) {
    $this->action = $action;
    $this->addAtributes("action", $action);
  }

  /**
   *
   * @return String
   */
  public function getMethod() {
    return $this->method;
  }

  /**
   *
   * @param String $method
   */
  public function setMethod($method) {
    $this->method = $method;
    $this->addAtributes("method", $method);
  }

  /**
   *
   * @return String
   */
  public function getEnctype() {
    return $this->enctype;
  }

  /**
   *
   * @param String $enctype
   */
  public function setEnctype($enctype) {
    $this->enctype = $enctype;
    $this->addAtributes("enctype", $enctype);
  }



}

?>