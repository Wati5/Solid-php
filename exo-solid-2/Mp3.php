<?php

require_once 'MusicExtension.php';

class Mp3 extends MusicExtension
{
    public function listen()
    {
        return 'Lecture du fichier Mp3 '. $this->filename;
    }
}
