<?php

/**
 *
 * @author thiago
 */
interface iContentPage {

  public function setCss();
  public function getCss();
  public function setJavascript();
  public function getJavascript();

  /**
  *
  * @param \HTMLKit\HTMLHeader $header
  */
  public function setHeader(\HTMLKit\HTMLHeader $header);

  /**
  *
  * @return \HTMLKit\HTMLHeader $header
  */
  public function getHeader();

  /**
  *
  * @param \HTMLKit\HTMLFooter $footer
  */
  public function setFooter(\HTMLKit\HTMLFooter $footer);

  /**
  *
  * @return \HTMLKit\HTMLFooter $footer
  */
  public function getFooter();

  /**
  *
  * @param \HTMLKit\HTMLDiv $div
  */
  public function setDiv(\HTMLKit\HTMLDiv $div);

  /**
  *
  * @return \HTMLKit\HTMLDiv $div
  */
  public function getDiv();

   /**
   *
   * @param \HTMLKit\HTMLSection $section
   */
  public function setSection(\HTMLKit\HTMLSection $section);
   /**
   *
   * @return \HTMLKit\HTMLSection $section
   */
  public function getSection();

   /**
   *
   * @param \HTMLKit\HTMLAside $aside
   */
  public function setAside(\HTMLKit\HTMLAside $aside);


  /**
   *
   * @return \HTMLKit\HTMLAside $aside
   */
  public function getAside();

   /**
   *
   * @param \HTMLKit\HTMLNav $nav
   */
  public function setNav(\HTMLKit\HTMLNav $nav);

  /**
  *
  * @return \HTMLKit\HTMLNav $nav
  */
  public function getNav();


}

?>