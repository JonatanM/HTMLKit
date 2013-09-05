<?php

namespace HTMLKit;

/**
 * Classe que representa o elemento HTML <input></input>
 *
 * @author thiago
 */
class HTMLInput extends \HTMLKit\HTMLElement {

  protected $default_value = null;

  /**
   *
   * @param String $default_value
   * @param String $class
   * @param String $id
   * @param String $name
   * @param String $comment
   * @param String $title
   * @return \HTMLKit\HTMLElement $element
   */
  public function __construct($name, $default_value = null, $class = null, $id = null, $comment = null, $title = null) {
    if(!is_null($default_value)){
      $this->setDefault_value($default_value);
    }
    return parent::__construct("input", $class, $id, $name, $comment, $title);
  }

  /**
   *
   * @return String
   */
  public function getDefault_value() {
    return $this->default_value;
  }

  /**
   * Preenche um valor default em elemento HTML Input.
   * @param String $default_value
   */
  public function setDefault_value($default_value) {
    $this->default_value = $default_value;
    $this->addAtributes("value", $default_value);
  }


  /**
   * Método responsável por montar uma estrutura de input com label.
   *
 * Exemplo:
 * <code>
 * $lbl = new HTMLKit\HTMLLabel("Label 1");
 * $lbl->setClass("class_label_1");
 * $input = new HTMLKit\HTMLInput("input_1");
 * $input->setClass("class_input_1");
 * $div_structure = $input->getStructure($lbl);
 * $div_structure->setClass("class_div_div_structure");
 * echo $div_structure;
 *
 * <!-- O exemplo acima irá resultar: -->
 *
 * <div class="class_div_div_structure">
 * <label class="class_label_1" for="input_1">Label 1
 * </label>
 * <input id="input_1" class="class_input_1" name="input_1">
 * </div>
 *
 *
 * </code>
   *
   *
   * @param \HTMLKit\HTMLLabel $label
   * @return \HTMLKit\HTMLDiv
   */
  public function getStructure(HTMLLabel $label){
    $div = new \HTMLKit\HTMLDiv();

    if(is_null($this->getId())){
      $label->setFor($this->getName());
      $this->setId($this->getName());
    }

    $div->addElements($label);
    $div->addElements($this);
    return $div;
  }

}

?>