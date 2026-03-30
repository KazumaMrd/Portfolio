<section id="competences" class="py-32 max-w-7xl mx-auto px-6 relative z-10">
    <h2 class="text-4xl font-black text-white uppercase tracking-tighter mb-20 relative z-20">
        <span class="text-[#ff0000] filter drop-shadow-[0_0_8px_rgba(255,0,0,0.8)]">C</span>ompétences
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative z-20">
        
        <div class="bg-[#080000] backdrop-blur-md border border-white/10 p-8 rounded-xl shadow-2xl group transition-all duration-500 hover:border-[#ff0000]/50 hover:shadow-[0_0_20px_rgba(255,0,0,0.1)]">
            <div class="flex items-center gap-4 mb-8 border-b border-white/5 pb-4">
                <svg class="w-8 h-8 text-gray-500 group-hover:text-[#ff0000] transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                </svg>
                <h3 class="text-xl font-bold text-gray-400 group-hover:text-white uppercase tracking-wider transition-colors duration-500">Développement Mobile & Web</h3>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 text-center">
                <?php 
                $techs = ['Vue.js', 'Python', 'PHP', 'JavaScript', 'HTML/CSS', 'SQL', 'Quasar', 'Android Studio'];
                foreach($techs as $t): ?>
                    <div class="p-3 bg-black/40 rounded-xl border border-white/5 hover:border-[#ff0000] hover:bg-red-950/30 transition-all duration-300 group/item cursor-default">
                        <p class="text-gray-500 group-hover/item:text-[#ff0000] font-bold text-[10px] uppercase transition-colors tracking-widest">
                            <?php echo $t; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="bg-[#080000] backdrop-blur-md border border-white/10 p-8 rounded-xl shadow-2xl group transition-all duration-500 hover:border-[#ff0000]/50 hover:shadow-[0_0_20px_rgba(255,0,0,0.1)]">
            <div class="flex items-center gap-4 mb-8 border-b border-white/5 pb-4">
                <svg class="w-8 h-8 text-gray-500 group-hover:text-[#ff0000] transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                </svg>
                <h3 class="text-xl font-bold text-gray-400 group-hover:text-white uppercase tracking-wider transition-colors duration-500">Outils & Dev</h3>
            </div>
            
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-black/40 rounded-xl border border-white/5 hover:border-[#ff0000] hover:bg-red-950/30 transition-all duration-300 group/tool cursor-default">
                    <span class="text-gray-500 group-hover/tool:text-gray-300 text-[10px] font-bold uppercase tracking-widest transition-colors">IDE / Versioning</span>
                    <span class="text-gray-500 group-hover/tool:text-[#ff0000] text-[11px] font-black transition-colors uppercase">VS Code / Git</span>
                </div>
                <div class="flex items-center justify-between p-4 bg-black/40 rounded-xl border border-white/5 hover:border-[#ff0000] hover:bg-red-950/30 transition-all duration-300 group/tool cursor-default">
                    <span class="text-gray-500 group-hover/tool:text-gray-300 text-[10px] font-bold uppercase tracking-widest transition-colors">Serveurs</span>
                    <span class="text-gray-400 group-hover/tool:text-[#ff0000] text-[11px] font-black transition-colors uppercase">Laragon / MAMP</span>
                </div>
                <div class="flex items-center justify-between p-4 bg-black/40 rounded-xl border border-white/5 hover:border-[#ff0000] hover:bg-red-950/30 transition-all duration-300 group/tool cursor-default">
                    <span class="text-gray-500 group-hover/tool:text-gray-300 text-[10px] font-bold uppercase tracking-widest transition-colors">Maquettage</span>
                    <span class="text-gray-400 group-hover/tool:text-[#ff0000] text-[11px] font-black transition-colors uppercase">Figma</span>
                </div>
            </div>
        </div>

    </div>
</section>