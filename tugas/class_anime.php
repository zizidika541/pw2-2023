<?php
    class Anime {
        protected $name;
        protected $genres;

        protected function __construct($name, $genres) {
            $this->name = $name;
            $this->genres = $genres;
        }

        protected function getInfo() {
            echo "Judul Anime: " . $this->name . "<br>";
            echo "Genre: " . $this->genres . "<br>";
        }
    }

    class Shounen extends Anime {
        public $aired;

        public function __construct($name, $genres, $aired) {
            parent::__construct($name, $genres);
            $this->aired = $aired;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Dirilis Pada: " . $this->aired . "<br>";
        }
    }

    class Seinen extends Anime {
        public $studios;

        public function __construct($name, $genres, $studios) {
            parent::__construct($name, $genres);
            $this->studios = $studios;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Di Garap oleh Studio: " . $this->studios . "<br>";
        }
    }

    class Shoujo extends Anime {
        public $aired;

        public function __construct($name, $genres, $aired) {
            parent::__construct($name, $genres);
            $this->aired = $aired;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Dirilis Pada: " . $this->aired . "<br>";
        }
    }

?>