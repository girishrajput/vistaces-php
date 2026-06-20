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
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-accent {
            background: linear-gradient(135deg, #0b2a4a 0%, #1a4b6d 100%);
        }

        .gradient-cta {
            background: linear-gradient(135deg, #1a4b6d 0%, #2a7a9c 100%);
        }

        .gradient-hero {
            background: linear-gradient(135deg, #0b2a4a 0%, #0f3a5e 100%);
        }

        .gradient-gold {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        }

        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-scale:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(11, 42, 74, 0.25);
        }

        .service-tag {
            transition: all 0.25s ease;
        }

        .service-tag:hover {
            background: #1a4b6d;
            color: #ffffff;
            transform: translateX(4px);
        }

        .quick-link {
            transition: all 0.2s ease;
            position: relative;
        }

        .quick-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #fbbf24;
            transition: width 0.3s ease;
        }

        .quick-link:hover::after {
            width: 100%;
        }

        .quick-link:hover {
            color: #fbbf24;
        }

        .contact-icon {
            transition: all 0.3s ease;
        }

        .contact-item:hover .contact-icon {
            color: #fbbf24;
            transform: scale(1.1);
        }

        .border-glow {
            border-image: linear-gradient(135deg, #1a4b6d, #fbbf24) 1;
        }

        .social-icon {
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .social-icon:hover {
            background: #ff6900;
            color: #ffffff !important;
            transform: translateY(-3px);
            border-color: #ff6900;
        }

        .cta-pulse {
            animation: pulse-soft 2.5s ease-in-out infinite;
        }

        @keyframes pulse-soft {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(251, 191, 36, 0.3);
            }

            50% {
                box-shadow: 0 0 0 16px rgba(251, 191, 36, 0);
            }
        }

        .footer-divider {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.08), transparent);
            height: 1px;
        }

        /* scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0b2a4a;
        }

        ::-webkit-scrollbar-thumb {
            background: #fbbf24;
            border-radius: 8px;
        }

        .gold-glow {
            box-shadow: 0 0 30px rgba(251, 191, 36, 0.15);
        }

        .nav-link {
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #fbbf24;
        }

        .badge-gold {
            background: rgba(251, 191, 36, 0.12);
            border: 1px solid rgba(251, 191, 36, 0.2);
            color: #fbbf24;
        }

        .btn-gold {
            background: #fbbf24;
            color: #0b2a4a;
            transition: all 0.3s ease;
        }

        .btn-gold:hover {
            background: #f59e0b;
            color: #0b2a4a;
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(251, 191, 36, 0.25);
        }

        .btn-outline-gold {
            border: 1px solid rgba(251, 191, 36, 0.3);
            color: #fbbf24;
            transition: all 0.3s ease;
        }

        .btn-outline-gold:hover {
            background: #fbbf24;
            color: #0b2a4a;
            border-color: #fbbf24;
        }

        .text-gold {
            color: #fbbf24;
        }

        .bg-gold-soft {
            background: rgba(251, 191, 36, 0.06);
        }

        .border-gold-soft {
            border-color: rgba(251, 191, 36, 0.15);
        }

        .hover-gold {
            transition: color 0.2s ease;
        }

        .hover-gold:hover {
            color: #fbbf24;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(11, 42, 74, 0.15);
            border-color: rgba(251, 191, 36, 0.3);
        }

        .indicator-bar {
            transition: all 0.3s ease;
        }

        .indicator-bar.active {
            background: #fbbf24;
            width: 32px;
        }

        .indicator-bar.inactive {
            background: rgba(255, 255, 255, 0.25);
            width: 12px;
        }

        .indicator-bar.inactive:hover {
            background: rgba(255, 255, 255, 0.4);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-600 selection:text-white">

    <div class="bg-[#0091cc] text-slate-400 text-sm py-2 px-4 border-b border-slate-800 hidden md:block">
        <div class="max-w-[1500px] mx-auto flex justify-between items-center  px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-4">
                <a href="tel:8324900982" class="text-white font-medium hover:text-blue-400 transition"><i
                        class="fa-solid fa-phone text-white mr-2"></i>(832)-490-0982</a>
                <span class="text-white">|</span>
                <span
                    class="bg-blue-500/10 text-white px-2 py-0.5 rounded border border-blue-500/20 font-mono tracking-wide">24/7
                    Services</span>
            </div>

            <div class="flex items-center space-x-6">
                <div class="flex gap-6">
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                    <!-- <a href="#" class="text-white"><i class="fab fa-x"></i></a> -->
                    <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

        </div>
    </div>

    <header class="sticky top-0 z-50 bg-white border-b border-slate-200/80 index-50">
        <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center space-x-3 group">
                <img src="http://localhost/vistaces-php/images/logo.png" alt="Vista Consulting Engineers"
                    class="h-16 w-auto transition-transform group-hover:scale-105">
            </a>

            <nav class="hidden lg:flex items-center space-x-8 text-sm font-medium text-slate-600">
                <a href="#" class="text-[#ff5e15] transition">Home</a>
                <a href="#about" class="hover:text-[#ff5e15] transition">Who We Are</a>
                <a href="#services" class="hover:text-[#ff5e15] transition">Services</a>
                <a href="#bim-advantage" class="hover:text-[#ff5e15] transition">Project</a>
                <a href="#blog" class="hover:text-[#ff5e15] transition">Blog</a>
                <a href="#contact" class="hover:text-[#ff5e15] transition">Contact</a>
                <a href="#faqs" class="hover:text-[#ff5e15] transition">FAQs</a>
            </nav>

            <div class="hidden sm:flex items-center space-x-4">
                <a href="#contact"
                    class="w-full md:w-auto inline-flex items-center justify-center bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm uppercase tracking-wider font-mono h-12 px-8 rounded-lg transition duration-300 shadow-lg shadow-orange-500/10 group">
                    Book Consultation
                    <i
                        class="fa-solid fa-arrow-right ml-2 text-[12px] group-hover:translate-x-0.5 transition-transform"></i>
                </a>
            </div>

            <button class="lg:hidden p-2 text-slate-600 hover:text-slate-900">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
    </header>
