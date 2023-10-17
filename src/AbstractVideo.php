<?php

abstract class AbstractVideo {
   private $name;
   private $source;

   function __construct($name, $source) {
        $this->name = $name;
        $this->source = $source;
   }

    function getName():string {
       return $this->name;
    }

    function getSource():string {
       return $this->source;
    }
}