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
        /* Demo Modal */
        .demo-modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(6px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        .demo-modal-overlay.active { display: flex; }
        .demo-modal {
            background: linear-gradient(145deg, #1e293b, #0f172a);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 24px;
            padding: 2.5rem;
            width: 90%;
            max-width: 440px;
            position: relative;
            animation: modalIn 0.3s ease;
        }
        @keyframes modalIn {
            from { opacity: 0; transform: scale(0.92) translateY(20px); }
            to   { opacity: 1; transform: scale(1) translateY(0); }
        }
        .demo-modal h3 { font-size: 1.4rem; font-weight: 800; margin-bottom: 0.25rem; }
        .demo-modal .subtitle { color: #94a3b8; font-size: 0.9rem; margin-bottom: 1.5rem; }
        .cred-box {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            padding: 1rem 1.25rem;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        .cred-label { font-size: 0.75rem; color: #64748b; text-transform: uppercase; letter-spacing: 0.05em; }
        .cred-value { font-family: monospace; font-size: 1rem; font-weight: 700; color: #e2e8f0; }
        .copy-btn {
            background: rgba(99,102,241,0.2);
            border: 1px solid rgba(99,102,241,0.4);
            color: #a5b4fc;
            border-radius: 8px;
            padding: 0.3rem 0.6rem;
            font-size: 0.75rem;
            cursor: pointer;
            transition: all 0.2s;
            flex-shrink: 0;
        }
        .copy-btn:hover { background: rgba(99,102,241,0.4); }
        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(255,255,255,0.05);
            border: none;
            color: #94a3b8;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            cursor: pointer;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-close:hover { background: rgba(255,255,255,0.1); color: white; }
        .go-demo-btn {
            display: block;
            width: 100%;
            margin-top: 1.5rem;
            padding: 0.875rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 12px;
            text-align: center;
            font-weight: 700;
            font-size: 1rem;
            color: white;
            text-decoration: none;
            transition: opacity 0.2s;
        }
        .go-demo-btn:hover { opacity: 0.9; }
        .btn-probar {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            margin-top: 0.75rem;
            padding: 0.5rem 1rem;
            background: rgba(99,102,241,0.15);
            border: 1px solid rgba(99,102,241,0.35);
            border-radius: 8px;
            color: #a5b4fc;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-probar:hover { background: rgba(99,102,241,0.3); color: white; }
    </style>
    </head>
    <body class="antialiased bg-slate-900 text-slate-100">

        <!-- Demo Modal -->
        <div class="demo-modal-overlay" id="demoModal">
            <div class="demo-modal">
                <button class="modal-close" onclick="closeDemoModal()">✕</button>
                <div id="modalAccentBar" style="height:4px; border-radius:4px; margin-bottom:1.5rem; background: linear-gradient(90deg,#6366f1,#8b5cf6);"></div>
                <h3 id="modalTitle">Demo</h3>
                <p class="subtitle">Usá estas credenciales para explorar el sistema libremente.</p>
                <div class="cred-box">
                    <div>
                        <div class="cred-label">Usuario</div>
                        <div class="cred-value" id="modalEmail">—</div>
                    </div>
                    <button class="copy-btn" onclick="copyText('modalEmail', this)">Copiar</button>
                </div>
                <div class="cred-box">
                    <div>
                        <div class="cred-label">Contraseña</div>
                        <div class="cred-value" id="modalPass">—</div>
                    </div>
                    <button class="copy-btn" onclick="copyText('modalPass', this)">Copiar</button>
                </div>
                <a href="#" id="modalLink" target="_blank" class="go-demo-btn">Ir al Demo →</a>
            </div>
        </div>
        
        <!-- Navbar -->
        <nav class="fixed w-full z-50 bg-slate-900/80 backdrop-blur-md border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <a href="#" class="flex-shrink-0">
                        <img src="{{ asset('images/logo.png') }}" alt="OseasSoft" style="height: 52px; max-width: 260px; width: auto; object-fit: contain;">
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
                    <div class="demo-card demo-ropa" style="cursor:default;">
                        <span class="badge-live">En Vivo</span>
                        <div class="demo-icon" style="background: rgba(236, 72, 153, 0.15);">
                            👗
                        </div>
                        <h4>Tienda de Ropa</h4>
                        <p>E-commerce completo con catálogo, carrito de compras, checkout con MercadoPago y gestión de inventario.</p>
                        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
                            <a href="http://tienda.oseassoft.com" target="_blank" class="demo-btn">
                                Ver Demo
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                            <button class="btn-probar" onclick="openDemoModal('Tienda de Ropa', 'demo@tienda.oseassoft.com', 'Demo2025!', 'http://tienda.oseassoft.com', 'linear-gradient(90deg,#ec4899,#f472b6)')">
                                🔑 Probar Demo
                            </button>
                        </div>
                    </div>
                    
                    <!-- Demo 2: Restaurante -->
                    <div class="demo-card demo-restaurante" style="cursor:default;">
                        <span class="badge-live">En Vivo</span>
                        <div class="demo-icon" style="background: rgba(249, 115, 22, 0.15);">
                            🍽️
                        </div>
                        <h4>Restaurante</h4>
                        <p>Control de mesas, comandas a cocina, delivery, reservas online y reportes de ventas por turno.</p>
                        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
                            <a href="http://restaurante.oseassoft.com" target="_blank" class="demo-btn">
                                Ver Demo
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                            <button class="btn-probar" onclick="openDemoModal('Restaurante', 'demo@restaurante.oseassoft.com', 'Demo2025!', 'http://restaurante.oseassoft.com', 'linear-gradient(90deg,#f97316,#fb923c)')">
                                🔑 Probar Demo
                            </button>
                        </div>
                    </div>
                    
                    <!-- Demo 3: Peluquería/Spa -->
                    <div class="demo-card demo-peluqueria" style="cursor:default;">
                        <span class="badge-live">En Vivo</span>
                        <div class="demo-icon" style="background: rgba(168, 85, 247, 0.15);">
                            💇
                        </div>
                        <h4>Peluquería & Spa</h4>
                        <p>Agenda de turnos, fichas de clientes, catálogo de servicios y venta de productos de belleza.</p>
                        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
                            <a href="http://salon.oseassoft.com" target="_blank" class="demo-btn">
                                Ver Demo
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                            <button class="btn-probar" onclick="openDemoModal('Peluquería & Spa', 'demo@salon.oseassoft.com', 'Demo2025!', 'http://salon.oseassoft.com', 'linear-gradient(90deg,#a855f7,#c084fc)')">
                                🔑 Probar Demo
                            </button>
                        </div>
                    </div>
                    
                    <!-- Demo 4: Kiosco/Almacén -->
                    <div class="demo-card demo-kiosco" style="cursor:default;">
                        <span class="badge-live">En Vivo</span>
                        <div class="demo-icon" style="background: rgba(34, 197, 94, 0.15);">
                            🏪
                        </div>
                        <h4>Kiosco & Almacén</h4>
                        <p>Ventas rápidas con lector de códigos, control de stock, proveedores y alertas de reposición.</p>
                        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
                            <a href="http://kiosco.oseassoft.com" target="_blank" class="demo-btn">
                                Ver Demo
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                            <button class="btn-probar" onclick="openDemoModal('Kiosco & Almacén', 'demo@kiosco.oseassoft.com', 'Demo2025!', 'http://kiosco.oseassoft.com', 'linear-gradient(90deg,#22c55e,#4ade80)')">
                                🔑 Probar Demo
                            </button>
                        </div>
                    </div>
                    
                    <!-- Demo 5: Servicio Profesional -->
                    <div class="demo-card demo-profesional" style="cursor:default;">
                        <span class="badge-live">En Vivo</span>
                        <div class="demo-icon" style="background: rgba(59, 130, 246, 0.15);">
                            💼
                        </div>
                        <h4>Servicios Profesionales</h4>
                        <p>Gestión de clientes, facturación de servicios, presupuestos, seguimiento de proyectos y cobros.</p>
                        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
                            <a href="http://servicios.oseassoft.com" target="_blank" class="demo-btn">
                                Ver Demo
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                            <button class="btn-probar" onclick="openDemoModal('Servicios Profesionales', 'demo@servicios.oseassoft.com', 'Demo2025!', 'http://servicios.oseassoft.com', 'linear-gradient(90deg,#3b82f6,#60a5fa)')">
                                🔑 Probar Demo
                            </button>
                        </div>
                    </div>
                    
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

        <script>
            function openDemoModal(title, email, pass, link, accent) {
                document.getElementById('modalTitle').textContent = 'Demo — ' + title;
                document.getElementById('modalEmail').textContent = email;
                document.getElementById('modalPass').textContent = pass;
                document.getElementById('modalLink').href = link;
                document.getElementById('modalAccentBar').style.background = accent;
                document.getElementById('demoModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            }
            function closeDemoModal() {
                document.getElementById('demoModal').classList.remove('active');
                document.body.style.overflow = '';
            }
            function copyText(elementId, btn) {
                const text = document.getElementById(elementId).textContent;
                navigator.clipboard.writeText(text).then(() => {
                    const orig = btn.textContent;
                    btn.textContent = '✓ Copiado';
                    setTimeout(() => btn.textContent = orig, 1500);
                });
            }
            // Close on backdrop click
            document.getElementById('demoModal').addEventListener('click', function(e) {
                if (e.target === this) closeDemoModal();
            });
        </script>
    </body>
</html>
