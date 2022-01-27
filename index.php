<?php
class Movie {
    // ATTRIBUTES
    public $title;
    public $poster;
    public $original_title;
    public $director;
    public $language;
    public $vote;

    // METHODS
    public function __construct($_title, $_director) {
        $this->title = $_title;
        $this->director = $_director;
    }
    // restituisce titolo del film e da chi è stato diretto
    public function getTitleAndDirector() {
        return $this->title . 'directed by: ' . $this->director;
    }
}

$lotr = new Movie('Il Signore degli Anelli - Il Ritorno del Re', 'Peter Jackson');
$lotr->original_title = 'The Lord of the Rings - Return of the King';

$snatch = new Movie('Snatch - Lo Strappo', 	'Guy Ritchie');
$snatch->original_title = 'Snatch';

var_dump($lotr);
var_dump($snatch);
?>