<?php include 'header.php'; ?>



    <section class="relative h-[650px] w-full overflow-hidden bg-[#0b2a4a]">
        <!-- Slide 0 -->
        <div class="slide absolute inset-0 w-full h-full opacity-100 z-10" id="slide-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 transition-transform duration-[8000ms]"
                style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#0b2a4a]/60 via-[#0b2a4a]/30 to-transparent"></div>

            <div class="relative max-w-[1500px] mx-auto h-full px-6 sm:px-8 lg:px-12 flex flex-col justify-center z-20">
                <div class="max-w-3xl space-y-6">
                    <span
                        class="inline-block text-orange-500 font-semibold uppercase tracking-widest text-sm sm:text-sm bg-orange-500/10 px-3 py-1 rounded border border-orange-500/20">
                        Welcome To
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight">
                        Vista Consulting <span class="text-orange-500">Engineers, LLC</span>
                    </h1>
                    <p class="text-base sm:text-lg text-white/90 max-w-xl leading-relaxed">
                        Committed to the highest standards in construction and design, blending efficiency with quality
                        to deliver lasting impact.
                    </p>
                    <div class="pt-4">
                        <a href="contact.php"
                            class="inline-flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-medium text-sm sm:text-base h-12 px-8 rounded-lg shadow-lg shadow-[#fbbf24]/20 transition-all duration-300 hover:shadow-[#fbbf24]/40 active:scale-98 group">
                            Book a Consultation
                            <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 1 -->
        <div class="slide absolute inset-0 w-full h-full opacity-0 z-0" id="slide-1">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070&auto=format&fit=crop');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#0b2a4a]/60 via-[#0b2a4a]/30 to-transparent"></div>

            <div class="relative max-w-[1500px] mx-auto h-full px-6 sm:px-8 lg:px-12 flex flex-col justify-center z-20">
                <div class="max-w-3xl space-y-6">
                    <span
                        class="inline-block text-orange-500 font-semibold uppercase tracking-widest text-sm sm:text-sm bg-orange-500/10 px-3 py-1 rounded border border-orange-500/20">
                        Mutual Success Alignment
                    </span>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight">
                        We Promote Social & <span class="text-orange-500">Economic Growth</span>
                    </h2>
                    <p class="text-base sm:text-lg text-white/80 max-w-xl leading-relaxed">
                        Through structural collaboration, technical innovation, and a firm, continuous commitment to
                        sustainable local development rules.
                    </p>
                    <div class="pt-4">
                        <a href="who-we-are.php"
                            class="inline-flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-medium text-sm sm:text-base h-12 px-8 rounded-lg shadow-lg shadow-[#fbbf24]/20 transition-all duration-300 active:scale-98 group">
                            Learn More
                            <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide absolute inset-0 w-full h-full opacity-0 z-0" id="slide-2">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1581094288338-2314dddb7ece?q=80&w=2070&auto=format&fit=crop');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#0b2a4a]/60 via-[#0b2a4a]/30 to-transparent"></div>

            <div class="relative max-w-[1500px] mx-auto h-full px-6 sm:px-8 lg:px-12 flex flex-col justify-center z-20">
                <div class="max-w-3xl space-y-6">
                    <span
                        class="inline-block text-orange-500 font-semibold uppercase tracking-widest text-sm sm:text-sm bg-orange-500/10 px-3 py-1 rounded border border-orange-500/20">
                        BIM & Design Leadership
                    </span>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight">
                        Building Sustainable <span class="text-orange-500">Structures Globally</span>
                    </h2>
                    <p class="text-base sm:text-lg text-white/80 max-w-xl leading-relaxed">
                        Fostering leadership, creating commercial opportunities, and raising precision engineering
                        standards across every structural milestone.
                    </p>
                    <div class="pt-4">
                        <a href="services.php"
                            class="inline-flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-medium text-sm sm:text-base h-12 px-8 rounded-lg shadow-lg shadow-[#fbbf24]/20 transition-all duration-300 active:scale-98 group">
                            Our Services
                            <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <button id="prev-btn"
            class="absolute left-4 sm:left-6 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full border border-white/20 bg-slate-900/40 backdrop-blur-sm text-white flex items-center justify-center hover:bg-orange-500 hover:border-orange-500 hover:text-white transition-all duration-300 group cursor-pointer focus:outline-none">
            <i class="fa-solid fa-chevron-left text-sm group-hover:-translate-x-0.5 transition-transform"></i>
        </button>
        <button id="next-btn"
            class="absolute right-4 sm:right-6 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full border border-white/20 bg-slate-900/40 backdrop-blur-sm text-white flex items-center justify-center hover:bg-orange-500 hover:border-orange-500 hover:text-white transition-all duration-300 group cursor-pointer focus:outline-none">
            <i class="fa-solid fa-chevron-right text-sm group-hover:translate-x-0.5 transition-transform"></i>
        </button>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-30 flex items-center space-x-3">
            <button
                class="indicator-bar active w-8 h-1.5 rounded-full bg-[#fbbf24] transition-all duration-300 focus:outline-none"
                onclick="goToSlide(0)"></button>
            <button
                class="indicator-bar inactive w-3 h-1.5 rounded-full bg-white/25 transition-all duration-300 focus:outline-none"
                onclick="goToSlide(1)"></button>
            <button
                class="indicator-bar inactive w-3 h-1.5 rounded-full bg-white/25 transition-all duration-300 focus:outline-none"
                onclick="goToSlide(2)"></button>
        </div>
    </section>


    <section class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24" id="about">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-6 space-y-6">
                <div
                    class="inline-flex items-center space-x-2 bg-orange-500/10 text-orange-600 px-3 py-1 rounded-full text-sm font-semibold tracking-wider uppercase">
                    Core Capabilities
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight leading-tight">
                    The Vista Consulting <br class="hidden sm:inline" />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-slate-700">Engineers
                        Advantage</span>
                </h2>

                <div class="space-y-4 text-slate-600   leading-relaxed text-sm sm:text-base">
                    <p>
                        <strong class="font-semibold text-slate-900">Vista Consulting Engineers, LLC (VCEs)</strong>
                        provides
                        innovative, premium, and cost-effective civil engineering solutions to complex structural and
                        construction
                        management challenges across the industry.
                    </p>
                    <p>
                        We thoroughly analyze project variables and deploy cutting-edge engineering tools and 3D
                        modeling techniques
                        to deliver value-added, legally aligned results. Whether managing complex structural loads or
                        coordinating
                        municipal site clearances, our unparalleled experts turn ambitious concepts into reliable
                        realities.
                    </p>
                    <p>
                        Based in Katy, Texas, we proudly service clients across diverse geographical regions worldwide,
                        remaining
                        dedicated to being the world’s most responsive, solutions-driven engineering provider.
                    </p>
                </div>

                <div class="pt-2">
                    <a href="services.php"
                        class="inline-flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-medium text-sm h-11 px-6 rounded-lg shadow-lg shadow-orange-500/10 transition-all group">
                        Explore Our Services
                        <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-4">

                <div
                    class="group bg-white rounded-2xl border border-slate-200/70 p-6 shadow-xs hover:shadow-xl hover:border-slate-300 transition-all duration-300 grid grid-cols-1 sm:grid-cols-12 gap-4 items-start">
                    <div
                        class="sm:col-span-2 w-12 h-12 rounded-xl bg-orange-500/5 text-orange-500 flex items-center justify-center text-lg font-bold group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <div class="sm:col-span-10 space-y-1">
                        <div class="flex items-center justify-between">
                            <h4
                                class="font-bold text-slate-900 text-base tech-font group-hover:text-orange-600 transition-colors">
                                01.
                                Precision Scope Allocation</h4>
                            <span class="text-[12px] font-bold text-slate-400 uppercase tracking-widest">Pillar I</span>
                        </div>
                        <p class="text-sm sm:text-sm text-slate-500 leading-relaxed  ">
                            We align architectural design intents strictly with technical ground realities, transforming
                            intricate
                            local structural compliance rules into clean documentation paths.
                        </p>
                    </div>
                </div>

                <div
                    class="group bg-white rounded-2xl border border-slate-200/70 p-6 shadow-xs hover:shadow-xl hover:border-slate-300 transition-all duration-300 grid grid-cols-1 sm:grid-cols-12 gap-4 items-start">
                    <div
                        class="sm:col-span-2 w-12 h-12 rounded-xl bg-blue-500/5 text-blue-500 flex items-center justify-center text-lg font-bold group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <div class="sm:col-span-10 space-y-1">
                        <div class="flex items-center justify-between">
                            <h4
                                class="font-bold text-slate-900 text-base tech-font group-hover:text-blue-600 transition-colors">
                                02.
                                Expedited Time-to-Permit</h4>
                            <span class="text-[12px] font-bold text-slate-400 uppercase tracking-widest">Pillar
                                II</span>
                        </div>
                        <p class="text-sm sm:text-sm text-slate-500 leading-relaxed  ">
                            Leveraging deep regional networks across Harris County & Fort Bend County to fast-track
                            development
                            approvals, cutting out typical board review friction.
                        </p>
                    </div>
                </div>



                <div
                    class="group bg-white rounded-2xl border border-slate-200/70 p-6 shadow-xs hover:shadow-xl hover:border-slate-300 transition-all duration-300 grid grid-cols-1 sm:grid-cols-12 gap-4 items-start">
                    <div
                        class="col-span-1 sm:col-span-2 w-12 h-12 rounded-xl bg-emerald-500/5 text-emerald-500 flex items-center justify-center text-lg font-bold group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-shield"></i>
                    </div>

                    <div class="col-span-1 sm:col-span-10 space-y-1">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 sm:gap-0">
                            <h4
                                class="font-bold text-slate-900 text-base tech-font group-hover:text-emerald-600 transition-colors">
                                03. Uncompromising Structural Rigor</h4>
                            <span
                                class="text-[12px] font-bold text-slate-400 uppercase tracking-widest self-start sm:self-auto">Pillar
                                III</span>
                        </div>
                        <p class="text-sm sm:text-sm text-slate-500 leading-relaxed  ">
                            From heavy loading configurations to drainage layouts, our calculations undergo meticulous
                            peer-validation
                            checks to protect project lifespans.
                        </p>
                    </div>
                </div>

                <div
                    class="group bg-white rounded-2xl border border-slate-200/70 p-6 shadow-xs hover:shadow-xl hover:border-slate-300 transition-all duration-300 grid grid-cols-1 sm:grid-cols-12 gap-4 items-start">
                    <div
                        class="sm:col-span-2 w-12 h-12 rounded-xl bg-purple-500/5 text-purple-500 flex items-center justify-center text-lg font-bold group-hover:bg-purple-600 group-hover:text-white transition-all duration-300">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div class="sm:col-span-10 space-y-1">
                        <div class="flex items-center justify-between">
                            <h4
                                class="font-bold text-slate-900 text-base tech-font group-hover:text-purple-600 transition-colors">
                                04.
                                Cost Integrity & Optimization</h4>
                            <span class="text-[12px] font-bold text-slate-400 uppercase tracking-widest">Pillar
                                IV</span>
                        </div>
                        <p class="text-sm sm:text-sm text-slate-500 leading-relaxed  ">
                            By resolving design clashes early inside virtual 3D models, we mitigate expensive material
                            overheads,
                            keeping developer risk margins lean and secure.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative w-full max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-[#ff5e15] rounded-3xl overflow-hidden shadow-xl border border-white/10">

            <div class="relative grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8 p-6 sm:p-8">

                <div
                    class="group flex flex-col items-center text-center p-4 rounded-2xl hover:bg-white/10 border border-transparent hover:border-white/20 transition-all duration-300">
                    <div
                        class="text-sm text-slate-900 uppercase font-bold tracking-wider mb-2 flex items-center gap-1.5 font-mono">
                        <i class="fa-solid fa-timeline text-[12px]"></i> Timeline
                    </div>
                    <div
                        class="tech-num text-4xl sm:text-5xl font-bold tracking-tight text-white group-hover:scale-105 transition-transform duration-300">
                        12<span class="text-slate-900 font-sans font-medium text-2xl sm:text-3xl ml-0.5">+</span>
                    </div>
                    <p class="text-sm sm:text-sm text-white/90   mt-2 max-w-[140px]">
                        Years of Industry Proven Results
                    </p>
                </div>

                <div
                    class="group flex flex-col items-center text-center p-4 rounded-2xl hover:bg-white/10 border border-transparent hover:border-white/20 transition-all duration-300 border-l border-white/20 lg:border-transparent max-lg:border-l-0">
                    <div
                        class="text-sm text-slate-900 uppercase font-bold tracking-wider mb-2 flex items-center gap-1.5 font-mono">
                        <i class="fa-solid fa-circle-check text-[12px]"></i> Success
                    </div>
                    <div
                        class="tech-num text-4xl sm:text-5xl font-bold tracking-tight text-white group-hover:scale-105 transition-transform duration-300">
                        110<span class="text-slate-900 font-sans font-medium text-2xl sm:text-3xl ml-0.5">+</span>
                    </div>
                    <p class="text-sm sm:text-sm text-white/90   mt-2 max-w-[140px]">
                        Completed Projects Delivered
                    </p>
                </div>

                <div
                    class="group flex flex-col items-center text-center p-4 rounded-2xl hover:bg-white/10 border border-transparent hover:border-white/20 transition-all duration-300 border-t lg:border-t-0 lg:border-l border-white/20">
                    <div
                        class="text-sm text-slate-900 uppercase font-bold tracking-wider mb-2 flex items-center gap-1.5 font-mono">
                        <i class="fa-solid fa-building text-[12px]"></i> Operations
                    </div>
                    <div
                        class="tech-num text-4xl sm:text-5xl font-bold tracking-tight text-white group-hover:scale-105 transition-transform duration-300">
                        13<span class="text-slate-900 font-sans font-medium text-2xl sm:text-3xl ml-0.5">+</span>
                    </div>
                    <p class="text-sm sm:text-sm text-white/90   mt-2 max-w-[140px]">
                        Full-Scale Constructions Built
                    </p>
                </div>

                <div
                    class="group flex flex-col items-center text-center p-4 rounded-2xl hover:bg-white/10 border border-transparent hover:border-white/20 transition-all duration-300 border-t border-l border-white/20 lg:border-t-0">
                    <div
                        class="text-sm text-slate-900 uppercase font-bold tracking-wider mb-2 flex items-center gap-1.5 font-mono">
                        <i class="fa-solid fa-spinner text-[12px] animate-spin"></i> Active
                    </div>
                    <div
                        class="tech-num text-4xl sm:text-5xl font-bold tracking-tight text-white group-hover:scale-105 transition-transform duration-300">
                        12<span class="text-slate-900 font-sans font-medium text-2xl sm:text-3xl ml-0.5">+</span>
                    </div>
                    <p class="text-sm sm:text-sm text-white/90   mt-2 max-w-[140px]">
                        Ongoing Projects In Execution
                    </p>
                </div>

            </div>
        </div>
    </section>




    <!-- <section class="relative w-full max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8  ">

    <div class="bg-slate-950 rounded-3xl">

      <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-4/5 h-24 bg-gradient-to-r from-orange-500/10 via-amber-500/5 to-blue-500/10 blur-3xl pointer-events-none ">
      </div>

      <div
        class="relative grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8 bg-slate-900/40 backdrop-blur-md border border-slate-800/80 p-6 sm:p-8 rounded-3xl shadow-2xl">

        <div
          class="group flex flex-col items-center text-center p-4 rounded-2xl hover:bg-slate-800/30 border border-transparent hover:border-slate-800/50 transition-all duration-300">
          <div class="text-sm text-orange-500/80 uppercase font-semibold tracking-wider mb-2 flex items-center gap-1.5">
            <i class="fa-solid fa-timeline text-[12px]"></i> Timeline
          </div>
          <div
            class="tech-num text-4xl sm:text-5xl font-bold tracking-tight text-white group-hover:scale-105 transition-transform duration-300">
            12<span class="text-orange-500 font-sans font-medium text-2xl sm:text-3xl ml-0.5">+</span>
          </div>
          <p class="text-sm sm:text-sm text-slate-400   mt-2 max-w-[140px]">
            Years of Industry Proven Results
          </p>
        </div>

        <div
          class="group flex flex-col items-center text-center p-4 rounded-2xl hover:bg-slate-800/30 border border-transparent hover:border-slate-800/50 transition-all duration-300 border-l lg:border-l border-slate-800/50 lg:border-transparent max-lg:border-l-0">
          <div class="text-sm text-amber-500/80 uppercase font-semibold tracking-wider mb-2 flex items-center gap-1.5">
            <i class="fa-solid fa-circle-check text-[12px]"></i> Success
          </div>
          <div
            class="tech-num text-4xl sm:text-5xl font-bold tracking-tight text-white group-hover:scale-105 transition-transform duration-300">
            110<span class="text-amber-500 font-sans font-medium text-2xl sm:text-3xl ml-0.5">+</span>
          </div>
          <p class="text-sm sm:text-sm text-slate-400   mt-2 max-w-[140px]">
            Completed Projects Delivered
          </p>
        </div>

        <div
          class="group flex flex-col items-center text-center p-4 rounded-2xl hover:bg-slate-800/30 border border-transparent hover:border-slate-800/50 transition-all duration-300 border-t lg:border-t-0 lg:border-l border-slate-800/50">
          <div
            class="text-sm text-emerald-500/80 uppercase font-semibold tracking-wider mb-2 flex items-center gap-1.5">
            <i class="fa-solid fa-building text-[12px]"></i> Operations
          </div>
          <div
            class="tech-num text-4xl sm:text-5xl font-bold tracking-tight text-white group-hover:scale-105 transition-transform duration-300">
            13<span class="text-emerald-500 font-sans font-medium text-2xl sm:text-3xl ml-0.5">+</span>
          </div>
          <p class="text-sm sm:text-sm text-slate-400   mt-2 max-w-[140px]">
            Full-Scale Constructions Built
          </p>
        </div>

        <div
          class="group flex flex-col items-center text-center p-4 rounded-2xl hover:bg-slate-800/30 border border-transparent hover:border-slate-800/50 transition-all duration-300 border-t border-l border-slate-800/50 lg:border-t-0">
          <div class="text-sm text-blue-400/80 uppercase font-semibold tracking-wider mb-2 flex items-center gap-1.5">
            <i class="fa-solid fa-spinner text-[12px] animate-spin"></i> Active
          </div>
          <div
            class="tech-num text-4xl sm:text-5xl font-bold tracking-tight text-white group-hover:scale-105 transition-transform duration-300">
            12<span class="text-blue-400 font-sans font-medium text-2xl sm:text-3xl ml-0.5">+</span>
          </div>
          <p class="text-sm sm:text-sm text-slate-400   mt-2 max-w-[140px]">
            Ongoing Projects In Execution
          </p>
        </div>

      </div>
    </div>
  </section> -->








    <section id="services" class="py-20 lg:py-24 bg-slate-50">
        <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <div class="text-sm font-bold text-blue-600 uppercase tracking-widest">What We Do</div>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 tracking-tight">Accurate Models, Engineered for
                    Execution</h2>
                <p class="text-slate-500  ">Get the critical diagnostic layouts, verified permitting profiles, and
                    robust 3D structural parameters needed to execute on-budget.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 border border-slate-200/60 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div
                            class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-file-invoice"></i></div>
                        <h3 class="text-xl font-bold text-slate-900">Construction Documents</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">High-accuracy 2D CAD layouts complete with
                            custom
                            notations, layout dimensions, and visual coordination arrays.</p>
                    </div>
                </div>
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 border border-slate-200/60 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div
                            class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-timeline"></i></div>
                        <h3 class="text-xl font-bold text-slate-900">Project Management</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">End-to-end site oversight that eliminates
                            workflow delays,
                            regulatory mistakes, or expensive materials overages.</p>
                    </div>
                </div>
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 border border-slate-200/60 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div
                            class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-cubes"></i></div>
                        <h3 class="text-xl font-bold text-slate-900">BIM & Design Integration</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Advanced 3D virtualizations allowing
                            multi-discipline
                            coordination before ground-breaking begins.</p>
                    </div>
                </div>
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 border border-slate-200/60 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div
                            class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-compass-drafting"></i></div>
                        <h3 class="text-xl font-bold text-slate-900">As-Built Drawings</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Precise dimensional recording of structural
                            changes
                            modifying the project blueprint mid-construction.</p>
                    </div>
                </div>
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 border border-slate-200/60 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div
                            class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-map-location-dot"></i></div>
                        <h3 class="text-xl font-bold text-slate-900">Surveying & Landscape</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Digital topography scans and strategic site
                            arrangements
                            prepared for fast local board clearance.</p>
                    </div>
                </div>
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 border border-slate-200/60 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div
                            class="w-12 h-12 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center text-xl">
                            <i class="fa-solid fa-trowel-bricks"></i></div>
                        <h3 class="text-xl font-bold text-slate-900">Civil & Structural Engineering</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Comprehensive loading analysis, foundational
                            design, and
                            drainage systems suited for tough site environments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full px-4 sm:px-6 lg:px-8 py-16 bg-slate-200 text-slate-800">
        <div class="max-w-[1500px] mx-auto space-y-6 text-center mb-12 px-4 sm:px-6 lg:px-8">
            <div
                class="flex flex-col sm:flex-row items-center justify-between gap-6 p-6 mb-12 border border-slate-200/80 bg-slate-50/50 rounded-2xl">
                <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
                    <div
                        class="w-12 h-12 rounded-xl bg-white border border-slate-200 flex items-center justify-center shadow-xs">
                        <svg class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill="#4285F4"
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                            <path fill="#34A853"
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                            <path fill="#FBBC05"
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" />
                            <path fill="#EA4335"
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 2.47 2.18 5.34l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 tracking-tight font-mono uppercase">Client Feedback
                            Matrix</h3>
                        <div class="flex items-center justify-center sm:justify-start gap-2 mt-1">
                            <span class="text-xl font-bold text-slate-900 font-mono">4.9</span>
                            <div class="flex text-amber-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="text-sm text-slate-400 font-mono">(Based on 24+ Field Reviews)</span>
                        </div>
                    </div>
                </div>

                <a href="#write-review" target="_blank"
                    class="inline-flex items-center justify-center border border-slate-200 hover:border-slate-300 bg-white text-slate-700 hover:text-slate-900 font-mono text-sm uppercase tracking-wider h-11 px-5 rounded-xl transition duration-300 shadow-xs group">
                    <i class="fa-brands fa-google mr-2 text-slate-400 group-hover:text-blue-500 transition-colors"></i>
                    Leave a Review
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div
                    class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <div class="flex text-amber-500 text-sm gap-0.5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <i class="fa-brands fa-google text-sm text-slate-300"></i>
                        </div>

                        <p class="text-sm sm:text-sm text-slate-600   leading-relaxed">
                            "Exceptional precision throughout our entire commercial permitting workflow. Their 3D model
                            coordination
                            caught multiple alignment conflicts before we broke ground, saving thousands in materials."
                        </p>
                    </div>

                    <div class="flex items-center space-x-3 pt-6 mt-6 border-t border-slate-100">
                        <div
                            class="w-9 h-9 rounded-full bg-slate-100 border border-slate-200 text-slate-600 flex items-center justify-center text-sm font-bold font-mono">
                            JM
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900 flex items-center gap-1.5 font-mono uppercase">
                                James Miller
                                <i class="fa-solid fa-circle-check text-emerald-500 text-[12px]"
                                    title="Verified Reviewer"></i>
                            </div>
                            <span class="text-[12px] text-slate-400 font-mono uppercase tracking-wider">Project
                                Developer</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <div class="flex text-amber-500 text-sm gap-0.5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <i class="fa-brands fa-google text-sm text-slate-300"></i>
                        </div>

                        <p class="text-sm sm:text-sm text-slate-600   leading-relaxed">
                            "Navigating Fort Bend County zoning clearance used to bottleneck our timelines. This
                            engineering team
                            compiled flawless documentation packets and pushed approvals through without friction."
                        </p>
                    </div>

                    <div class="flex items-center space-x-3 pt-6 mt-6 border-t border-slate-100">
                        <div
                            class="w-9 h-9 rounded-full bg-slate-100 border border-slate-200 text-slate-600 flex items-center justify-center text-sm font-bold font-mono">
                            SR
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900 flex items-center gap-1.5 font-mono uppercase">
                                Sarah Ramirez
                                <i class="fa-solid fa-circle-check text-emerald-500 text-[12px]"
                                    title="Verified Reviewer"></i>
                            </div>
                            <span class="text-[12px] text-slate-400 font-mono uppercase tracking-wider">General
                                Contractor</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-xs flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <div class="flex text-amber-500 text-sm gap-0.5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <i class="fa-brands fa-google text-sm text-slate-300"></i>
                        </div>

                        <p class="text-sm sm:text-sm text-slate-600   leading-relaxed">
                            "Uncompromising calculation rigor. We brought them a highly complex structural loading
                            variance problem
                            and
                            their engineers delivered a certified, cost-effective modification strategy."
                        </p>
                    </div>

                    <div class="flex items-center space-x-3 pt-6 mt-6 border-t border-slate-100">
                        <div
                            class="w-9 h-9 rounded-full bg-slate-100 border border-slate-200 text-slate-600 flex items-center justify-center text-sm font-bold font-mono">
                            DB
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900 flex items-center gap-1.5 font-mono uppercase">
                                David Brooks
                                <i class="fa-solid fa-circle-check text-emerald-500 text-[12px]"
                                    title="Verified Reviewer"></i>
                            </div>
                            <span class="text-[12px] text-slate-400 font-mono uppercase tracking-wider">Commercial
                                Architect</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   <?php include 'footer.php'; ?>