<section id="competences" class="py-32 max-w-7xl mx-auto px-6 relative z-10">
    <h2 class="text-4xl font-black text-white uppercase tracking-tighter mb-20 relative z-20">
        <span class="text-[#ff0000] filter drop-shadow-[0_0_8px_rgba(255,0,0,0.8)]">C</span>ompétences
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative z-20 mb-12">
        <div class="bg-[#080000] backdrop-blur-md border border-white/10 p-8 rounded-xl shadow-2xl group transition-all duration-500 hover:border-[#ff0000]/50">
            <div class="flex items-center gap-4 mb-8 border-b border-white/5 pb-4">
                <svg class="w-8 h-8 text-gray-500 group-hover:text-[#ff0000] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                </svg>
                <h3 class="text-xl font-bold text-gray-400 group-hover:text-white uppercase tracking-wider">Développement</h3>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
                <?php 
                $techs = ['Vue.js', 'Python', 'PHP', 'JS', 'HTML/CSS', 'SQL', 'Quasar', 'Android'];
                foreach($techs as $t): ?>
                    <div class="p-3 bg-black/40 rounded-xl border border-white/5 hover:border-[#ff0000] transition-all group/item">
                        <p class="text-gray-500 group-hover/item:text-[#ff0000] font-bold text-[10px] uppercase tracking-widest"><?php echo $t; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="bg-[#080000] backdrop-blur-md border border-white/10 p-8 rounded-xl shadow-2xl group transition-all duration-500 hover:border-[#ff0000]/50">
            <div class="flex items-center gap-4 mb-8 border-b border-white/5 pb-4">
                <svg class="w-8 h-8 text-gray-500 group-hover:text-[#ff0000] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                </svg>
                <h3 class="text-xl font-bold text-gray-400 group-hover:text-white uppercase tracking-wider">Outils & Systèmes</h3>
            </div>
            
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-black/40 rounded-xl border border-white/5 hover:border-[#ff0000] transition-all">
                    <span class="text-gray-500 text-[10px] font-bold uppercase tracking-widest">IDE / Versioning</span>
                    <span class="text-gray-500 font-black text-[11px] uppercase">VS Code / Git</span>
                </div>
                <div class="flex items-center justify-between p-4 bg-black/40 rounded-xl border border-white/5 hover:border-[#ff0000] transition-all">
                    <span class="text-gray-500 text-[10px] font-bold uppercase tracking-widest">Serveurs</span>
                    <span class="text-gray-400 font-black text-[11px] uppercase">Laragon / MAMP</span>
                </div>
            </div>
        </div>
    </div>

    <div class="relative z-20">
        <div class="bg-[#080000] backdrop-blur-md border border-white/10 p-8 rounded-xl shadow-2xl transition-all duration-500 hover:border-[#ff0000]/30">
            
            <div class="flex flex-col md:flex-row items-md-center justify-between gap-6 mb-8 border-b border-white/5 pb-6">
                <div class="flex items-center gap-4">
                    <svg class="w-8 h-8 text-[#ff0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-black text-white uppercase tracking-widest">Tableau de Synthèse des Réalisations</h3>
                        <p class="text-[#ff0000] text-[10px] font-bold uppercase tracking-[0.3em] mt-1">Épreuve E4 - BTS SIO</p>
                    </div>
                </div>

                <a href="image/TCompetences.pdf" download="TCompetences_MORAND_Loucas.pdf" 
                   class="flex items-center justify-center gap-3 px-8 py-4 bg-red-950/20 border border-red-900/40 text-[#ff0000] rounded-full font-black text-[10px] uppercase tracking-widest transition-all hover:bg-[#ff0000] hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Télécharger le PDF complet
                </a>
            </div>
            
            <div class="w-full rounded-lg bg-black/40 border border-white/5 overflow-hidden shadow-inner">
                <object data="image/TCompetences.pdf" type="application/pdf" class="w-full h-[800px]">
                    <div class="flex flex-col items-center justify-center py-20 text-center">
                        <p class="text-gray-500 font-mono text-sm mb-6 uppercase tracking-widest">L'aperçu ne peut pas s'afficher ici.</p>
                        <a href="image/TCompetences.pdf" target="_blank" class="px-6 py-3 bg-white text-black font-black uppercase text-xs rounded">Ouvrir le nouveau tableau</a>
                    </div>
                </object>
            </div>
            
            <div class="mt-6 flex justify-between items-center">
                <p class="text-gray-600 text-[10px] font-mono uppercase tracking-widest">Visualisation interactive du nouveau tableau de compétences</p>
                <span class="text-[#ff0000] text-[10px] font-black animate-pulse uppercase tracking-widest">Mis à jour</span>
            </div>
        </div>
    </div>
</section>