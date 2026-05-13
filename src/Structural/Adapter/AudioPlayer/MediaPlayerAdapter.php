<?php

namespace App\Structural\Adapter\AudioPlayer;

class MediaPlayerAdapter implements MediaPlayer
{
    private $advancedMusicPlayer;

    public function __construct(string $audioType)
    {
        if ($audioType === 'vlc') {
            $this->advancedMusicPlayer = new VlcPlayer();
        } elseif ($audioType === 'mp4') {
            $this->advancedMusicPlayer = new Mp4Player();
        }
    }

    public function play(string $audioType, string $fileName): string
    {
        if ($audioType === 'vlc') {
            return $this->advancedMusicPlayer->playVlc($fileName);
        } elseif ($audioType === 'mp4') {
            return $this->advancedMusicPlayer->playMp4($fileName);
        }

        return "Invalid media type: {$audioType}";
    }
}
