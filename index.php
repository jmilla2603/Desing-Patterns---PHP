<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Patterns in PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen">
    <div class="max-w-4xl mx-auto px-6 py-12">
        <header class="mb-12 text-center">
            <h1 class="text-5xl font-bold mb-3 text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">
                Design Patterns
            </h1>
            <p class="text-gray-400 text-lg">PHP implementation of structural patterns</p>
        </header>

        <section>
            <h2 class="text-2xl font-semibold mb-6 text-indigo-300">Structural Patterns</h2>

            <div class="grid gap-6">
                <a href="examples/structural/adapter/audio_player/index.php"
                   class="block bg-gray-800 rounded-2xl p-6 border border-gray-700 hover:border-indigo-500 hover:shadow-lg hover:shadow-indigo-500/10 transition-all group">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-100 group-hover:text-indigo-400 transition">Adapter</h3>
                            <p class="text-gray-400 mt-1">Audio Player - Adapts different media formats to a common interface</p>
                        </div>
                        <span class="text-gray-600 group-hover:text-indigo-400 transition text-2xl">&rarr;</span>
                    </div>
                </a>
            </div>
        </section>

        <footer class="mt-16 pt-8 border-t border-gray-800 text-center text-gray-500 text-sm">
            Built with PHP 7.4 &bull; Tailwind CSS
        </footer>
    </div>
</body>
</html>
