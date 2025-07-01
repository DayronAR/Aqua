<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-cyan-500 via-cyan-50 to-cyan-500 animate-fade-in">
        <div class="w-full max-w-md p-8 bg-white/90 backdrop-blur-lg rounded-3xl shadow-2xl transform transition duration-500 hover:scale-[1.01]">
            <div class="flex justify-center mb-6">
                <img src="https://img.freepik.com/vector-premium/que-linda-gota-agua-kawaii_408735-355.jpg?semt=ais_items_boosted&w=740" alt="Logo Agua" class="w-16 h-16 animate-pulse" />
            </div>

            <h2 class="text-2xl font-bold text-center text-blue-700 mb-6">Bienvenido al Sistema</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-blue-800 mb-1">
                        Correo Electrónico
                    </label>
                    <input id="email" name="email" type="email" autocomplete="username"
                        value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-2 rounded-xl border border-blue-300 focus:ring-2 focus:ring-blue-400 focus:outline-none transition-all duration-300 shadow-sm" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-blue-800 mb-1">
                        Contraseña
                    </label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="w-full px-4 py-2 rounded-xl border border-blue-300 focus:ring-2 focus:ring-blue-400 focus:outline-none transition-all duration-300 shadow-sm" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="rounded border-blue-300 text-blue-600 shadow-sm focus:ring-blue-400">
                    <label for="remember_me" class="ml-2 text-sm text-blue-700">Recordarme</label>
                </div>

                <!-- Actions -->
                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm text-blue-100 hover:underline hover:text-white transition">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif

                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-xl transition duration-300 shadow-lg">
                        Iniciar Sesión
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out both;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.97); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</x-guest-layout>
