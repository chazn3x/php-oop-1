<?php
class Movie {
    public $title;
    public $language;
    public $director;
    public $cast;
    public $poster;
    public $description;
    public $releaseDate;
    public $country;
    public $vote;
    public $released;

    public function __construct($_title, $_language, $_director, $_cast, $_poster, $_description, $_releaseDate, $_country, $_vote)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->director = $_director;
        $this->cast = $_cast;
        $this->poster = $_poster;
        $this->description = $_description;
        $this->releaseDate = $_releaseDate;
        $this->country = $_country;
        $this->vote = $_vote;
    }

    public function isReleased() {
        return $this->releaseDate <= date('Y-m-d');
    }
}