<?php

interface VideoInterface {
        public function getName();
        public function getSource();
        public function getHTML();
}

class Video implements VideoInterface {
    private $name;
    private $source;
    private $html;

    function __construct($name, $source, $html) {
        $this->name = $name;
        $this->source = $source;
        $this->html = $html;
      }

    function getName() {
       return $this->name;
    }

    function getSource() {
       return $this->source;
    }

    function getHTML() {
       return $this->html;
    }
}

$video = new Video('Video Title', 'https://example.com/video.mp4', '<iframe src="https://example.com/embed"></iframe>');

    echo 'Video Name: ' . $video->getName();
    echo 'Video Source: ' . $video->getSource();
    echo 'Embed HTML: ' . $video->getHTML();
