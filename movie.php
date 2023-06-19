<?php
class Movie {
    public $title;
    public $directorName;
    public $directorSurname;
    public $year;
    public array $genre;

    public function __construct($title, $directorName,$directorSurname, $year, $genre)
    {
        $this->title = $title;
        $this->directorName = $directorName;
        $this->directorSurname = $directorSurname;
        $this->year = $year;
        $this->genre = $genre;
    }
    
    public function getFullName()
    {
        return $this->directorName . ' ' . $this->directorSurname;
    }

}

class Genre {
    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }
}