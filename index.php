<?php

  ini_set("display_errors", true);
  error_reporting(E_ALL);

  /**
   * Carrega Classe SplClassLoader PSR-0
   */
  require_once './SplClassLoader.class.php';

    /**
     * Carrega classes com namespace HTMLKit e extensão .class.php
     */
    $loader_html_kit = new SplClassLoader("HTMLKit", "/var/www/");
    $loader_html_kit->setFileExtension(".class.php");
    $loader_html_kit->register();

    /**
     * Carrega classes auxiliares sem namespace.
     */
    $loader_classes = new SplClassLoader();
    $loader_classes->setFileExtension(".class.php");
    $loader_classes->register();

    $loader_classes_simples = new SplClassLoader();
    $loader_classes_simples->setFileExtension(".php");
    $loader_classes_simples->register();

    $modelPages = new ModelPages();

    try{

      
    if(!isset($_REQUEST["p"])){
        $modelPages->redirect("?p=Telas/home");
    }
    
      $url = explode("/", $_REQUEST["p"]);
      $nome_classe = $url[0];
      if(isset($url[1]) && $url[1] != ""){
          $nome_metodo = $url[1];

          $rc = new ReflectionClass($nome_classe);
          $rc->getMethod($nome_metodo);

          $lista_metodos = $rc->getMethods();

          foreach ($lista_metodos as $metodo) {
              if ($metodo->getName() == $nome_metodo) {
                $array_full = array_merge($_REQUEST, $_FILES);
                $metodo->invoke($rc->newInstance(), $array_full);
                break;
              }
          }
      }

    }
    catch (ReflectionException $re){
      $modelPages->aviso($re->getMessage());
    }
    catch (Exception $e){
      $modelPages->perigo($e->getMessage());
    }


  /*
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

  $header = new HTMLKit\HTMLHeader();
  $header->addElements(new HTMLKit\HTMLHeading("Cabeçalho 2", 2));
  echo $header;
  */

?>