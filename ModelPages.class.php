<?php


/**
 * Description of ModelPages
 *
 * @author thiago
 */
class ModelPages extends PaginaHTML{

  /**
   *
   * @param string $mensagem
   * @return \HTMLKit\HTMLDiv
   */
  public function perigo($mensagem){
    $div = new HTMLKit\HTMLDiv();
    $div->setClass("alert alert-danger");
    $strong = new HTMLKit\HTMLStrong("Falha geral: ");
    $spam = new HTMLKit\HTMLSpan($mensagem);
    $div->addElements($strong);
    $div->addElements($spam);
    $this->setContent($div);
  }

  /**
   *
   * @param string $mensagem
   * @return \HTMLKit\HTMLDiv
   */
  public function aviso($mensagem){
    $div = new HTMLKit\HTMLDiv();
    $div->setClass("alert alert-warning");
    $strong = new HTMLKit\HTMLStrong("Alerta: ");
    $spam = new HTMLKit\HTMLSpan($mensagem);
    $div->addElements($strong);
    $div->addElements($spam);
    $this->setContent($div);
  }

  /**
   *
   * @param string $mensagem
   * @return \HTMLKit\HTMLDiv
   */
  public function info($mensagem){
    $div = new HTMLKit\HTMLDiv();
    $div->setClass("alert alert-info");
    $strong = new HTMLKit\HTMLStrong("Info: ");
    $spam = new HTMLKit\HTMLSpan($mensagem);
    $div->addElements($strong);
    $div->addElements($spam);
    $this->setContent($div);
  }

  /**
   *
   * @param string $mensagem
   * @return \HTMLKit\HTMLDiv
   */
  public function sucesso($mensagem){
    $div = new HTMLKit\HTMLDiv();
    $div->setClass("alert alert-success");
    $strong = new HTMLKit\HTMLStrong("Sucesso: ");
    $spam = new HTMLKit\HTMLSpan($mensagem);
    $div->addElements($strong);
    $div->addElements($spam);
    $this->setContent($div);
  }

  public function redirect($url){
    header('Location: ' . $url);
  }


}

?>