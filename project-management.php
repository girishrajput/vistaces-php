<?php include 'header.php'; ?>

<section class="bg-[#0b2a4a] text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-10 mixed-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070');"></div>
    <div class="max-w-[1500px] mx-auto px-6 sm:px-8 lg:px-12 relative z-10 text-center space-y-2">
        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">Service Details</h1>
        <div class="flex items-center justify-center space-x-2 text-sm text-slate-300 font-medium">
            <a href="#" class="hover:text-orange-500 transition">Home</a>
            <span class="text-slate-500"><i class="fa-solid fa-chevron-right text-[10px]"></i></span>
            <span class="text-orange-500">Project Management</span>
        </div>
    </div>
</section>

<section class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24 bg-white">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
        
        <div class="lg:col-span-8 space-y-10">
            
            <div class="space-y-5">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-orange-500/10 text-orange-600 rounded-2xl flex items-center justify-center text-3xl shadow-sm">
                        <i class="fa-solid fa-timeline"></i>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 tracking-tight">Project Management</h2>
                </div>
                <p class="text-slate-600 leading-relaxed text-justify">
                    Our construction project management services ensure that your project moves along smoothly without unnecessary delays, distractions, missed deadlines or incurring additional costs.
                </p>
                
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 pl-2">
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Planning &amp; Scheduling
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Cost Estimation
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Project EVM Analysis
                    </li>
                    <li class="flex items-center gap-2 text-sm font-medium text-slate-800">
                        <span class="text-orange-500 text-xs"><i class="fa-solid fa-circle-check"></i></span> Project performance measurement and Budget Monitoring
                    </li>
                </ul>
            </div>

            <div class="space-y-4 border-t border-slate-100 pt-8">
                <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">Management that makes a difference</h3>
                <div class="text-sm sm:text-base text-slate-500 space-y-4 leading-relaxed text-justify">
                    <p>
                        Suboptimal scheduling and project management can quickly lead to cluttered documents, confused team members, and costly delays. Our specialized construction management solutions help ensure that this doesn’t happen to you. In addition to employing the technological innovations needed to thrive, we help your team set deadlines and goals, simultaneously optimizing the performance of each member and the unit as a whole.
                    </p>
                    <p class="font-medium text-[#1a4b6d]">
                        Book a free project management consultation to discover what we can do for you.
                    </p>
                </div>
            </div>
        </div>

        <div class="lg:col-span-4 lg:sticky lg:top-24 space-y-6">
            
            <div class="relative overflow-hidden rounded-2xl border border-slate-200/80 shadow-md group">
                <img src="images/project-management-1.jpg" 
                     alt="Project Management Analytics Dashboard" 
                     class="w-full h-[240px] object-cover transition-transform duration-500 group-hover:scale-103" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2a4a]/30 to-transparent"></div>
            </div>

            <div class="relative overflow-hidden rounded-2xl border border-slate-200/80 shadow-md group">
                <img src="images/project-management-2.jpg" 
                     alt="3D Building Information Model Layout" 
                     class="w-full h-[240px] object-cover transition-transform duration-500 group-hover:scale-103" />
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2a4a]/30 to-transparent"></div>
            </div>
            
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>