<?php

include 'AbstractVideo.php';

class Vimeo extends AbstractVideo implements VideoInterface {
   private $html;

   function __construct($name, $source, $html) {
      parent::__construct($name, $source);
      $this->html = $html;
    }

   function getHTML():string {
      return '<iframe src="' . $this->html . '" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
   }
}