<?php

interface VideoInterface {
        public function getName();
        public function getSource();
        public function getHTML();
}

abstract class AbstractVideo {
   private $name;
   private $source;

   function __construct($name, $source) {
        $this->name = $name;
        $this->source = $source;
   }

    function getName() {
       return $this->name;
    }

    function getSource() {
       return $this->source;
    }
}




class Youtube extends AbstractVideo implements VideoInterface {
   private $html;

   function __construct($name, $source, $html) {
      parent::__construct($name, $source);
      $this->html = $html;
    }

   function getHTML() {
      return '<iframe src = "' . $this->html . '"></iframe>';
   }
}