<?php include 'header.php'; ?>

<section class="bg-[#0b2a4a] text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-10 mixed-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070');"></div>
    <div class="max-w-[1500px] mx-auto px-6 sm:px-8 lg:px-12 relative z-10 text-center space-y-2">
        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">Service Details</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-slate-300 font-medium">
            <a href="#" class="hover:text-orange-500 transition">Home</a>
            <span class="text-slate-500"><i class="fa-solid fa-chevron-right text-[10px]"></i></span>
            <span class="text-orange-500">Construction Documents</span>
        </div>
    </div>
</section>

<section class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24 bg-white">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
        
        <div class="lg:col-span-8 space-y-10">
            
            <div class="space-y-5">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-orange-500/10 text-orange-600 rounded-2xl flex items-center justify-center text-3xl shadow-sm">
                        <i class="fa-solid fa-file-invoice"></i>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 tracking-tight">Construction Documents</h2>
                </div>
                <p class="text-slate-600 leading-relaxed text-justify">
                    Looking for a reference guide for everyone on the project? Our 2D CAD designs are endowed with features like annotations, dimensions, and other visual aids.
                </p>
                
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 pl-2">
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Architectural construction drawings &amp; Drafting
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Structural construction drawings and &amp; detailing
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> MEP construction drawings &amp; details
                    </li>
                </ul>
            </div>

            <div class="space-y-4 border-t border-slate-100 pt-8">
                <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">Take on your next project with confidence.</h3>
                <div class="text-sm sm:text-base text-slate-500 space-y-4 leading-relaxed text-justify">
                    <p>
                        The right documentation doesn’t just make your complex projects easier – it makes them faster, more cost-effective, and less stressful too. From Simple drafting work to BIM Design Integration, we’ve got your needs covered.
                    </p>
                    <p class="font-medium text-[#1a4b6d]">
                        Ready to discover what our world-class construction documentation services can do for your team? Schedule a free consultation today.
                    </p>
                </div>
            </div>
        </div>

        <div class="lg:col-span-4 lg:sticky lg:top-24 space-y-6">
            
            <div class="relative overflow-hidden rounded-2xl border border-slate-200/80 shadow-md group">
                <img src="images/construction-docs-1.jpg" 
                     alt="Architectural Blueprint Drawing" 
                     class="w-full h-[240px] object-cover transition-transform duration-500 group-hover:scale-103" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2a4a]/30 to-transparent"></div>
            </div>

            <div class="relative overflow-hidden rounded-2xl border border-slate-200/80 shadow-md group">
                <img src="images/construction-docs-2.jpg" 
                     alt="Multi-story Elevation Profile View" 
                     class="w-full h-[240px] object-cover transition-transform duration-500 group-hover:scale-103" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2a4a]/30 to-transparent"></div>
            </div>
            
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>