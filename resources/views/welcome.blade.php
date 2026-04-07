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
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
        <style>
            body { font-family: 'Playfair Display', serif; }
            
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="antialiased bg-slate-900 text-slate-100">

        <!-- Demo Modal -->
        <div class="demo-modal-overlay" id="demoModal">
            <div class="demo-modal">
                <button class="modal-close" onclick="closeDemoModal()">✕</button>
                <div id="modalAccentBar" style="height:4px; border-radius:4px; margin-bottom:1.5rem; background: linear-gradient(90deg,#6366f1,#8b5cf6);"></div>
                <h3 id="modalTitle">Demo</h3>
                <p class="subtitle" id="modalSubtitle">Ingresá tu email para obtener acceso inmediato al entorno de pruebas.</p>

                <!-- Paso 1: Formulario -->
                <div id="demoStep1">
                    <form id="demoForm" onsubmit="submitDemoForm(event)">
                        <input type="email" id="demoEmailInput" required class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors mb-4" placeholder="tucorreo@empresa.com">
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg transition-all shadow-lg shadow-indigo-500/25 flex justify-center items-center">
                            <span id="btnText">Desbloquear Demo</span>
                            <svg id="btnSpinner" class="animate-spin ml-2 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                        </button>
                    </form>
                </div>

                <!-- Paso 2: Credenciales (Éxito) -->
                <div id="demoStep2" style="display: none; text-align: center;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">✉️</div>
                    <div class="mt-4 p-4 bg-indigo-500/10 border border-indigo-500/20 rounded-lg text-indigo-200">
                        <p class="mb-2"><strong>¡Accesos Enviados!</strong></p>
                        <p class="text-sm">Te enviamos el usuario y la contraseña segura a tu casilla de correo.</p>
                        <p class="text-sm mt-3 opacity-75">Revisá tu bandeja de entrada (y la carpeta de spam por las dudas).</p>
                    </div>
                    <button class="go-demo-btn" onclick="closeDemoModal()" style="margin-top: 2rem;">Entendido</button>
                </div>
            </div>
        </div>
        
        <!-- Navbar -->
        <nav class="fixed w-full z-50 bg-slate-900/80 backdrop-blur-md border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between" style="height: 80px;">
                    
                    <!-- Lado Izquierdo (Links) -->
                    <div class="hidden md:block" style="flex: 1;">
                        <div style="display: flex; gap: 2rem; justify-content: flex-start; align-items: center;">
                            <a href="#hero" class="hover:text-indigo-400 font-medium">Inicio</a>
                            <a href="#services" class="hover:text-indigo-400 font-medium">Servicios</a>
                        </div>
                    </div>
                    
                    <!-- LOGO CENTRADO -->
                    <div style="flex: 1; text-align: center;">
                        <a href="#" style="display: inline-block;">
                            <img src="{{ asset('images/logo.png') }}" alt="OseasSoft" style="height: 60px; max-width: 280px; width: auto; object-fit: contain;">
                        </a>
                    </div>

                    <!-- Lado Derecho (Botones) -->
                    <div class="hidden md:block" style="flex: 1;">
                        <div style="display: flex; gap: 1.5rem; justify-content: flex-end; align-items: center;">
                            <a href="#demos" class="hover:text-indigo-400 font-medium">Demos</a>
                            <a href="#pricing" class="hover:text-indigo-400 font-medium text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400 font-bold">Precios</a>
                            <a href="#contact" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold transition-all shadow-lg hover:shadow-indigo-500/30" style="padding: 0.5rem 1.25rem; border-radius: 9999px;">Contáctanos</a>
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
                
                </div>
                
                <div style="margin-top: 60px; margin-bottom: 50px; clear: both; width: 100%; display: block;">
                    <div class="text-center max-w-2xl mx-auto bg-slate-800/40 p-8 rounded-3xl border border-slate-700/50 shadow-2xl relative z-10">
                        <p class="text-slate-300 text-lg md:text-xl font-medium tracking-wide leading-relaxed">
                            ¿Tu negocio es diferente? <br class="sm:hidden">
                            <a href="#contact" class="text-indigo-400 hover:text-indigo-300 font-bold transition-colors underline decoration-2 underline-offset-4">Contáctanos</a> 
                            y te mostramos cómo adaptamos el sistema a tu rubro.
                        </p>
                    </div>
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
                    <div class="p-8 md:p-10 bg-slate-900 rounded-3xl border border-slate-700 hover:border-indigo-500/50 transition-all duration-300 group text-center flex flex-col items-center justify-center hover:-translate-y-2 hover:shadow-2xl hover:shadow-indigo-500/10" style="min-height: 280px !important;">
                        <div class="bg-indigo-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-indigo-500/20 transition-colors transform group-hover:scale-110 duration-300" style="width: 80px; height: 80px; font-size: 3rem;">
                            💻
                        </div>
                        <h4 class="text-xl font-extrabold mb-3 text-white">Punto de Venta</h4>
                        <p class="text-slate-400 text-base leading-relaxed">Sistema POS rápido para ventas presenciales con múltiples medios de pago.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="p-8 md:p-10 bg-slate-900 rounded-3xl border border-slate-700 hover:border-cyan-500/50 transition-all duration-300 group text-center flex flex-col items-center justify-center hover:-translate-y-2 hover:shadow-2xl hover:shadow-cyan-500/10" style="min-height: 280px !important;">
                        <div class="bg-cyan-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-cyan-500/20 transition-colors transform group-hover:scale-110 duration-300" style="width: 80px; height: 80px; font-size: 3rem;">
                            📦
                        </div>
                        <h4 class="text-xl font-extrabold mb-3 text-white">Inventario</h4>
                        <p class="text-slate-400 text-base leading-relaxed">Control total de tu stock, alertas de reposición, variantes y gestión proveedores.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="p-8 md:p-10 bg-slate-900 rounded-3xl border border-slate-700 hover:border-purple-500/50 transition-all duration-300 group text-center flex flex-col items-center justify-center hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/10" style="min-height: 280px !important;">
                        <div class="bg-purple-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-500/20 transition-colors transform group-hover:scale-110 duration-300" style="width: 80px; height: 80px; font-size: 3rem;">
                            🛍️
                        </div>
                        <h4 class="text-xl font-extrabold mb-3 text-white">Tienda Online</h4>
                        <p class="text-slate-400 text-base leading-relaxed">E-commerce integrado con catálogo de productos, carrito y recepción de pagos con MercadoPago.</p>
                    </div>

                    <!-- Service 4 -->
                    <div class="p-8 md:p-10 bg-slate-900 rounded-3xl border border-slate-700 hover:border-pink-500/50 transition-all duration-300 group text-center flex flex-col items-center justify-center hover:-translate-y-2 hover:shadow-2xl hover:shadow-pink-500/10" style="min-height: 280px !important;">
                        <div class="bg-pink-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-pink-500/20 transition-colors transform group-hover:scale-110 duration-300" style="width: 80px; height: 80px; font-size: 3rem;">
                            📊
                        </div>
                        <h4 class="text-xl font-extrabold mb-3 text-white">Reportes Claros</h4>
                        <p class="text-slate-400 text-base leading-relaxed">Métricas de ventas, productos más vendidos, y estadísticas de clientes para tomar decisiones precisas.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Section -->
        <div id="pricing" class="py-24 bg-gradient-to-b from-slate-800/50 to-slate-900 relative">
            <!-- Background Elements -->
            <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-indigo-600/10 rounded-full blur-3xl filter mix-blend-screen pointer-events-none"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl filter mix-blend-screen pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-16">
                    <span class="text-indigo-400 uppercase tracking-widest text-sm font-bold">Planes Flexibles</span>
                    <h2 class="text-4xl font-extrabold text-white mt-2 mb-4">Elige el plan ideal para tu negocio</h2>
                    <p class="text-slate-400 max-w-2xl mx-auto">
                        Inversión transparente sin sorpresas. Puedes cambiar de plan en cualquier momento a medida que tu negocio crece.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto items-center">
                    
                    <!-- Tarjeta 1: Inicio -->
                    <div class="bg-slate-900/80 backdrop-blur border border-slate-700 rounded-3xl p-8 hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-500/10 group relative overflow-hidden">
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">Inicio</h3>
                            <div class="flex items-baseline gap-2">
                                <span class="text-4xl font-extrabold text-white">$15.000</span>
                                <span class="text-slate-400">/mes</span>
                            </div>
                            <p class="text-slate-400 mt-3 text-sm">Perfecto para negocios que recién empiezan o necesitan lo esencial.</p>
                        </div>
                        <ul class="space-y-4 mb-8 text-slate-300 text-sm">
                            <li class="flex items-start gap-3">
                                <span class="text-cyan-400">✓</span>
                                <span>Punto de Venta veloz</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-cyan-400">✓</span>
                                <span>Inventario básico (hasta 1,000 prod.)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-cyan-400">✓</span>
                                <span>1 Usuario / Caja</span>
                            </li>
                            <li class="flex items-start gap-3 opacity-50">
                                <span>×</span>
                                <span class="line-through">Tienda Online</span>
                            </li>
                            <li class="flex items-start gap-3 opacity-50">
                                <span>×</span>
                                <span class="line-through">Modo Nocturno exclusivo</span>
                            </li>
                        </ul>
                        <a href="#contact" class="block w-full py-3 px-4 bg-slate-800 hover:bg-slate-700 border border-slate-600 hover:border-cyan-500 text-center rounded-xl font-bold transition-all text-white">Elegir Inicio</a>
                    </div>

                    <!-- Tarjeta 2: Profesional (Recomendado) -->
                    <div class="bg-gradient-to-b from-indigo-900/50 to-slate-900/80 backdrop-blur rounded-3xl border border-indigo-500 p-8 transform md:scale-105 shadow-2xl shadow-indigo-500/20 relative overflow-hidden group z-10">
                        <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-indigo-400 to-cyan-400"></div>
                        <div class="absolute top-4 right-4 bg-indigo-500/20 border border-indigo-400/50 text-indigo-300 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider backdrop-blur-sm">
                            Recomendado
                        </div>
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-white mb-2 text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">Profesional</h3>
                            <div class="flex items-baseline gap-2">
                                <span class="text-5xl font-extrabold text-white">$30.000</span>
                                <span class="text-slate-400">/mes</span>
                            </div>
                            <p class="text-slate-300 mt-3 text-sm">Nuestro plan más popular, con todo lo necesario para crecer y digitalizarte al 100%.</p>
                        </div>
                        <ul class="space-y-4 mb-8 text-slate-200 text-sm">
                            <li class="flex items-start gap-3">
                                <span class="text-indigo-400">✓</span>
                                <span>Todo lo de Inicio +</span>
                            </li>
                            <li class="flex items-start gap-3 font-medium">
                                <span class="text-indigo-400">✓</span>
                                <span>Inventario Ilimitado</span>
                            </li>
                            <li class="flex items-start gap-3 font-medium">
                                <span class="text-indigo-400">✓</span>
                                <span>Tienda Online (Catálogo web)</span>
                            </li>
                            <li class="flex items-start gap-3 font-medium">
                                <span class="text-indigo-400">✓</span>
                                <span>Multi-dispositivo (Hasta 3 Usuarios)</span>
                            </li>
                            <li class="flex items-start gap-3 font-medium">
                                <span class="text-indigo-400">✓</span>
                                <span>Modo Nocturno 🌙</span>
                            </li>
                        </ul>
                        <a href="#contact" class="block w-full py-4 px-4 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-center rounded-xl font-bold transition-all shadow-lg shadow-indigo-500/30 text-white transform hover:-translate-y-1">Obtener Profesional</a>
                    </div>

                    <!-- Tarjeta 3: Premium -->
                    <div class="bg-slate-900/80 backdrop-blur rounded-3xl border border-slate-700 p-8 hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl hover:shadow-purple-500/10 group relative overflow-hidden">
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Premium</h3>
                            <div class="flex items-baseline gap-2">
                                <span class="text-4xl font-extrabold text-white">$60.000</span>
                                <span class="text-slate-400">/mes</span>
                            </div>
                            <p class="text-slate-400 mt-3 text-sm">El ecosistema definitivo para empresas con volumen y altas exigencias.</p>
                        </div>
                        <ul class="space-y-4 mb-8 text-slate-300 text-sm">
                            <li class="flex items-start gap-3">
                                <span class="text-purple-400">✓</span>
                                <span>Todo lo de Profesional +</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-purple-400">✓</span>
                                <span>Múltiples Sucursales</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-purple-400">✓</span>
                                <span>Roles y Usuarios Ilimitados</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-purple-400">✓</span>
                                <span>Dominio propio para Tienda</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-purple-400">✓</span>
                                <span>Soporte 24/7 VIP</span>
                            </li>
                        </ul>
                        <a href="#contact" class="block w-full py-3 px-4 bg-slate-800 hover:bg-slate-700 border border-slate-600 hover:border-purple-500 text-center rounded-xl font-bold transition-all text-white">Elegir Premium</a>
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
                <div style="display: flex; justify-content: center; gap: 2rem; margin-bottom: 1.5rem; font-size: 2rem;">
                    <a href="https://wa.me/" target="_blank" style="transition: transform 0.2s; text-decoration: none;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'" title="WhatsApp">📱</a>
                    <a href="https://instagram.com/" target="_blank" style="transition: transform 0.2s; text-decoration: none;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'" title="Instagram">📸</a>
                    <a href="https://facebook.com/" target="_blank" style="transition: transform 0.2s; text-decoration: none;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'" title="Facebook">📘</a>
                </div>
                <p class="text-slate-500 text-sm">
                    &copy; {{ date('Y') }} OseasSoft. Todos los derechos reservados.
                </p>
            </div>
        </footer>

        <script>
            let currentDemoData = {};

            function openDemoModal(title, email, pass, link, accent) {
                currentDemoData = { title, email, pass, link };
                
                document.getElementById('modalTitle').textContent = 'Demo — ' + title;
                document.getElementById('modalAccentBar').style.background = accent;
                
                // Mostrar Paso 1, Ocultar Paso 2
                document.getElementById('demoStep1').style.display = 'block';
                document.getElementById('demoStep2').style.display = 'none';
                document.getElementById('modalSubtitle').textContent = 'Ingresá tu email para recibir el acceso inmediato al entorno de pruebas.';
                document.getElementById('demoEmailInput').value = '';
                
                document.getElementById('demoModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeDemoModal() {
                document.getElementById('demoModal').classList.remove('active');
                document.body.style.overflow = '';
            }

            async function submitDemoForm(e) {
                e.preventDefault();
                const email = document.getElementById('demoEmailInput').value;
                const btnText = document.getElementById('btnText');
                const btnSpinner = document.getElementById('btnSpinner');
                
                btnText.textContent = 'Procesando...';
                btnSpinner.classList.remove('hidden');
                
                try {
                    // Guardar lead de forma asíncrona
                    const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                    if (token) {
                        fetch('/leads', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': token,
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({ 
                                email: email, 
                                product: currentDemoData.title,
                                source: 'demo_modal',
                                email_acceso: currentDemoData.email,
                                pass_acceso: currentDemoData.pass,
                                link_acceso: currentDemoData.link
                            })
                        }).catch(err => console.error(err));
                    }
                    
                    // Pequeña espera artificial para dar feedback visual de proceso
                    await new Promise(r => setTimeout(r, 600));
                    
                    document.getElementById('demoStep1').style.display = 'none';
                    document.getElementById('demoStep2').style.display = 'block';
                    document.getElementById('modalSubtitle').textContent = '¡Listo! Usá estas credenciales seguras para explorar el sistema.';
                } finally {
                    btnText.textContent = 'Desbloquear Demo';
                    btnSpinner.classList.add('hidden');
                }
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
