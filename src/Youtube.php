<?php 

include 'AbstractVideo.php';

class Youtube extends AbstractVideo implements VideoInterface {
   private $html;

   function __construct($name, $source, $html) {
      parent::__construct($name, $source);
      $this->html = $html;
    }

   function getHTML():string {
      return '<iframe src = "' . $this->html . '"></iframe>';
   }
}