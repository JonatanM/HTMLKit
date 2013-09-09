<?php

class Telas extends ContentPage{

  public function __construct() {
    $this->setCss("terceiros/bootstrap-3.0.0/css/bootstrap.min.css");
    $this->setCss("terceiros/bootstrap-3.0.0/css/bootstrap-theme.min.css");
    $this->setJavascript("terceiros/jQuery-v1.9.1.min.js");
    $this->setJavascript("terceiros/bootstrap-3.0.0/js/bootstrap.min.js");    
  }

  public function home(){
    $header = new HTMLKit\HTMLHeader(new HTMLKit\HTMLHeading("PHP - HTMLKit"));
    $header->setClass("page-header");
    $footer = new HTMLKit\HTMLFooter(new HTMLKit\HTMLParagraph("Desenvolvido por: Thiago Thomaz"));
    $div_sector = new HTMLKit\HTMLDiv();
    $div_sector->setClass("row");
    
    $value_p = "Uma das grandes características das linguagens de programação "
                . "voltadas a web é a grande flexibilidade de se trabalhar "
                . "tanto com códigos HTML de uma determinada página quanto "
                . "código de programação, ambas embutidas em um mesmo arquivo "
                . "com a necessidade de dinamização do conteúdo da página.";
    $p1 = new HTMLKit\HTMLParagraph($value_p);
    
    $value_p = "Aos poucos, chegou-se a um ponto onde todos os arquivos de um "
            . "site possuíam HTML intercalados com códigos de programação. "
            . "Com o simpático e famoso apelido 'Código Spaghetti', "
            . "devido a mistura caótica e sem padrão preestabelecido "
            . "dos seus componentes, dificultando muito a manutenção.";
    
    $p2 = new HTMLKit\HTMLParagraph($value_p);
    $value_p = "Para resolver esse problema e facilitar a rotina de manutenção "
            . "desses arquivos surgiram os 'Templates Engines'."
            . "Eles partem de um novo conceito de construção desses arquivos, "
            . "pois propõem uma separação total do HTML e a Programação.";    
    $p3 = new HTMLKit\HTMLParagraph($value_p);
    
    $value_p = "Isso gerou um outro 'problema' pois equipes que não tem um "
            . "profissional front-end (o cara que entende dos padrões e "
            . "estruturas HTML e os Templates Engines), acabariam fazendo um "
            . "código HTML mal estruturado e possivelmente usando o "
            . "'Código Spaghetti', e para suprir essa necessidade surgiu o "
            . "PHP HTMLKit.";
    $p4 = new HTMLKit\HTMLParagraph($value_p);

    $value_p = "Seu objetivo é que programador que não conhece HTML e um "
            . "Templates Engine possa gerar códigos HTML sem escrever HTML.";
    $p5 = new HTMLKit\HTMLParagraph($value_p);
    
    $div_left = new HTMLKit\HTMLDiv();
    $div_left->setClass("col-md-3");
    
    $div_middle = new HTMLKit\HTMLDiv();
    $div_middle->setClass("col-md-9");
    $div_middle->addElements($p1);
    $div_middle->addElements($p2);
    $div_middle->addElements($p3);
    $div_middle->addElements($p4);
    $div_middle->addElements($p5);
    
    $link = new HTMLKit\HTMLLink("Vaja exemplos.", "?p=Telas/exemplos");
    
    $div_middle->addElements($link);
    
    $div_sector->addElements($div_left);
    $div_sector->addElements($div_middle);
    
    $this->setContent($header);
    $this->setContent($div_sector);
    //parent::__construct($div_sector, $header, $footer, null, null);
  }
  
  public function exemplos(){
      $this->setContent(new HTMLKit\HTMLHeading("Exemplos", 1, "page-header"));
      $p1_descricao_geral = "
        Em regra geral para criar uma elemento HTML com a HTMLKit você deve 
        instanciar o objeto que representa esse elemento. Exemplo:   
        ";
      $p = new HTMLKit\HTMLParagraph($p1_descricao_geral);
      $this->setContent($p);
      
      $exemplo_geral = new HTMLKit\HTMLParagraph("&#36;elemento = new HTMLKit\HTMLnome_do_elemento();");
      $this->setContent($exemplo_geral);
      
      $exemplo_atributos = new HTMLKit\HTMLParagraph("O elemento HTML tem atributos como Class, Id, Name.");
      $this->setContent($exemplo_atributos);
      
      $exemplo_atributos = new HTMLKit\HTMLParagraph("Para atribuilos basta usar o setNome_Atributo. Exemplo: ");
      $this->setContent($exemplo_atributos);
      
      $exemplo_atributos = new HTMLKit\HTMLParagraph("&#36;elemento->setClass('classe_exemplo_1')");
      $this->setContent($exemplo_atributos);
      
      $exemplo_atributos = new HTMLKit\HTMLParagraph("&#36;elemento->setId('id_exemplo_1')");
      $this->setContent($exemplo_atributos);
      
      $exemplo_incluir_documento = new HTMLKit\HTMLParagraph("E para incluir no documento usa o comando &#36;this->setContent(&#36;elemento);");
      $this->setContent($exemplo_incluir_documento);
      
      $this->exemplo_div();
      
  }
  
  private function exemplo_div(){
      $this->setContent(new HTMLKit\HTMLHeading("Adicionando Div", 4));
      $p = new HTMLKit\HTMLParagraph("Para criar uma div basta:");
      $this->setContent($p);
      $exemplo = "&#36;div = new HTMLKit\HTMLDiv();";
      $p_div = new HTMLKit\HTMLParagraph($exemplo);
      $this->setContent($p_div);
      $exemplo = "&#36;this->setContent(&#36;div);";
      $p_div = new HTMLKit\HTMLParagraph($exemplo);
      $this->setContent($p_div);
      $p_descricao = new HTMLKit\HTMLParagraph("O Retorno é: &#60;div&#62;&#60;/div&#62;");
      $this->setContent($p_descricao);
      
  }



}

?>