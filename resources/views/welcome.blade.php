<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OseasSoft - Soluciones Tecnológicas de Alto Impacto</title>
        <meta name="description" content="Desarrollamos software a medida para comercios: tiendas, restaurantes, peluquerías y más. Sistema POS, inventario, ventas online.">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <style>
            body { font-family: 'Outfit', sans-serif; }
            
            /* Demo Cards */
            .demo-card {
                background: linear-gradient(145deg, rgba(30, 41, 59, 0.8), rgba(15, 23, 42, 0.9));
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 20px;
                padding: 2rem;
                transition: all 0.4s;
                position: relative;
                overflow: hidden;
            }
            .demo-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(90deg, var(--accent-color), var(--accent-secondary));
                transform: scaleX(0);
                transition: transform 0.4s;
            }
            .demo-card:hover {
                transform: translateY(-8px);
                border-color: var(--accent-color);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            }
            .demo-card:hover::before {
                transform: scaleX(1);
            }
            .demo-icon {
                width: 64px;
                height: 64px;
                border-radius: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 1.5rem;
                font-size: 1.75rem;
            }
            .demo-card h4 {
                font-size: 1.25rem;
                font-weight: 700;
                color: white;
                margin-bottom: 0.5rem;
            }
            .demo-card p {
                color: #94a3b8;
                font-size: 0.9rem;
                margin-bottom: 1.5rem;
                line-height: 1.6;
            }
            .demo-btn {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                color: var(--accent-color);
                font-weight: 600;
                font-size: 0.9rem;
                transition: gap 0.3s;
            }
            .demo-card:hover .demo-btn {
                gap: 0.75rem;
            }
            
            /* Accent Colors */
            .demo-ropa { --accent-color: #ec4899; --accent-secondary: #f472b6; }
            .demo-restaurante { --accent-color: #f97316; --accent-secondary: #fb923c; }
            .demo-peluqueria { --accent-color: #a855f7; --accent-secondary: #c084fc; }
            .demo-kiosco { --accent-color: #22c55e; --accent-secondary: #4ade80; }
            .demo-profesional { --accent-color: #3b82f6; --accent-secondary: #60a5fa; }
            
            /* Badge */
            .badge-live {
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: #22c55e;
                color: white;
                font-size: 0.7rem;
                font-weight: 700;
                padding: 0.25rem 0.5rem;
                border-radius: 20px;
                text-transform: uppercase;
            }
            .badge-soon {
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: #64748b;
                color: white;
                font-size: 0.7rem;
                font-weight: 700;
                padding: 0.25rem 0.5rem;
                border-radius: 20px;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body class="antialiased bg-slate-900 text-slate-100">
        
        <!-- Navbar -->
        <nav class="fixed w-full z-50 bg-slate-900/80 backdrop-blur-md border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <a href="#" class="flex-shrink-0">
                        <img src="{{ asset('images/logo.png') }}" alt="OseasSoft" class="h-10">
                    </a>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-8">
                            <a href="#hero" class="hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                            <a href="#services" class="hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">Servicios</a>
                            <a href="#demos" class="hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">Demos</a>
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
                        Sistema de gestión integral para comercios: ventas, inventario, clientes, reportes y tienda online. Todo en una plataforma.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#demos" class="px-8 py-4 bg-indigo-600 rounded-full font-bold text-lg hover:bg-indigo-700 transition-all shadow-xl shadow-indigo-500/20 transform hover:-translate-y-1">
                            Ver Demos en Vivo
                        </a>
                        <a href="#contact" class="px-8 py-4 bg-slate-800 rounded-full font-bold text-lg hover:bg-slate-700 transition-all border border-slate-700">
                            Solicitar Cotización
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

        <!-- Demos Section -->
        <div id="demos" class="py-24 bg-gradient-to-b from-slate-900 to-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="text-indigo-400 uppercase tracking-widest text-sm font-bold">Prueba Gratis</span>
                    <h2 class="text-4xl font-extrabold text-white mt-2 mb-4">Demos en Vivo</h2>
                    <p class="text-slate-400 max-w-2xl mx-auto">
                        Explora cómo funciona nuestro sistema en diferentes tipos de negocios. Cada demo está completamente funcional.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Demo 1: Tienda de Ropa -->
                    <a href="https://amapola.oseassoft.com/shop" target="_blank" class="demo-card demo-ropa">
                        <span class="badge-live">En Vivo</span>
                        <div class="demo-icon" style="background: rgba(236, 72, 153, 0.15);">
                            👗
                        </div>
                        <h4>Tienda de Ropa</h4>
                        <p>E-commerce completo con catálogo, carrito de compras, checkout con MercadoPago y gestión de inventario.</p>
                        <span class="demo-btn">
                            Ver Demo
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </a>
                    
                    <!-- Demo 2: Restaurante -->
                    <a href="https://restaurante.oseassoft.com" target="_blank" class="demo-card demo-restaurante">
                        <span class="badge-soon">Próximamente</span>
                        <div class="demo-icon" style="background: rgba(249, 115, 22, 0.15);">
                            🍽️
                        </div>
                        <h4>Restaurante</h4>
                        <p>Control de mesas, comandas a cocina, delivery, reservas online y reportes de ventas por turno.</p>
                        <span class="demo-btn">
                            Ver Demo
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </a>
                    
                    <!-- Demo 3: Peluquería/Spa -->
                    <a href="https://belle.oseassoft.com" target="_blank" class="demo-card demo-peluqueria">
                        <span class="badge-soon">Próximamente</span>
                        <div class="demo-icon" style="background: rgba(168, 85, 247, 0.15);">
                            💇
                        </div>
                        <h4>Peluquería & Spa</h4>
                        <p>Agenda de turnos, fichas de clientes, catálogo de servicios y venta de productos de belleza.</p>
                        <span class="demo-btn">
                            Ver Demo
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </a>
                    
                    <!-- Demo 4: Kiosco/Almacén -->
                    <a href="https://kiosco.oseassoft.com" target="_blank" class="demo-card demo-kiosco">
                        <span class="badge-soon">Próximamente</span>
                        <div class="demo-icon" style="background: rgba(34, 197, 94, 0.15);">
                            🏪
                        </div>
                        <h4>Kiosco & Almacén</h4>
                        <p>Ventas rápidas con lector de códigos, control de stock, proveedores y alertas de reposición.</p>
                        <span class="demo-btn">
                            Ver Demo
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </a>
                    
                    <!-- Demo 5: Servicio Profesional -->
                    <a href="https://consultora.oseassoft.com" target="_blank" class="demo-card demo-profesional">
                        <span class="badge-soon">Próximamente</span>
                        <div class="demo-icon" style="background: rgba(59, 130, 246, 0.15);">
                            💼
                        </div>
                        <h4>Servicios Profesionales</h4>
                        <p>Gestión de clientes, facturación de servicios, presupuestos, seguimiento de proyectos y cobros.</p>
                        <span class="demo-btn">
                            Ver Demo
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </a>
                    
                </div>
                
                <div class="text-center mt-12">
                    <p class="text-slate-500 text-sm">
                        ¿Tu negocio es diferente? <a href="#contact" class="text-indigo-400 hover:underline">Contáctanos</a> y te mostramos cómo adaptamos el sistema a tu rubro.
                    </p>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div id="services" class="py-24 bg-slate-800/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="text-indigo-400 uppercase tracking-widest text-sm font-bold">Nuestros Servicios</span>
                    <h2 class="text-4xl font-extrabold text-white mt-2">Lo Que Incluye</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Service 1 -->
                    <div class="p-6 bg-slate-900 rounded-2xl border border-slate-700 hover:border-indigo-500/50 transition-colors group text-center">
                        <div class="w-14 h-14 bg-indigo-500/10 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-indigo-500/20 transition-colors">
                            <svg class="w-7 h-7 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Punto de Venta</h4>
                        <p class="text-slate-400 text-sm">Sistema POS rápido para ventas presenciales con múltiples medios de pago.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="p-6 bg-slate-900 rounded-2xl border border-slate-700 hover:border-cyan-500/50 transition-colors group text-center">
                        <div class="w-14 h-14 bg-cyan-500/10 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-cyan-500/20 transition-colors">
                            <svg class="w-7 h-7 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Inventario</h4>
                        <p class="text-slate-400 text-sm">Control de stock, alertas de reposición, variantes de producto y proveedores.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="p-6 bg-slate-900 rounded-2xl border border-slate-700 hover:border-purple-500/50 transition-colors group text-center">
                        <div class="w-14 h-14 bg-purple-500/10 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-purple-500/20 transition-colors">
                            <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Tienda Online</h4>
                        <p class="text-slate-400 text-sm">E-commerce integrado con catálogo, carrito y pagos con MercadoPago.</p>
                    </div>

                    <!-- Service 4 -->
                    <div class="p-6 bg-slate-900 rounded-2xl border border-slate-700 hover:border-pink-500/50 transition-colors group text-center">
                        <div class="w-14 h-14 bg-pink-500/10 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-pink-500/20 transition-colors">
                            <svg class="w-7 h-7 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Reportes</h4>
                        <p class="text-slate-400 text-sm">Métricas de ventas, productos más vendidos, clientes frecuentes y más.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="py-24 relative overflow-hidden">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="bg-slate-800 rounded-3xl p-8 md:p-12 border border-slate-700 shadow-2xl">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-white mb-4">¿Listo para digitalizar tu negocio?</h2>
                        <p class="text-slate-400">Cuéntanos sobre tu comercio y te contactaremos para una demo personalizada.</p>
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
                            <label class="block text-sm font-medium text-slate-300 mb-2">Tipo de Negocio</label>
                            <select class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors">
                                <option value="">Selecciona tu rubro...</option>
                                <option value="ropa">Tienda de Ropa / Indumentaria</option>
                                <option value="restaurante">Restaurante / Bar / Café</option>
                                <option value="belleza">Peluquería / Spa / Estética</option>
                                <option value="kiosco">Kiosco / Almacén / Despensa</option>
                                <option value="servicios">Servicios Profesionales</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Mensaje</label>
                            <textarea rows="4" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" placeholder="Cuéntanos sobre tu negocio..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 rounded-lg transition-all shadow-lg shadow-indigo-500/25">
                            Solicitar Demo
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
