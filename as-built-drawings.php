<?php include 'header.php'; ?>

<section class="bg-[#0b2a4a] text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-10 mixed-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070');"></div>
    <div class="max-w-[1500px] mx-auto px-6 sm:px-8 lg:px-12 relative z-10 text-center space-y-2">
        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">Service Details</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-slate-300 font-medium">
            <a href="#" class="hover:text-orange-500 transition">Home</a>
            <span class="text-slate-500"><i class="fa-solid fa-chevron-right text-[10px]"></i></span>
            <span class="text-orange-500">As-Built Drawings</span>
        </div>
    </div>
</section>

<section class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24 bg-white">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
        
        <div class="lg:col-span-8 space-y-10">
            
            <div class="space-y-5">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-orange-500/10 text-orange-600 rounded-2xl flex items-center justify-center text-3xl shadow-sm">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 tracking-tight">As-Built Drawings</h2>
                </div>
                <p class="text-slate-600 leading-relaxed text-justify">
                    As-built drawings enable contractors, engineers, and other project stakeholders to record all the changes that have been made to the building’s original plans
                </p>
                
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 pl-2">
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Commercial &amp; Industrial building
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Single and multistore Residential building
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Converting Scanned data into As-Building Drawings
                    </li>
                </ul>
            </div>

            <div class="space-y-4 border-t border-slate-100 pt-8">
                <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">Keep everybody informed via as-built drawings</h3>
                <div class="text-sm sm:text-base text-slate-500 space-y-4 leading-relaxed text-justify">
                    <p>
                        Communication is key to the success of any construction project, particularly when dealing with architectural plans. Our best-in-class as-built drawings help key project stakeholders track changes to all engineering designs ensuring that everybody remains informed and all structures remain code compliant throughout construction.
                    </p>
                    <p class="font-medium text-[#1a4b6d]">
                        Ready to make the engineering process easier for your team? We’re here to help. Schedule a free consultation today to learn more.
                    </p>
                </div>
            </div>
        </div>

        <div class="lg:col-span-4 lg:sticky lg:top-24 space-y-4">
            
            <div class="relative overflow-hidden rounded-xl border border-slate-200/80 shadow-xs group bg-slate-50 p-2">
                <img src="images/as-built-1.jpg" 
                     alt="As-Built 2D architectural plan drawing layout parameters" 
                     class="w-full h-[180px] object-contain transition-transform duration-500 group-hover:scale-102" />
            </div>

            <div class="relative overflow-hidden rounded-xl border border-slate-200/80 shadow-xs group bg-slate-950 p-1">
                <img src="images/as-built-2.jpg" 
                     alt="CAD design detailing model matrix scheme vectors" 
                     class="w-full h-[180px] object-cover transition-transform duration-500 group-hover:scale-102" />
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>
            </div>
            
        </div>

    </div>
</section>

   <?php include 'footer.php'; ?>