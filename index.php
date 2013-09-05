<?php

  ini_set("display_errors", true);
  error_reporting(E_ALL);

  require_once './SplClassLoader.class.php';
  $loader = new SplClassLoader("HTMLKit", "/var/www");
  $loader->setFileExtension(".class.php");
  $loader->register();


  $header = new HTMLKit\HTMLHeading("h1", "3");
  echo $header;
  
  $elemento = new HTMLKit\HTMLElement("div");
  $elemento->setComment("comentario teste");
  $elemento->setName("teste");
  $elemento->setClass("class_teste");
  $elemento->setId("id_teste");

  $elemento->setValue("teste element");

  $div = new HTMLKit\HTMLDiv();
  $div->addElements($elemento);
  $div->setValue("valu");
  echo $div;

  $lbl = new HTMLKit\HTMLLabel("Label 1");
  $lbl->setClass("class_label_1");

  $input = new HTMLKit\HTMLInput("input_1");
  $input->setClass("class_input_1");
  $input->setDefault_value("teste");

  $div_structure = $input->getStructure($lbl);
  $div_structure->setClass("class_div_div_structure");
  echo $div_structure;

  echo new HTMLKit\HTMLButton("Btn 1");

  $list = new HTMLKit\HTMLLists(HTMLKit\unordered);
  $list->addListItem("1");
  $list->addListItem("2");

  echo $list;



?>