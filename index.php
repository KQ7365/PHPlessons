<?php

class Article {

    private $published = false;
    public $title;
    public $content;

    public function __construct($title, $content) {

        $this->title = $title;
        $this->content = $content;
    }
            //setter
    public function publish() {
        $this->published = true;
    }
        //getter
    public function isPublished() {
       return $this->published;
    }
  
}

$firstTitle = new Article("Title 1", "Title 1 content");
$firstTitle->publish();
$secondTitle = new Article("Title 2", "Title 2 contents");

var_dump($secondTitle);
var_dump($firstTitle);
