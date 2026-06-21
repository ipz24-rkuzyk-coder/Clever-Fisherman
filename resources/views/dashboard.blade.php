<x-layouts.app title="Кабінет | Розумний рибак">
    <div class="mx-auto min-h-screen max-w-6xl px-4 py-6 sm:px-6 lg:px-8">
        <header class="glass-panel flex flex-col gap-6 px-6 py-6 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-sm uppercase tracking-[0.35em] text-cyan-100/60">Особистий кабінет</p>
                <h1 class="mt-3 font-display text-4xl text-white">Вітаю, {{ auth()->user()->name }}.</h1>
                <p class="mt-3 max-w-2xl text-slate-300">
                    Базова авторизація вже готова. Наступним етапом тут можна розмістити форму пошуку умов риболовлі, історію поїздок і щоденник улову.
                </p>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="rounded-full border border-white/10 px-4 py-2 text-sm font-semibold text-slate-100 transition hover:border-cyan-300/40 hover:bg-white/5">
                    На головну
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="rounded-full bg-cyan-300 px-4 py-2 text-sm font-bold text-slate-950 transition hover:bg-cyan-200">
                        Вийти
                    </button>
                </form>
            </div>
        </header>

        <main class="mt-8 grid gap-5 lg:grid-cols-3">
            <section class="glass-panel p-6 lg:col-span-2">
                <p class="text-sm uppercase tracking-[0.35em] text-cyan-100/60">Що вже зроблено</p>
                <h2 class="mt-4 text-3xl font-semibold text-white">Платформа готова до наступних модулів.</h2>
                <ul class="mt-6 space-y-4 text-slate-300">
                    <li class="rounded-2xl border border-white/8 bg-slate-950/30 px-4 py-4">Реєстрація та вхід користувачів</li>
                    <li class="rounded-2xl border border-white/8 bg-slate-950/30 px-4 py-4">Головна сторінка з позиціонуванням продукту</li>
                    <li class="rounded-2xl border border-white/8 bg-slate-950/30 px-4 py-4">Захищений кабінет для майбутнього функціоналу</li>
                </ul>
            </section>

            <aside class="glass-panel p-6">
                <p class="text-sm uppercase tracking-[0.35em] text-cyan-100/60">Наступні кроки</p>
                <div class="mt-5 space-y-4">
                    <div class="rounded-2xl border border-cyan-300/15 bg-cyan-300/10 p-4 text-slate-100">
                        Форма умов риболовлі
                    </div>
                    <div class="rounded-2xl border border-emerald-300/15 bg-emerald-300/10 p-4 text-slate-100">
                        Погода і геолокація
                    </div>
                    <div class="rounded-2xl border border-amber-200/15 bg-amber-200/10 p-4 text-slate-100">
                        Щоденник рибалки
                    </div>
                </div>
            </aside>
        </main>
    </div>
</x-layouts.app>
