<x-layouts.app title="Реєстрація | Розумний рибак">
    <div class="mx-auto flex min-h-screen max-w-6xl items-center px-4 py-10 sm:px-6 lg:px-8">
        <div class="grid w-full gap-8 lg:grid-cols-[1fr_28rem]">
            <section class="glass-panel p-8 sm:p-10">
                <p class="text-sm uppercase tracking-[0.35em] text-cyan-100/65">Створення акаунта</p>
                <h1 class="mt-4 font-display text-5xl leading-tight text-white">Почнімо будувати ваш персональний рибальський профіль.</h1>
                <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-300">
                    Реєстрація вже готова. Далі ми зможемо підключити рекомендації, історію виїздів і персональні записи улову.
                </p>
            </section>

            <section class="glass-panel p-6 sm:p-8">
                <h2 class="text-2xl font-semibold text-white">Новий акаунт</h2>
                <p class="mt-2 text-sm text-slate-400">Заповніть дані, щоб розпочати.</p>

                <form method="POST" action="{{ route('register.store') }}" class="mt-8 space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="mb-2 block text-sm font-semibold text-slate-200">Ім’я</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            class="form-input"
                        >
                        @error('name')
                            <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-slate-200">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
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

                    <div>
                        <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-slate-200">Підтвердження пароля</label>
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            required
                            class="form-input"
                        >
                    </div>

                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-full bg-cyan-300 px-6 py-3 text-base font-bold text-slate-950 transition hover:bg-cyan-200">
                        Зареєструватися
                    </button>
                </form>

                <p class="mt-6 text-sm text-slate-400">
                    Вже є акаунт?
                    <a href="{{ route('login') }}" class="font-semibold text-cyan-200 hover:text-cyan-100">Увійти</a>
                </p>
            </section>
        </div>
    </div>
</x-layouts.app>
