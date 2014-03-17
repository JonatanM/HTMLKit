<?php

namespace HTMLKit;

/**
 * Classe responsável por criar estrutura HTML5 para conteúdos.
 *
 * Exemplo:
 * <code>
 *
 * </code>
 *
 * @author thiago
 */
class ContentPage extends \HTMLKit\PaginaHTML {

  private $header;
  private $footer;
  private $div;
  private $section;
  private $aside;
  private $nav;

  /**
   *
   * @param \HTMLKit\HTMLElement $element
   * @param \HTMLKit\HTMLHeader $header
   * @param \HTMLKit\HTMLFooter $footer
   * @param \HTMLKit\HTMLAside $aside
   */
  public function __construct(
          \HTMLKit\HTMLElement $element = null,
          \HTMLKit\HTMLHeader $header = null,
          \HTMLKit\HTMLFooter $footer = null,
          \HTMLKit\HTMLAside $aside = null,
          \HTMLKit\HTMLNav $nav = null
  ) {

    if(!is_null($element)){
      $section = new \HTMLKit\HTMLSection();
      $section->addElements($element);
      $this->setSection($section);
    }

    if(!is_null($header)){
      $this->setHeader($header);
      $this->setContent($this->getHeader());
    }

    $this->setContent($this->getSection());

    if(!is_null($aside)){
      $this->setAside($aside);
      $this->setContent($this->getAside());
    }

    if(!is_null($footer)){
      $this->setFooter($footer);
      $this->setContent($this->getFooter());
    }

    if(!is_null($nav)){
      $this->setNav($nav);
      $this->setContent($nav);
    }


    //$this->setContent($div);
    //echo $this->__toString();

  }

  /**
  *
  * @param \HTMLKit\HTMLHeader $header
  */
  public function setHeader(\HTMLKit\HTMLHeader $header){
    $this->header = $header;
  }

  /**
  *
  * @return \HTMLKit\HTMLHeader $header
  */
  public function getHeader(){
    return $this->header;
  }

  /**
  *
  * @param \HTMLKit\HTMLFooter $footer
  */
  public function setFooter(\HTMLKit\HTMLFooter $footer){
    $this->footer = $footer;
  }

  /**
  *
  * @return \HTMLKit\HTMLFooter $footer
  */
  public function getFooter(){
    return $this->footer;
  }

  /**
  *
  * @param \HTMLKit\HTMLDiv $div
  */
  public function setDiv(\HTMLKit\HTMLDiv $div){
    $this->div = $div;
  }

  /**
  *
  * @return \HTMLKit\HTMLDiv $div
  */
  public function getDiv(){
    return $this->div;
  }

   /**
   *
   * @param \HTMLKit\HTMLSection $section
   */
  public function setSection(\HTMLKit\HTMLSection $section){
    $this->section = $section;
  }
   /**
   *
   * @return \HTMLKit\HTMLSection $section
   */
  public function getSection(){
    return $this->section;
  }

   /**
   *
   * @param \HTMLKit\HTMLAside $aside
   */
  public function setAside(\HTMLKit\HTMLAside $aside){
    $this->aside = $aside;
  }


  /**
   *
   * @return \HTMLKit\HTMLAside $aside
   */
  public function getAside(){
    return $this->aside;
  }

   /**
   *
   * @param \HTMLKit\HTMLNav $nav
   */
  public function setNav(\HTMLKit\HTMLNav $nav){
    $this->nav = $nav;
  }

  /**
  *
  * @return \HTMLKit\HTMLNav $nav
  */
  public function getNav(){
    return $this->nav;
  }

  public function __destruct() {
      echo $this->__toString();
  }


}

?>