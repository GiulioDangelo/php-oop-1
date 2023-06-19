<?php
class Movie {
    public $title;
    public $directorName;
    public $directorSurname;
    public $year;
    public array $genre;

     public function __construct($title, $directorName,$directorSurname, $year, /*Genre $genre*/ array $genre)
    {
        $this->title = $title;
        $this->directorName = $directorName;
        $this->directorSurname = $directorSurname;
        $this->year = $year;
        $this->$genre = [
            new Genre('horror'),
            new Genre('comedy'),
            new Genre('action'),
            new Genre('drama')
        ];
    }
    
    public function getFullName()
    {
        return $this->directorName . ' ' . $this->directorSurname;
    }

}

    // class Genre {
    //     public array $type;
    
    //     public function __construct($type)
    //     {
    //         $this->type = $type;
    //     }
    // }


    