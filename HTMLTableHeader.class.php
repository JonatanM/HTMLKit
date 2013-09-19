<?php

namespace HTMLKit;

/**
 * Description of HTMLTableHeader
 *
 * @author thiago
 */
class HTMLTableHeader extends \HTMLKit\HTMLTable{


  public function __construct($class = null, $id = null, $name = null, $comment = null, $title = null) {
    $thead = parent::__construct($class, $id, $name, $comment, $title);
    $thead->setTag("th");
    return $thead;
  }



}

?>