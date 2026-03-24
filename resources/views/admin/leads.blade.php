<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Leads - OseasSoft Demos</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 antialiased font-sans min-h-screen">
    
    <!-- Navbar Admin -->
    <nav class="bg-slate-800 border-b border-slate-700 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0 flex items-center gap-3">
                    <div class="w-8 h-8 bg-indigo-500 rounded flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/30">
                        O
                    </div>
                    <span class="font-bold text-lg tracking-wide">OseasSoft <span class="text-indigo-400 font-light">Leads Panel</span></span>
                </div>
                <div>
                    <a href="/" class="text-sm text-slate-400 hover:text-white transition-colors">Volver a la Web</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-extrabold text-white">Contactos Potenciales (Leads)</h1>
                <p class="text-slate-400 mt-1">Gente que pidió probar el sistema o dejó su email en la Landing Page.</p>
            </div>
            
            <div class="bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 flex items-center gap-4 shadow-sm">
                <div>
                    <p class="text-xs text-slate-400 uppercase font-bold tracking-wider mb-1">Total Leads</p>
                    <p class="text-2xl font-bold text-indigo-400 leading-none">{{ $leads->count() }}</p>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class="bg-slate-800 rounded-2xl shadow-xl border border-slate-700 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-700">
                    <thead class="bg-slate-850">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-widest bg-slate-800/50">
                                Fecha y Hora
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-widest bg-slate-800/50">
                                Email de Contacto
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-widest bg-slate-800/50">
                                Demo Solicitado
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-400 uppercase tracking-widest bg-slate-800/50">
                                Estado / Acción
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700 bg-slate-800">
                        @forelse($leads as $lead)
                            <tr class="hover:bg-slate-700/30 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">
                                    <div class="flex flex-col">
                                        <span class="font-medium text-white">{{ $lead->created_at->format('d/m/Y') }}</span>
                                        <span class="text-xs text-slate-500">{{ $lead->created_at->format('H:i') }} hs</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-slate-700 flex items-center justify-center text-indigo-400 text-xs font-bold">
                                            {{ strtoupper(substr($lead->email, 0, 1)) }}
                                        </div>
                                        <span class="text-sm font-medium text-white">{{ $lead->email }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500/10 text-indigo-400 border border-indigo-500/20">
                                        {{ $lead->product ?? 'General' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">
                                    <a href="mailto:{{ $lead->email }}" target="_blank" class="text-indigo-400 hover:text-indigo-300 hover:underline flex items-center gap-1 font-medium">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                        Contactar
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-12 text-center">
                                    <svg class="mx-auto h-12 w-12 text-slate-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                    <p class="text-slate-400 text-lg">Aún no hay leads registrados.</p>
                                    <p class="text-slate-500 text-sm mt-1">Los emails de la gente que solicite demo aparecerán aquí.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>

</body>
</html>
