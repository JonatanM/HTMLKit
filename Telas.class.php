<?php

class Telas extends ContentPage{

  public function __construct() {

    $header = new HTMLKit\HTMLHeader(new HTMLKit\HTMLHeading("Cabeçalho"));
    $footer = new HTMLKit\HTMLFooter(new HTMLKit\HTMLStrong("Rodapé"));
    $element = new HTMLKit\HTMLInput("nome");
    $element = $element->getStructure(new \HTMLKit\HTMLLabel("Nome:"));

    parent::__construct($element, $header, $footer, null, null);

  }

  public function teste(){

  }



}

?>