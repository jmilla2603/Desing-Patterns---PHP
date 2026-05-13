<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use App\Structural\Adapter\AudioPlayer\AudioPlayer;

$audioPlayer = new AudioPlayer();

$output = [];
$output[] = $audioPlayer->play('mp3', 'beyond_the_horizon.mp3');
$output[] = $audioPlayer->play('mp4', 'alone.mp4');
$output[] = $audioPlayer->play('vlc', 'far_far_away.vlc');
$output[] = $audioPlayer->play('avi', 'mind_me.avi');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adapter Pattern - Audio Player</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-2xl mx-auto p-8">
        <div class="bg-gray-800 rounded-2xl shadow-2xl p-8 border border-gray-700">
            <h1 class="text-3xl font-bold mb-2 text-indigo-400">Adapter Pattern</h1>
            <p class="text-gray-400 mb-6">Audio Player Example</p>

            <div class="space-y-4">
                <?php foreach ($output as $message): ?>
                    <div class="bg-gray-700/50 rounded-lg px-5 py-3 text-sm font-mono border-l-4 border-indigo-500">
                        <?= htmlspecialchars($message) ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-700 text-xs text-gray-500">
                <a href="/" class="text-indigo-400 hover:text-indigo-300 transition">&larr; Back to examples</a>
            </div>
        </div>
    </div>
</body>
</html>
