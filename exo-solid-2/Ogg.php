<?php

require_once 'MusicExtension.php';

class Ogg extends MusicExtension
{
    public function listen()
    {
        return 'Lecture du fichier Ogg '. $this->filename;
    }
}
