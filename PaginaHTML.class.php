<?php

/**
 * Classe responsável por condigurar estrutura básica padrão de um documento HTML.
 *
 * Exemplo:
 * <code>
 *
 * <!DOCTYPE HTML>
 * <HTML lang='pt-br'>
 * <head>
 *         <meta charset='UTF-8'>
 *         <title>HTMLKit</title>
 *         <link rel='stylesheet' type='text/css' href='css1.css'>
 *         <link rel='stylesheet' type='text/css' href='css2.css'>
 *         <script src='js1.js'></script>
 *         <script src='js2.js'></script>
 *
 * </head>
 *
 * <body>
 *
 * </body>
 * </html>
 * </code>
 *
 * @author thiago
 */
class PaginaHTML {

  private $doctype = null;
  private $charset = "UTF-8";
  private $meta = array();
  private $title = "";
  private $lang = "pt-br";

  private $css = array();
  private $javascript = array();

  private $content = array();

  public function __construct() {
    $this->setTitle("HTMLKit");
  }

  /**
   * Métodos responsável por criar o cabeçaho da página.
   * Exemplo:
   * <code>
   * <!DOCTYPE HTML>
   * <HTML lang='pt-br'>
   * <head>
   *         <meta charset='UTF-8'>
   *         <title>HTMLKit</title>
   *         <link rel='stylesheet' type='text/css' href='css1.css'>
   *         <link rel='stylesheet' type='text/css' href='css2.css'>
   *         <script src='js1.js'></script>
   *         <script src='js2.js'></script>
   * </head>
   *
   * </code>
   *
   * @return string
   */
  private function createHead(){

    $s = "<!DOCTYPE HTML>";
    $s .= "\n";
    $s .= "<HTML lang='" . $this->getLang() . "'>";
    $s .= "\n";
    $s .= "<head>";
    $s .= "\n";
    $s .= "\t<meta charset='" . $this->getCharset() . "'>";
    $s .= "\n";
    foreach ($this->getMeta() as $i => $meta){
      $s .= "\t<meta name='" . $i . "' content='" . $meta . "' />";
      $s .= "\n";
    }
    $s .= "\t<title>" . $this->getTitle() . "</title>";
    $s .= "\n";
    foreach ($this->getCss() as $css){
      $s .= "\t<link rel='stylesheet' type='text/css' href='" . $css . "'>";
      $s .= "\n";
    }

    foreach ($this->getJavascript() as $js){
      $s .= "\t<script src='" . $js . "'></script>";
      $s .= "\n";
    }

    $s .= "\n";
    $s .= "</head>";
    $s .= "\n";
    return $s;
  }

  public function getContent() {
    return $this->content;
  }

  /**
   * Método insere conteúdo dentro do corpo do documento HTML.
   * Exemplo:
   * <code>
   * <body>
   *  Conteúdo.
   * </body>
   *
   * </code>
   *
   * @param string $content
   */
  public function setContent($content) {
    $this->content[] = $content;
  }

  public function getDoctype() {
    return $this->doctype;
  }

  public function setDoctype($doctype) {
    $this->doctype = $doctype;
  }

  public function getCharset() {
    return $this->charset;
  }

  public function setCharset($charset) {
    $this->charset = $charset;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title) {
    $this->title = $title;
  }

  public function getLang() {
    return $this->lang;
  }

  public function setLang($lang) {
    $this->lang = $lang;
  }

  public function getCss() {
    return $this->css;
  }

  public function setCss($css) {
    $this->css[] = $css;
  }

  public function getJavascript() {
    return $this->javascript;
  }

  public function setJavascript($javascript) {
    $this->javascript[] = $javascript;
  }

  public function getMeta() {
    return $this->meta;
  }

  public function setMeta($name, $content) {
    $this->meta[$name] = $content;
  }

  public function __toString() {

    $s = $this->createHead();

    $s .= "\n";
    $s .= "<body>";
    $s .= "\n";
    $s .= "\n";
    $div = new HTMLKit\HTMLDiv();
    $div->setClass("container");
    foreach ($this->getContent() as $content){
        $div->addElements($content);
    }
    $s .= $div;
    //$s .= new HTMLKit\HTMLDiv($this->getContent(), "container");
    //$s .= $this->getContent();
    $s .= "\n";
    $s .= "\n";
    $s .= "</body>";
    $s .= "\n";
    $s .= "</html>";

    return $s;
  }

  public function __destruct() {
    //$this->__toString();
    //echo $this->__toString();
  }

}

?>