<x-layouts.app title="Вхід | Розумний рибак">
    <div class="mx-auto flex min-h-screen max-w-6xl items-center px-4 py-10 sm:px-6 lg:px-8">
        <div class="grid w-full gap-8 lg:grid-cols-[1fr_26rem]">
            <section class="glass-panel p-8 sm:p-10">
                <p class="text-sm uppercase tracking-[0.35em] text-cyan-100/65">Авторизація</p>
                <h1 class="mt-4 font-display text-5xl leading-tight text-white">Повернення до “Розумного рибака”.</h1>
                <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-300">
                    Увійдіть, щоб надалі зберігати риболовні сесії, персональні рекомендації та майбутній журнал виїздів.
                </p>
            </section>

            <section class="glass-panel p-6 sm:p-8">
                <h2 class="text-2xl font-semibold text-white">Вхід до акаунта</h2>
                <p class="mt-2 text-sm text-slate-400">Використайте email і пароль, щоб продовжити.</p>

                <form method="POST" action="{{ route('login.store') }}" class="mt-8 space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-slate-200">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="form-input"
                        >
                        @error('email')
                            <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="mb-2 block text-sm font-semibold text-slate-200">Пароль</label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            class="form-input"
                        >
                        @error('password')
                            <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <label class="flex items-center gap-3 text-sm text-slate-300">
                        <input type="checkbox" name="remember" class="h-4 w-4 rounded border-white/20 bg-white/5 text-cyan-300 focus:ring-cyan-300">
                        Запам’ятати мене
                    </label>

                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-full bg-cyan-300 px-6 py-3 text-base font-bold text-slate-950 transition hover:bg-cyan-200">
                        Увійти
                    </button>
                </form>

                <p class="mt-6 text-sm text-slate-400">
                    Ще не маєте акаунта?
                    <a href="{{ route('register') }}" class="font-semibold text-cyan-200 hover:text-cyan-100">Створити профіль</a>
                </p>
            </section>
        </div>
    </div>
</x-layouts.app>
