<?php

namespace App\Structural\Adapter\AudioPlayer;

interface AdvancedMediaPlayer
{
    public function playVlc(string $fileName): string;
    public function playMp4(string $fileName): string;
}
