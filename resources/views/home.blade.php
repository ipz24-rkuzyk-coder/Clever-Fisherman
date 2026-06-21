<x-layouts.app title="Розумний рибак">
    <div class="mx-auto flex min-h-screen max-w-6xl flex-col px-4 py-6 sm:px-6 lg:px-8">
        <header class="glass-panel flex items-center justify-between px-5 py-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-cyan-300/15 text-2xl shadow-lg shadow-cyan-950/30 ring-1 ring-white/10">
                    <span>🎣</span>
                </div>
                <div>
                    <p class="text-sm uppercase tracking-[0.35em] text-cyan-100/70">AI Fishing Guide</p>
                    <p class="font-display text-2xl text-white">Розумний рибак</p>
                </div>
            </a>

            <nav class="flex items-center gap-3 text-sm font-semibold">
                @auth
                    <a href="{{ route('dashboard') }}" class="rounded-full border border-white/10 px-4 py-2 text-slate-100 transition hover:border-cyan-300/40 hover:bg-white/5">
                        Кабінет
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="rounded-full bg-cyan-300 px-4 py-2 text-slate-950 transition hover:bg-cyan-200">
                            Вийти
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="rounded-full border border-white/10 px-4 py-2 text-slate-100 transition hover:border-cyan-300/40 hover:bg-white/5">
                        Увійти
                    </a>
                    <a href="{{ route('register') }}" class="rounded-full bg-cyan-300 px-4 py-2 text-slate-950 transition hover:bg-cyan-200">
                        Реєстрація
                    </a>
                @endauth
            </nav>
        </header>

        <main class="flex flex-1 flex-col justify-center py-12">
            <section class="grid gap-10 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 rounded-full border border-cyan-300/20 bg-cyan-300/10 px-4 py-2 text-sm text-cyan-100">
                        <span class="h-2 w-2 rounded-full bg-cyan-300"></span>
                        Перший крок до персонального AI-помічника для рибалки
                    </div>

                    <div class="space-y-5">
                        <h1 class="font-display text-5xl leading-tight text-white sm:text-6xl">
                            Лови не навмання,
                            <span class="text-cyan-200">а за порадою системи.</span>
                        </h1>
                        <p class="max-w-2xl text-lg leading-8 text-slate-300">
                            “Розумний рибак” допомагатиме підібрати наживку, підказувати перспективні місця та найкращий час для риболовлі з урахуванням водойми, погоди, сезону й бажаної риби.
                        </p>
                    </div>

                    <div class="flex flex-col gap-4 sm:flex-row">
                        @auth
                            <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-full bg-cyan-300 px-6 py-3 text-base font-bold text-slate-950 transition hover:bg-cyan-200">
                                Відкрити кабінет
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-full bg-cyan-300 px-6 py-3 text-base font-bold text-slate-950 transition hover:bg-cyan-200">
                                Створити акаунт
                            </a>
                            <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-full border border-white/10 px-6 py-3 text-base font-semibold text-slate-100 transition hover:border-cyan-300/40 hover:bg-white/5">
                                Уже маю акаунт
                            </a>
                        @endauth
                    </div>

                    <dl class="grid gap-4 sm:grid-cols-3">
                        <div class="glass-panel p-5">
                            <dt class="text-sm uppercase tracking-[0.3em] text-slate-400">Умови</dt>
                            <dd class="mt-3 text-xl font-semibold text-white">Вода, сезон, час</dd>
                        </div>
                        <div class="glass-panel p-5">
                            <dt class="text-sm uppercase tracking-[0.3em] text-slate-400">Порада</dt>
                            <dd class="mt-3 text-xl font-semibold text-white">Наживка і тактика</dd>
                        </div>
                        <div class="glass-panel p-5">
                            <dt class="text-sm uppercase tracking-[0.3em] text-slate-400">Далі</dt>
                            <dd class="mt-3 text-xl font-semibold text-white">Щоденник і карта</dd>
                        </div>
                    </dl>
                </div>

                <div class="glass-panel overflow-hidden p-6 sm:p-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm uppercase tracking-[0.35em] text-cyan-100/60">Preview</p>
                            <h2 class="mt-2 font-display text-3xl text-white">Як це працюватиме</h2>
                        </div>
                        <div class="rounded-full border border-emerald-300/30 bg-emerald-300/10 px-3 py-1 text-sm text-emerald-100">
                            Незабаром
                        </div>
                    </div>

                    <div class="mt-8 space-y-4">
                        <div class="rounded-3xl border border-white/8 bg-slate-950/40 p-5">
                            <p class="text-sm text-slate-400">Ви вказуєте</p>
                            <p class="mt-2 text-lg font-semibold text-white">Озеро, ранок, осінь, щука, обране місце на карті</p>
                        </div>
                        <div class="rounded-3xl border border-cyan-300/15 bg-cyan-300/10 p-5">
                            <p class="text-sm text-cyan-100/75">Система аналізує</p>
                            <p class="mt-2 text-lg font-semibold text-white">Погоду, час сходу сонця, температуру, тиск і загальні патерни кльову</p>
                        </div>
                        <div class="rounded-3xl border border-amber-200/15 bg-amber-200/10 p-5">
                            <p class="text-sm text-amber-100/80">Ви отримуєте</p>
                            <p class="mt-2 text-lg font-semibold text-white">Поради щодо наживки, точки лову та найкращого вікна активності риби</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-16 grid gap-5 lg:grid-cols-3">
                <article class="glass-panel p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-cyan-100/60">01</p>
                    <h3 class="mt-4 text-2xl font-semibold text-white">Розумні рекомендації</h3>
                    <p class="mt-3 leading-7 text-slate-300">
                        Підбір приманок і місця ловлі під конкретні умови, а не загальні поради “для всіх”.
                    </p>
                </article>
                <article class="glass-panel p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-cyan-100/60">02</p>
                    <h3 class="mt-4 text-2xl font-semibold text-white">База знань по рибі</h3>
                    <p class="mt-3 leading-7 text-slate-300">
                        Окремий розділ із видами риб, поведінкою, сезонністю та перевіреними порадами по наживці.
                    </p>
                </article>
                <article class="glass-panel p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-cyan-100/60">03</p>
                    <h3 class="mt-4 text-2xl font-semibold text-white">Особистий щоденник</h3>
                    <p class="mt-3 leading-7 text-slate-300">
                        Збереження виїздів, улову, умов і висновків, щоб з часом система ставала ще кориснішою.
                    </p>
                </article>
            </section>
        </main>
    </div>
</x-layouts.app>
