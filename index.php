<?php

  ini_set("display_errors", true);
  error_reporting(E_ALL);

  /**
   * Carrega Classe SplClassLoader PSR-0
   */
  require_once './SplClassLoader.class.php';

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

?>