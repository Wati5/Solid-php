<?php

class MusicReader
{
    private $musicExtension;

    public function __construct(MusicExtension $musicExtension)
    {
        $this->musicExtension = $musicExtension;
    }

    public function listen()
    {
        return $this->musicExtension->listen();
    }
}