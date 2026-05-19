<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="py-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white/95 border border-slate-200 shadow-lg rounded-3xl p-10 md:p-14 backdrop-blur-sm">
            <div class="mb-12 text-center">
                <p class="text-indigo-600 uppercase tracking-[0.36em] text-sm font-semibold mb-4">Leadership Blog</p>
                <h1 class="text-4xl md:text-5xl font-bold text-slate-950">Leading with Purpose</h1>
                <p class="mt-4 text-slate-600 max-w-2xl mx-auto">My student leadership journey, lessons, and practical tips for future leaders navigating school and community impact.</p>
            </div>

            <div class="grid gap-8 lg:grid-cols-[1.4fr_0.8fr]">
                <div class="space-y-8">
                    <article class="rounded-3xl border border-slate-200 p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                        <div class="mb-4 flex items-center gap-3 text-slate-500">
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-2xl bg-indigo-100 text-indigo-600">1</span>
                            <div>
                                <p class="text-sm uppercase tracking-[0.2em] font-semibold">My Story</p>
                            </div>
                        </div>
                        <h2 class="text-2xl font-semibold text-slate-950 mb-3">My Leadership Journey</h2>
                        <p class="text-slate-600 leading-relaxed">I started my leadership journey in Grade 12 as a student council officer. It taught me resilience, teamwork, and the power of listening to others.</p>
                    </article>

                    <article class="rounded-3xl border border-slate-200 p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                        <div class="mb-4 flex items-center gap-3 text-slate-500">
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-2xl bg-indigo-100 text-indigo-600">2</span>
                            <div>
                                <p class="text-sm uppercase tracking-[0.2em] font-semibold">Leadership Lessons</p>
                            </div>
                        </div>
                        <h2 class="text-2xl font-semibold text-slate-950 mb-3">What I've Learned</h2>
                        <p class="text-slate-600 leading-relaxed">Public speaking, conflict resolution, and time management became core strengths. Leadership is about growth and guiding others with empathy.</p>
                    </article>

                    <article class="rounded-3xl border border-slate-200 p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                        <div class="mb-4 flex items-center gap-3 text-slate-500">
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-2xl bg-indigo-100 text-indigo-600">3</span>
                            <div>
                                <p class="text-sm uppercase tracking-[0.2em] font-semibold">Tips</p>
                            </div>
                        </div>
                        <h2 class="text-2xl font-semibold text-slate-950 mb-3">Advice for Future Leaders</h2>
                        <p class="text-slate-600 leading-relaxed">Start small: volunteer, join committees, and build trust. Leadership isn’t about titles, it’s about making a difference.</p>
                    </article>
                </div>

                <aside class="space-y-8">
                    <div class="rounded-3xl border border-slate-200 p-8 shadow-sm bg-slate-50">
                        <h3 class="text-xl font-semibold text-slate-950 mb-4">Projects & Initiatives</h3>
                        <p class="text-slate-600 leading-relaxed">From organizing school events to leading outreach programs, I learned that impact comes from collaboration and creativity.</p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 p-8 shadow-sm bg-slate-50">
                        <h3 class="text-xl font-semibold text-slate-950 mb-4">Quick Leadership Tips</h3>
                        <ul class="space-y-3 text-slate-600">
                            <li class="flex gap-3"><span class="text-indigo-600">•</span> Listen more than you speak.</li>
                            <li class="flex gap-3"><span class="text-indigo-600">•</span> Be consistent and dependable.</li>
                            <li class="flex gap-3"><span class="text-indigo-600">•</span> Celebrate progress with your team.</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php loadPartial('footer'); ?>