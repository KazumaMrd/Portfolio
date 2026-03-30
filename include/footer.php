<footer class="relative z-10 border-t border-white/5 bg-black/20 backdrop-blur-md pt-20 pb-10 mt-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
            
            <div class="space-y-4">
                <div class="text-xl font-extrabold text-white tracking-tighter uppercase">
                    Loucas<span class="text-red-600">.M</span>
                </div>
                <p class="text-gray-500 text-[11px] leading-relaxed max-w-xs uppercase tracking-widest opacity-70">
                    Étudiant en BTS SIO SLAM<br>
                    Spécialisation Développement & Cybersécurité
                </p>
            </div>

            <div class="space-y-4">
                <h5 class="text-white font-bold uppercase text-[10px] tracking-[0.3em] border-b border-red-600/30 w-fit pb-1">Menu</h5>
                <ul class="text-gray-500 text-[10px] uppercase tracking-widest space-y-3">
                    <li><a href="#parcours" class="hover:text-red-600 transition-colors">Parcours</a></li>
                    <li><a href="#projet" class="hover:text-red-600 transition-colors">Projets</a></li>
                    <li><a href="#competences" class="hover:text-red-600 transition-colors">Compétences</a></li>
                    <li><a href="#certifications" class="hover:text-red-600 transition-colors">Certifications</a></li>
                </ul>
            </div>

            <div class="space-y-4">
                <h5 class="text-white font-bold uppercase text-[10px] tracking-[0.3em] border-b border-red-600/30 w-fit pb-1">Légal</h5>
                <ul class="text-gray-500 text-[10px] uppercase tracking-widest space-y-3">
                    <li>
                        <button onclick="document.getElementById('modal-legals').showModal()" class="hover:text-red-600 transition-colors">
                            Mentions Légales
                        </button>
                    </li>
                    <li class="opacity-40 italic lowercase text-[9px]">Hébergement : Localhost / Environnement de dev</li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-[9px] font-mono text-gray-600 uppercase tracking-[0.2em]">
                &copy; 2026 Loucas Morand — Propulsé par PHP & Tailwind
            </p>
            <div class="flex gap-8">
                <a href="#" class="text-gray-500 hover:text-red-600 transition-all duration-300 text-[10px] font-bold uppercase tracking-widest">GitHub</a>
                <a href="#" class="text-gray-500 hover:text-red-600 transition-all duration-300 text-[10px] font-bold uppercase tracking-widest">LinkedIn</a>
            </div>
        </div>
    </div>
</footer>

<dialog id="modal-legals" class="bg-[#080000] border border-white/10 p-8 rounded-xl text-gray-400 max-w-2xl backdrop:bg-black/80 shadow-2xl">
    <div class="space-y-6">
        <h3 class="text-white font-black uppercase text-xl tracking-tighter">Mentions <span class="text-red-600">Légales</span></h3>
        <div class="space-y-4 text-xs leading-relaxed font-light">
            <p><strong class="text-gray-300 uppercase">Éditeur :</strong> Loucas Morand, étudiant en BTS SIO.</p>
            <p><strong class="text-gray-300 uppercase">Hébergement :</strong> Ce site est actuellement hébergé en environnement local à des fins de développement et de présentation de portfolio scolaire.</p>
            <p><strong class="text-gray-300 uppercase">Propriété intellectuelle :</strong> L'ensemble des contenus (textes, images, code) est la propriété de Loucas Morand, sauf mention contraire.</p>
            <p><strong class="text-gray-300 uppercase">Données personnelles :</strong> Aucune donnée personnelle n'est collectée par ce site (hors formulaire de contact éventuel).</p>
        </div>
        <button onclick="this.closest('dialog').close()" class="mt-6 text-[10px] font-bold text-red-600 uppercase tracking-widest border border-red-600/20 px-4 py-2 rounded hover:bg-red-600 hover:text-white transition-all">Fermer</button>
    </div>
</dialog>

<?php include('animation.php'); ?>