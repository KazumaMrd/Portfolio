<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <title>Loucas Morand | Portfolio SIO SLAM</title>
    <style>
        body { background-color: #030000; color: #d1d1d1; font-family: 'Plus Jakarta Sans', sans-serif; overflow-x: hidden; }
        #canvas-links { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; background: #000000; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(-5px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fadeIn { animation: fadeIn 0.4s ease-out; }
    </style>
</head>
<body class="selection:bg-red-600/30 selection:text-red-500">
    <canvas id="canvas-links"></canvas>

    <nav class="sticky top-0 z-50 bg-black/80 backdrop-blur-xl border-b border-red-900/20 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6">
            <div class="text-xl font-extrabold text-white tracking-tighter uppercase">
                Loucas<span class="text-red-600">.M</span>
            </div>
            <div class="hidden md:flex space-x-10 text-[10px] uppercase tracking-[0.25em] font-bold text-gray-400">
                <a href="#parcours" class="hover:text-red-600 transition-colors">Parcours</a>
                <a href="#projet" class="hover:text-red-600 transition-colors">Projet</a>
                <a href="#competences" class="hover:text-red-600 transition-colors">Compétences</a>
                <a href="#contact" class="hover:text-red-600 transition-colors">Contact</a>
            </div>
        </div>
    </nav>