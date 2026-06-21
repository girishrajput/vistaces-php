<?php include 'header.php'; ?>


<section class="bg-[#0b2a4a] text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-60 mixed-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070');"></div>
    <div class="max-w-[1500px] mx-auto px-6 sm:px-8 lg:px-12 relative z-10 text-center space-y-2">
        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">Insights &amp; Engineering News</h1>
        <p class="text-slate-300 max-w-md mx-auto text-sm sm:text-base">Stay updated with the latest industry compliance standards, 3D modeling breakthroughs, and project management tactics.</p>
        <div class="flex items-center justify-center space-x-2 text-sm text-slate-300 font-medium pt-2">
            <a href="index.php" class="hover:text-orange-500 transition">Home</a>
            <span class="text-slate-500"><i class="fa-solid fa-chevron-right text-[10px]"></i></span>
            <span class="text-orange-500">Blog</span>
        </div>
    </div>
</section>

<section class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 bg-white">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
        
        <div class="lg:col-span-8 space-y-16">
            
            <div class="group grid grid-cols-1 md:grid-cols-12 gap-6 bg-slate-50 rounded-2xl overflow-hidden border border-slate-200/60 p-4 sm:p-6 hover:shadow-xl transition-all duration-300">
                <div class="md:col-span-6 relative overflow-hidden rounded-xl h-[260px] sm:h-full min-h-[240px]">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1000" alt="Featured Article" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-103" />
                    <span class="absolute top-4 left-4 bg-orange-500 text-white font-mono font-bold text-xs uppercase tracking-wider px-3 py-1.5 rounded-md shadow-md">Featured</span>
                </div>
                <div class="md:col-span-6 flex flex-col justify-between py-2 space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center gap-4 text-xs font-mono text-slate-400">
                            <span class="flex items-center gap-1.5"><i class="fa-regular fa-calendar"></i> June 15, 2026</span>
                            <span class="flex items-center gap-1.5"><i class="fa-regular fa-clock"></i> 6 Min Read</span>
                        </div>
                        <h2 class="text-2xl font-bold text-slate-900 group-hover:text-orange-600 transition-colors tracking-tight leading-tight">
                            Navigating Fort Bend County Permitting In 2026: A Developer's Technical Guide
                        </h2>
                        <p class="text-sm text-slate-500 leading-relaxed text-justify">
                            Discover how building code updates and structural calculation parameters impact municipal submittals. Learn early clash resolution frameworks to accelerate your time-to-permit safely.
                        </p>
                    </div>
                    <div class="pt-2">
                        <a href="blog-details.php" class="inline-flex items-center text-sm font-bold text-[#0b2a4a] hover:text-orange-500 transition gap-1 group/btn">
                            Read Full Article 
                            <i class="fa-solid fa-arrow-right text-[11px] transform group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                
                <div class="group flex flex-col justify-between bg-white border border-slate-200/70 rounded-2xl overflow-hidden hover:shadow-xl hover:border-slate-300 transition-all duration-300">
                    <div class="space-y-4">
                        <div class="relative overflow-hidden h-[210px] w-full bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?q=80&w=1000" alt="BIM Architecture" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-103" />
                            <span class="absolute bottom-3 left-3 bg-[#0b2a4a]/90 backdrop-blur-xs text-white font-mono text-[11px] uppercase tracking-wider px-2.5 py-1 rounded-md">BIM Integration</span>
                        </div>
                        <div class="px-5 space-y-2">
                            <div class="flex items-center gap-4 text-xs font-mono text-slate-400">
                                <span><i class="fa-regular fa-calendar mr-1"></i> May 28, 2026</span>
                                <span><i class="fa-regular fa-clock mr-1"></i> 4 Min Read</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-orange-600 transition-colors tracking-tight leading-snug">
                                How 3D Structural Coordination Eliminates Expensive Material Overheads
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed line-clamp-3 text-justify">
                                Virtual clash testing early inside building information models allows contractors and architectural designers to troubleshoot alignment errors before a drop of foundation concrete is poured.
                            </p>
                        </div>
                    </div>
                    <div class="p-5 pt-4 mt-2 border-t border-slate-100 flex items-center justify-between">
                        <a href="blog-details.php" class="text-xs font-bold text-[#1a4b6d] hover:text-orange-500 transition uppercase tracking-wider font-mono">Read More &rarr;</a>
                    </div>
                </div>

                <div class="group flex flex-col justify-between bg-white border border-slate-200/70 rounded-2xl overflow-hidden hover:shadow-xl hover:border-slate-300 transition-all duration-300">
                    <div class="space-y-4">
                        <div class="relative overflow-hidden h-[210px] w-full bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1000" alt="Civil Site Drainage" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-103" />
                            <span class="absolute bottom-3 left-3 bg-[#0b2a4a]/90 backdrop-blur-xs text-white font-mono text-[11px] uppercase tracking-wider px-2.5 py-1 rounded-md">Civil Engineering</span>
                        </div>
                        <div class="px-5 space-y-2">
                            <div class="flex items-center gap-4 text-xs font-mono text-slate-400">
                                <span><i class="fa-regular fa-calendar mr-1"></i> May 14, 2026</span>
                                <span><i class="fa-regular fa-clock mr-1"></i> 5 Min Read</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-orange-600 transition-colors tracking-tight leading-snug">
                                Mitigating Flood Risks: Storm &amp; Sanitary Sewer Layout Optimization Techniques
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed line-clamp-3 text-justify">
                                An in-depth engineering assessment of topological site variables, drainage parameters, and FEMA-compliant elevation certifications suited for volatile site load domains.
                            </p>
                        </div>
                    </div>
                    <div class="p-5 pt-4 mt-2 border-t border-slate-100 flex items-center justify-between">
                        <a href="blog-details.php" class="text-xs font-bold text-[#1a4b6d] hover:text-orange-500 transition uppercase tracking-wider font-mono">Read More &rarr;</a>
                    </div>
                </div>

                <div class="group flex flex-col justify-between bg-white border border-slate-200/70 rounded-2xl overflow-hidden hover:shadow-xl hover:border-slate-300 transition-all duration-300">
                    <div class="space-y-4">
                        <div class="relative overflow-hidden h-[210px] w-full bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1000" alt="As-Built Drawings" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-103" />
                            <span class="absolute bottom-3 left-3 bg-[#0b2a4a]/90 backdrop-blur-xs text-white font-mono text-[11px] uppercase tracking-wider px-2.5 py-1 rounded-md">As-Built Drawings</span>
                        </div>
                        <div class="px-5 space-y-2">
                            <div class="flex items-center gap-4 text-xs font-mono text-slate-400">
                                <span><i class="fa-regular fa-calendar mr-1"></i> April 29, 2026</span>
                                <span><i class="fa-regular fa-clock mr-1"></i> 3 Min Read</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-orange-600 transition-colors tracking-tight leading-snug">
                                The Critical Importance of Record Drawings in Commercial Renovations
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed line-clamp-3 text-justify">
                                How precise tracking of dimensional blueprint modifications during field execution protects overall structure lifespans and builds flawless compliance records.
                            </p>
                        </div>
                    </div>
                    <div class="p-5 pt-4 mt-2 border-t border-slate-100 flex items-center justify-between">
                        <a href="blog-details.php" class="text-xs font-bold text-[#1a4b6d] hover:text-orange-500 transition uppercase tracking-wider font-mono">Read More &rarr;</a>
                    </div>
                </div>

                <div class="group flex flex-col justify-between bg-white border border-slate-200/70 rounded-2xl overflow-hidden hover:shadow-xl hover:border-slate-300 transition-all duration-300">
                    <div class="space-y-4">
                        <div class="relative overflow-hidden h-[210px] w-full bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1000" alt="Project Management Overview" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-103" />
                            <span class="absolute bottom-3 left-3 bg-[#0b2a4a]/90 backdrop-blur-xs text-white font-mono text-[11px] uppercase tracking-wider px-2.5 py-1 rounded-md">Project Management</span>
                        </div>
                        <div class="px-5 space-y-2">
                            <div class="flex items-center gap-4 text-xs font-mono text-slate-400">
                                <span><i class="fa-regular fa-calendar mr-1"></i> April 02, 2026</span>
                                <span><i class="fa-regular fa-clock mr-1"></i> 5 Min Read</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-orange-600 transition-colors tracking-tight leading-snug">
                                Utilizing EVM Metrics to Prevent Budget Crises in Large-Scale Infrastructure
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed line-clamp-3 text-justify">
                                Establish robust site schedule tracking matrix frameworks and performance parameters to maintain lean builder risk margins across high-stake projects.
                            </p>
                        </div>
                    </div>
                    <div class="p-5 pt-4 mt-2 border-t border-slate-100 flex items-center justify-between">
                        <a href="blog-details.php" class="text-xs font-bold text-[#1a4b6d] hover:text-orange-500 transition uppercase tracking-wider font-mono">Read More &rarr;</a>
                    </div>
                </div>

            </div>

            <div class="flex items-center justify-center space-x-2 pt-6">
                <a href="#" class="w-10 h-10 inline-flex items-center justify-center rounded-lg border border-slate-200 text-slate-400 hover:border-slate-300 hover:text-slate-800 transition"><i class="fa-solid fa-chevron-left text-xs"></i></a>
                <a href="#" class="w-10 h-10 inline-flex items-center justify-center rounded-lg border border-orange-500 bg-orange-500 text-white font-mono text-sm font-bold shadow-md shadow-orange-500/10">1</a>
                <a href="#" class="w-10 h-10 inline-flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 font-mono text-sm font-medium hover:bg-slate-50 transition">2</a>
                <a href="#" class="w-10 h-10 inline-flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 font-mono text-sm font-medium hover:bg-slate-50 transition">3</a>
                <a href="#" class="w-10 h-10 inline-flex items-center justify-center rounded-lg border border-slate-200 text-slate-400 hover:border-slate-300 hover:text-slate-800 transition"><i class="fa-solid fa-chevron-right text-xs"></i></a>
            </div>

        </div>

        <aside class="lg:col-span-4 space-y-8 lg:sticky lg:top-24">
            
            <div class="bg-slate-50 border border-slate-200/70 rounded-2xl p-6">
                <h4 class="text-base font-bold text-slate-900 tracking-tight uppercase mb-4 font-mono text-xs text-slate-400">Search Archive</h4>
                <div class="relative flex items-center">
                    <input type="text" placeholder="Type keywords..." class="w-full h-11 pl-4 pr-10 border border-slate-200 bg-white rounded-xl text-sm focus:outline-none focus:border-[#1a4b6d] text-slate-800 placeholder-slate-400" />
                    <button class="absolute right-3 text-slate-400 hover:text-[#1a4b6d] transition cursor-pointer"><i class="fa-solid fa-magnifying-glass text-sm"></i></button>
                </div>
            </div>

            <div class="bg-slate-50 border border-slate-200/70 rounded-2xl p-6">
                <h4 class="text-base font-bold text-slate-900 tracking-tight uppercase mb-4 font-mono text-xs text-slate-400">Categories</h4>
                <ul class="space-y-2.5 text-sm font-medium text-slate-600">
                    <li>
                        <a href="#" class="flex items-center justify-between px-3 py-2 bg-white rounded-xl border border-slate-200/50 hover:text-orange-500 hover:border-orange-500/30 transition shadow-2xs">
                            <span><i class="fa-solid fa-calculator text-xs text-slate-400 mr-2"></i> Civil Engineering</span>
                            <span class="bg-slate-100 text-slate-500 font-mono text-xs px-2 py-0.5 rounded-md">8</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-between px-3 py-2 bg-white rounded-xl border border-slate-200/50 hover:text-orange-500 hover:border-orange-500/30 transition shadow-2xs">
                            <span><i class="fa-solid fa-building-shield text-xs text-slate-400 mr-2"></i> Structural Engineering</span>
                            <span class="bg-slate-100 text-slate-500 font-mono text-xs px-2 py-0.5 rounded-md">12</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-between px-3 py-2 bg-white rounded-xl border border-slate-200/50 hover:text-orange-500 hover:border-orange-500/30 transition shadow-2xs">
                            <span><i class="fa-solid fa-cubes text-xs text-slate-400 mr-2"></i> BIM Integration</span>
                            <span class="bg-slate-100 text-slate-500 font-mono text-xs px-2 py-0.5 rounded-md">6</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-between px-3 py-2 bg-white rounded-xl border border-slate-200/50 hover:text-orange-500 hover:border-orange-500/30 transition shadow-2xs">
                            <span><i class="fa-solid fa-timeline text-xs text-slate-400 mr-2"></i> Project Management</span>
                            <span class="bg-slate-100 text-slate-500 font-mono text-xs px-2 py-0.5 rounded-md">14</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-between px-3 py-2 bg-white rounded-xl border border-slate-200/50 hover:text-orange-500 hover:border-orange-500/30 transition shadow-2xs">
                            <span><i class="fa-solid fa-compass-drafting text-xs text-slate-400 mr-2"></i> As-Built Drawings</span>
                            <span class="bg-slate-100 text-slate-500 font-mono text-xs px-2 py-0.5 rounded-md">5</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bg-[#0b2a4a] text-white rounded-2xl p-6 relative overflow-hidden shadow-lg border border-white/5">
                <div class="absolute -right-10 -bottom-10 w-36 h-36 bg-orange-500/10 rounded-full blur-2xl"></div>
                <div class="relative z-10 space-y-4">
                    <div class="w-10 h-10 rounded-xl bg-orange-500/10 text-orange-500 flex items-center justify-center text-lg shadow-inner"><i class="fa-solid fa-envelope-open-text"></i></div>
                    <h4 class="text-lg font-bold tracking-tight">Stay Code Compliant</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Subscribe to receive structural layout strategies, regional zoning amendments, and technological guidelines directly in your inbox.
                    </p>
                    <form action="#" class="space-y-2 pt-2">
                        <input type="email" placeholder="Your corporate email" required class="w-full h-10 px-3 rounded-xl bg-white/10 border border-white/10 text-white placeholder-slate-400 text-xs focus:outline-none focus:border-orange-500" />
                        <button type="submit" class="w-full h-10 bg-orange-500 hover:bg-orange-600 text-white font-bold font-mono text-xs uppercase tracking-wider rounded-xl transition cursor-pointer">Subscribe</button>
                    </form>
                </div>
            </div>

        </aside>
        
    </div>
</section>

   <?php include 'footer.php'; ?>