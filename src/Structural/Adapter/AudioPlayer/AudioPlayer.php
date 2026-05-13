<?php

namespace App\Structural\Adapter\AudioPlayer;

class AudioPlayer implements MediaPlayer
{
    private $mediaAdapter;

    public function play(string $audioType, string $fileName): string
    {
        if ($audioType === 'mp3') {
            return "Playing mp3 file. Name: {$fileName}";
        } elseif (in_array($audioType, ['vlc', 'mp4'])) {
            $this->mediaAdapter = new MediaPlayerAdapter($audioType);
            return $this->mediaAdapter->play($audioType, $fileName);
        }

        return "Invalid media type: {$audioType}";
    }
}
