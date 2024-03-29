<?php

class Start {
    private $name;
    private $level;
    private $score;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        if (strlen($name) > 10) { //Verificando se o nome possui mais de 10 carateres
            $newName=[];
            for ($i=0; $i < 10; $i++) { 
                $newName[i] = $name[i];
            }
            $name = $newName;
        } else if (strlen($name) == 0) {
            $name = '-';
        }
        $this->name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function getLevel() {
        return intval($this->level);
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    public function getScore() {
        return intval($this->score);
    }

    public function setScore($score) {
        $this->score = $score;
    }

}