<?php

namespace App\Structural\Adapter\AudioPlayer;

class VlcPlayer implements AdvancedMediaPlayer
{
    public function playVlc(string $fileName): string
    {
        return "Playing vlc file. Name: {$fileName}";
    }

    public function playMp4(string $fileName): string
    {
        return "";
    }
}
