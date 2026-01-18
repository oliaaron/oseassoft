<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OseasSoft - Soluciones Tecnológicas de Alto Impacto</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <style>
            body { font-family: 'Outfit', sans-serif; }
        </style>
    </head>
    <body class="antialiased bg-slate-900 text-slate-100">
        
        <!-- Navbar -->
        <nav class="fixed w-full z-50 bg-slate-900/80 backdrop-blur-md border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex-shrink-0 font-bold text-2xl tracking-tighter text-white">
                        Oseas<span class="text-indigo-500">Soft</span>.
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-8">
                            <a href="#hero" class="hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                            <a href="#services" class="hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">Servicios</a>
                            <a href="#about" class="hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">Nosotros</a>
                            <a href="#contact" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-full text-sm font-medium transition-all shadow-lg hover:shadow-indigo-500/30">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div id="hero" class="relative overflow-hidden pt-32 pb-20 lg:pt-48 lg:pb-32">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-8 leading-tight">
                        Transformamos Ideas en <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">Software de Élite</span>
                    </h1>
                    <p class="mt-4 text-xl text-slate-400 max-w-2xl mx-auto mb-10">
                        Desarrollamos aplicaciones web y móviles a medida, enfocadas en escalabilidad, diseño premium y experiencia de usuario inigualable.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact" class="px-8 py-4 bg-indigo-600 rounded-full font-bold text-lg hover:bg-indigo-700 transition-all shadow-xl shadow-indigo-500/20 transform hover:-translate-y-1">
                            Iniciar Proyecto
                        </a>
                        <a href="#services" class="px-8 py-4 bg-slate-800 rounded-full font-bold text-lg hover:bg-slate-700 transition-all border border-slate-700">
                            Explorar Servicios
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Background Elements -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10 opacity-20">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-indigo-600 rounded-full blur-3xl filter mix-blend-multiply animate-blob"></div>
                <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-cyan-600 rounded-full blur-3xl filter mix-blend-multiply animate-blob animation-delay-2000"></div>
                <div class="absolute -bottom-32 left-1/3 w-96 h-96 bg-purple-600 rounded-full blur-3xl filter mix-blend-multiply animate-blob animation-delay-4000"></div>
            </div>
        </div>

        <!-- Services Section -->
        <div id="services" class="py-24 bg-slate-800/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-indigo-400 uppercase tracking-widest text-sm mb-2">Nuestros Servicios</h2>
                    <h3 class="text-4xl font-extrabold text-white">Lo Que Hacemos Mejor</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="p-8 bg-slate-900 rounded-2xl border border-slate-700 hover:border-indigo-500/50 transition-colors group">
                        <div class="w-14 h-14 bg-indigo-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-500/20 transition-colors">
                            <svg class="w-8 h-8 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Desarrollo Web</h4>
                        <p class="text-slate-400 leading-relaxed">Sitios corporativos, e-commerce y aplicaciones web progresivas (PWA) construidas con Laravel, React y tecnologías modernas.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="p-8 bg-slate-900 rounded-2xl border border-slate-700 hover:border-cyan-500/50 transition-colors group">
                        <div class="w-14 h-14 bg-cyan-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-cyan-500/20 transition-colors">
                            <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Apps Móviles</h4>
                        <p class="text-slate-400 leading-relaxed">Experiencias nativas y multiplataforma para iOS y Android que conectan con tus clientes dondequiera que estén.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="p-8 bg-slate-900 rounded-2xl border border-slate-700 hover:border-purple-500/50 transition-colors group">
                        <div class="w-14 h-14 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-purple-500/20 transition-colors">
                            <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Consultoría TI</h4>
                        <p class="text-slate-400 leading-relaxed">Optimizamos tus procesos de negocio mediante auditoría técnica, transformación digital y automatización.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="py-24 relative overflow-hidden">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="bg-slate-800 rounded-3xl p-8 md:p-12 border border-slate-700 shadow-2xl">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-white mb-4">¿Listo para innovar?</h2>
                        <p class="text-slate-400">Cuéntanos sobre tu proyecto y te contactaremos a la brevedad.</p>
                    </div>
                    
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-300 mb-2">Nombre</label>
                                <input type="text" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" placeholder="Tu nombre">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                                <input type="email" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" placeholder="tu@email.com">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Mensaje</label>
                            <textarea rows="4" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" placeholder="Descríbenos tu idea..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 rounded-lg transition-all shadow-lg shadow-indigo-500/25">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <footer class="bg-slate-900 py-12 border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-slate-500 text-sm">
                    &copy; {{ date('Y') }} OseasSoft. Todos los derechos reservados.
                </p>
            </div>
        </footer>

    </body>
</html>
