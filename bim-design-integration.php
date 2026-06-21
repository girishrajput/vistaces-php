<?php include 'header.php'; ?>

<section class="bg-[#0b2a4a] text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-60 mixed-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070');"></div>
    <div class="max-w-[1500px] mx-auto px-6 sm:px-8 lg:px-12 relative z-10 text-center space-y-2">
        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">Service Details</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-slate-300 font-medium">
            <a href="#" class="hover:text-orange-500 transition">Home</a>
            <span class="text-slate-500"><i class="fa-solid fa-chevron-right text-[10px]"></i></span>
            <span class="text-orange-500">BIM and Design Integration</span>
        </div>
    </div>
</section>

<section class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24 bg-white">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
        
        <div class="lg:col-span-8 space-y-10">
            
            <div class="space-y-5">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-orange-500/10 text-orange-600 rounded-2xl flex items-center justify-center text-3xl shadow-sm">
                        <i class="fa-solid fa-cubes"></i>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 tracking-tight">BIM and Design Integration</h2>
                </div>
                <p class="text-slate-600 leading-relaxed text-justify">
                    Vista's 3D models gives builders and engineers a clear view of the site layout and design, making it easier to troubleshoot issues early in the process.
                </p>
                
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 pl-2">
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> 3D Visualization
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Code Review &amp; Clash Detection
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Construction Drawings
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Bill of Materials &amp; Cost Estimation
                    </li>
                </ul>
            </div>

            <div class="space-y-4 border-t border-slate-100 pt-8">
                <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">Your trusted, one-stop 3D modeling solution</h3>
                <div class="text-sm sm:text-base text-slate-500 space-y-4 leading-relaxed text-justify">
                    <p>
                        As a unified, all-in-one solution, our BIM and design integration services combine architectural, engineering, and other construction disciples together in one package. This gives you unprecedented access to the specialized BIM expertise required to increase collaboration, boost profitability, lower costs, optimize time management, and improve interactions between you and your team, partners, and clients. The best part? BIM implementation can lead to an average ROI of 9486%.
                    </p>
                    <p class="font-medium text-[#1a4b6d]">
                        Reach out today to request a free estimate on your BIM &amp; Design Integration project.
                    </p>
                </div>
            </div>

            <div class="bg-slate-50 border border-slate-200/60 rounded-xl p-4 flex items-center gap-3">
                <div class="text-orange-500 text-lg flex-shrink-0"><i class="fa-solid fa-file-pdf"></i></div>
                <div class="text-xs sm:text-sm text-slate-600">
                    <a href="#" class="font-semibold text-[#0b2a4a] hover:text-orange-600 transition">BIM Benefits and Risk PDF</a>
                    <span class="text-slate-400 mx-1">|</span> BIM benefits, Risks, and Challenges for the AEC industry
                </div>
            </div>
        </div>

        <div class="lg:col-span-4 lg:sticky lg:top-24 space-y-4">
            
            <div class="relative overflow-hidden rounded-xl border border-slate-200/80 shadow-xs group">
                <img src="images/bim-details-1.jpg" 
                     alt="Top-down Residential Layout Parameters" 
                     class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-103" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2a4a]/20 to-transparent"></div>
            </div>

            <div class="relative overflow-hidden rounded-xl border border-slate-200/80 shadow-xs group">
                <img src="images/bim-details-2.jpg" 
                     alt="Aerial View Structural Alignment Planning" 
                     class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-103" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2a4a]/20 to-transparent"></div>
            </div>

            <div class="relative overflow-hidden rounded-xl border border-slate-200/80 shadow-xs group">
                <img src="images/bim-details-3.jpg" 
                     alt="Isometric 3D Structural Modeling Profile" 
                     class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-103" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2a4a]/20 to-transparent"></div>
            </div>
            
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>