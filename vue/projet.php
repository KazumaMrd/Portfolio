<section id="projet" class="py-32 max-w-7xl mx-auto px-6 mb-20 relative z-10">
    <h2 class="text-4xl font-black text-white uppercase tracking-tighter mb-20 relative z-20">
        <span class="text-[#ff0000] filter drop-shadow-[0_0_8px_rgba(255,0,0,0.8)]">P</span>rojets
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-20">
        
        <div class="bg-[#080000] backdrop-blur-md border border-white/10 p-8 rounded-xl group hover:border-[#ff0000] transition-all duration-300 shadow-2xl flex flex-col">
            <div class="flex justify-between items-start mb-6">
                <svg class="w-10 h-10 text-[#ff0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                <span class="text-[10px] font-mono text-red-500 border border-red-500/30 px-2 py-1 rounded">Perso / 2026</span>
            </div>
            
            <h4 class="text-white group-hover:text-[#ff0000] font-bold text-xl uppercase tracking-tight transition-colors mb-4">Portfolio Professionnel</h4>
            <p class="text-gray-400 text-sm leading-relaxed mb-6 flex-grow">Conception d'une interface immersive utilisant PHP et Tailwind CSS, avec un fond animé en Canvas interactif.</p>

            <details class="group/info text-sm border-t border-white/5 pt-4">
                <summary class="list-none cursor-pointer text-[#ff0000] font-bold uppercase tracking-widest text-[11px] flex items-center gap-2">
                    <span>Stack & Détails</span>
                    <svg class="w-3 h-3 transition-transform group-open/info:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <div class="mt-4 animate-fadeIn space-y-3">
                    <p class="text-gray-300 text-xs">Architecture MVC, gestion dynamique du DOM et optimisation du rendu Canvas pour les performances mobiles.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-red-950/20 text-[#ff0000] text-[9px] px-2 py-1 rounded border border-red-900/30 font-bold uppercase">PHP</span>
                        <span class="bg-red-950/20 text-[#ff0000] text-[9px] px-2 py-1 rounded border border-red-900/30 font-bold uppercase">Tailwind</span>
                        <span class="bg-red-950/20 text-[#ff0000] text-[9px] px-2 py-1 rounded border border-red-900/30 font-bold uppercase">JS Canvas</span>
                    </div>
                </div>
            </details>
        </div>

        <div class="bg-[#080000] backdrop-blur-md border border-white/10 p-8 rounded-xl group hover:border-[#ff0000] transition-all duration-300 shadow-2xl flex flex-col border-red-500/30">
            <div class="flex justify-between items-start mb-6">
                <svg class="w-10 h-10 text-[#ff0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="flex flex-col items-end gap-2">
                    <span class="text-[10px] font-mono text-red-500 border border-red-500/30 px-2 py-1 rounded uppercase">Live Project</span>
                    <a href="http://roulette.page.gd" target="_blank" class="text-[9px] text-white bg-red-600 px-2 py-1 rounded hover:bg-red-700 transition-colors flex items-center gap-1 uppercase font-black shadow-[0_0_10px_rgba(255,0,0,0.4)]">
                        Accéder
                        <svg class="w-2 h-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>
            
            <h4 class="text-white group-hover:text-[#ff0000] font-bold text-xl uppercase tracking-tight transition-colors mb-4">Système de Tirage "Roulette"</h4>
            <p class="text-gray-400 text-sm leading-relaxed mb-6 flex-grow">Application de tirage au sort avec gestion persistante des données (passages, notes) sur une infrastructure MariaDB distante.</p>

            <details class="group/info text-sm border-t border-white/5 pt-4">
                <summary class="list-none cursor-pointer text-[#ff0000] font-bold uppercase tracking-widest text-[11px] flex items-center gap-2">
                    <span>Stack & Détails</span>
                    <svg class="w-3 h-3 transition-transform group-open/info:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <div class="mt-4 animate-fadeIn space-y-3">
                    <p class="text-gray-300 text-xs">Migration réussie de Proxmox vers hébergement distant, sécurisation des requêtes PDO et algorithme d'exclusion aléatoire.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-red-950/20 text-[#ff0000] text-[9px] px-2 py-1 rounded border border-red-900/30 font-bold uppercase">PHP / MySQL</span>
                        <span class="bg-red-950/20 text-[#ff0000] text-[9px] px-2 py-1 rounded border border-red-900/30 font-bold uppercase">FTP Deployment</span>
                    </div>
                </div>
            </details>
        </div>

        <div class="bg-[#080000] backdrop-blur-md border border-white/10 p-8 rounded-xl group hover:border-[#ff0000] transition-all duration-300 shadow-2xl flex flex-col border-red-500/20">
            <div class="flex justify-between items-start mb-6">
                <svg class="w-10 h-10 text-[#ff0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <div class="flex flex-col items-end gap-2">
                    <span class="text-[10px] font-mono text-gray-500 border border-white/10 px-2 py-1 rounded uppercase">BTS SIO / SUCCESS</span>
                    <a href="https://git.s11.fr/24gajecki/Projet-Success" target="_blank" class="text-[9px] text-gray-300 border border-white/20 px-2 py-1 rounded hover:bg-white hover:text-black transition-all flex items-center gap-1 uppercase font-bold">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.041-1.416-4.041-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        GitLab Code
                    </a>
                </div>
            </div>
            
            <h4 class="text-white group-hover:text-[#ff0000] font-bold text-xl uppercase tracking-tight transition-colors mb-4">Plateforme SUCCESS</h4>
            <p class="text-gray-400 text-sm leading-relaxed mb-6 flex-grow">Solution web d'évaluation (QCM) pour la société S11. Architecture découplée utilisant un CMS Headless et des micro-services.</p>

            <details class="group/info text-sm border-t border-white/5 pt-4">
                <summary class="list-none cursor-pointer text-[#ff0000] font-bold uppercase tracking-widest text-[11px] flex items-center gap-2">
                    <span>Stack & Missions</span>
                    <svg class="w-3 h-3 transition-transform group-open/info:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <div class="mt-4 animate-fadeIn space-y-3">
                    <p class="text-gray-300 text-xs">Conteneurisation Docker, Backend Strapi (Node.js), Frontend Vue.js 3 et gestion de projet Agile avec Git (multi-branches).</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-red-950/20 text-[#ff0000] text-[9px] px-2 py-1 rounded border border-red-900/30 font-bold uppercase">Vue.js 3</span>
                        <span class="bg-red-950/20 text-[#ff0000] text-[9px] px-2 py-1 rounded border border-red-900/30 font-bold uppercase">Strapi</span>
                        <span class="bg-red-950/20 text-[#ff0000] text-[9px] px-2 py-1 rounded border border-red-900/30 font-bold uppercase">Docker</span>
                    </div>
                </div>
            </details>
        </div>

    </div>
</section>