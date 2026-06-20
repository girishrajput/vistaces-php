<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Consulting Engineers | Premium Engineering & Construction Management</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-600 selection:text-white">

    <div class="bg-[#0091cc] text-slate-400 text-sm py-2 px-4 border-b border-slate-800 hidden md:block">
        <div class="max-w-[1500px] mx-auto flex justify-between items-center px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-4">
                <a href="tel:8324900982" class="text-white font-medium hover:text-blue-400 transition"><i
                        class="fa-solid fa-phone text-white mr-2"></i>(832)-490-0982</a>
                <span class="text-white">|</span>
                <span class="bg-blue-500/10 text-white px-2 py-0.5 rounded border border-blue-500/20 font-mono tracking-wide">24/7 Services</span>
            </div>

            <div class="flex items-center space-x-6">
                <div class="flex gap-6">
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <header class="sticky top-0 z-50 bg-white border-b border-slate-200/80">
        <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="index.php" class="flex items-center space-x-3 group">
                <img src="images/logo.png" alt="Vista Consulting Engineers"
                    class="h-16 w-auto transition-transform group-hover:scale-105">
            </a>

            <nav class="hidden lg:flex items-center space-x-8 text-sm font-medium text-slate-600 h-full">
                <a href="index.php" class="text-[#ff5e15] transition">Home</a>
                <a href="who-we-are.php" class="hover:text-[#ff5e15] transition">Who We Are</a>
                
                <div class="relative group flex items-center h-full cursor-pointer">
                    <a href="services.php" class="hover:text-[#ff5e15] transition flex items-center gap-1 py-4">
                        Services 
                        <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-300 group-hover:rotate-180"></i>
                    </a>
                    
                    <div class="absolute top-[100%] left-1/2 -translate-x-1/2 w-64 bg-white border border-slate-200 shadow-xl rounded-xl py-3 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 z-50">

                    <a href="civil-engineering.php" class="flex items-center gap-3 px-4 py-2.5 text-slate-700 hover:bg-slate-50 hover:text-[#ff5e15] transition">                            
                            <span>Civil Engineering</span>
                        </a>
                        <a href="structural-engineering.php" class="flex items-center gap-3 px-4 py-2.5 text-slate-700 hover:bg-slate-50 hover:text-[#ff5e15] transition">                            
                            <span>Structural Engineering</span>
                        </a>
                        <a href="project-management.php" class="flex items-center gap-3 px-4 py-2.5 text-slate-700 hover:bg-slate-50 hover:text-[#ff5e15] transition">
                            <span>Project Management</span>
                        </a>
                        <a href="construction-documents.php" class="flex items-center gap-3 px-4 py-2.5 text-slate-700 hover:bg-slate-50 hover:text-[#ff5e15] transition">                           
                            <span>Construction Documents</span>
                        </a>
                        <a href="bim-design-integration.php" class="flex items-center gap-3 px-4 py-2.5 text-slate-700 hover:bg-slate-50 hover:text-[#ff5e15] transition">                           
                            <span>BIM and Design Integration</span>
                        </a>
                        <a href="surveying-landscape-design.php" class="flex items-center gap-3 px-4 py-2.5 text-slate-700 hover:bg-slate-50 hover:text-[#ff5e15] transition">                           
                            <span>Surveying &amp; Landscape</span>
                        </a>
                        <a href="as-built-drawings.php" class="flex items-center gap-3 px-4 py-2.5 text-slate-700 hover:bg-slate-50 hover:text-[#ff5e15] transition">                            
                            <span>As-Built Drawings</span>
                        </a>
                    </div>
                </div>
                <a href="projects.php" class="hover:text-[#ff5e15] transition">Project</a>
                <a href="blog.php" class="hover:text-[#ff5e15] transition">Blog</a>
                <a href="contact.php" class="hover:text-[#ff5e15] transition">Contact</a>
                <a href="faqs.php" class="hover:text-[#ff5e15] transition">FAQs</a>
            </nav>

            <div class="hidden sm:flex items-center space-x-4">
                <a href="contact.php"
                    class="w-full md:w-auto inline-flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm uppercase tracking-wider font-mono h-12 px-8 rounded-lg transition duration-300 shadow-lg shadow-orange-500/10 group">
                    Book Consultation
                    <i class="fa-solid fa-arrow-right ml-2 text-[12px] group-hover:translate-x-0.5 transition-transform"></i>
                </a>
            </div>

            <button class="lg:hidden p-2 text-slate-600 hover:text-slate-900">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
    </header>