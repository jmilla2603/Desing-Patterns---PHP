<?php

namespace App\Structural\Adapter\AudioPlayer;

class Mp4Player implements AdvancedMediaPlayer
{
    public function playVlc(string $fileName): string
    {
        return "";
    }

    public function playMp4(string $fileName): string
    {
        return "Playing mp4 file. Name: {$fileName}";
    }
}
