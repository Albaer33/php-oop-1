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
        return $this->title . ' directed by: ' . $this->director;
    }
}

$lotr = new Movie('Il Signore degli Anelli - Il Ritorno del Re', 'Peter Jackson');
$lotr->original_title = 'The Lord of the Rings - Return of the King';

$snatch = new Movie('Snatch - Lo Strappo', 	'Guy Ritchie');
$snatch->original_title = 'Snatch';

var_dump($lotr);
var_dump($snatch);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $lotr->title ?></h1>
    <span><?php echo $lotr->getTitleAndDirector() ?></span>

    <h1><?php echo $snatch->title ?></h1>
    <span><?php echo $snatch->getTitleAndDirector() ?></span>
</body>
</html>