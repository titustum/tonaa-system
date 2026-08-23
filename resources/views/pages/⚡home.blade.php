<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <section class="relative overflow-hidden border-b border-slate-200
             bg-white pt-32 pb-20 dark:border-slate-800
             dark:bg-slate-950 sm:pt-40 sm:pb-28">

        <!-- Subtle background shapes -->
        <div class="pointer-events-none absolute right-0 top-20 hidden
               h-72 w-72 rounded-full bg-blue-50 blur-3xl
               dark:bg-blue-900/20 lg:block"></div>

        <div class="pointer-events-none absolute bottom-0 left-0 hidden
               h-56 w-56 rounded-full bg-slate-100 blur-3xl
               dark:bg-slate-900 lg:block"></div>


        <div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="mx-auto max-w-4xl text-center">

                <!-- Eyebrow -->
                <div class="inline-flex items-center gap-2 rounded-full
                   border border-blue-200 bg-blue-50 px-3.5 py-2
                   text-xs font-bold uppercase tracking-wider
                   text-blue-700
                   dark:border-blue-800 dark:bg-blue-900/30
                   dark:text-blue-300">
                    <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                    Tournament management platform
                </div>


                <!-- Headline -->
                <h1 class="mt-7 text-5xl font-black tracking-tight
                   text-slate-950 sm:text-6xl lg:text-7xl
                   dark:text-white">
                    Run your team.
                    <br />

                    <span class="text-blue-600">
                        Build your tournament.
                    </span>
                </h1>


                <!-- Subheading -->
                <p class="mx-auto mt-7 max-w-2xl text-base leading-8
                   text-slate-600 sm:text-lg
                   dark:text-slate-400">
                    Tonaa brings coaches, teams and tournament sponsors together
                    in one simple platform. Register your team, manage your
                    players and discover tournaments happening in your community.
                </p>


                <!-- CTAs -->
                <div id="register" class="mt-9 flex flex-col items-stretch justify-center
                   gap-3 sm:flex-row sm:items-center">

                    <a href="#" class="inline-flex items-center justify-center gap-2
                     rounded-xl bg-blue-600 px-6 py-3.5
                     text-sm font-bold text-white shadow-sm
                     shadow-blue-600/20 hover:bg-blue-700
                     transition">
                        <ion-icon name="people-outline" class="text-lg"></ion-icon>
                        Register Your Team
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                    <a id="sponsor" href="#" class="inline-flex items-center justify-center gap-2
                     rounded-xl border border-slate-300 bg-white
                     px-6 py-3.5 text-sm font-bold text-slate-800
                     hover:bg-slate-50 transition
                     dark:border-slate-700 dark:bg-slate-900
                     dark:text-slate-100 dark:hover:bg-slate-800">
                        <ion-icon name="business-outline"></ion-icon>
                        Register a Tournament
                    </a>

                </div>


                <!-- Trust -->
                <div class="mt-8 flex flex-wrap items-center justify-center
                   gap-x-6 gap-y-2 text-xs text-slate-400">
                    <span class="flex items-center gap-1.5">
                        <ion-icon name="checkmark-circle"></ion-icon>
                        Easy team registration
                    </span>

                    <span class="flex items-center gap-1.5">
                        <ion-icon name="checkmark-circle"></ion-icon>
                        Territory-based tournaments
                    </span>

                    <span class="flex items-center gap-1.5">
                        <ion-icon name="checkmark-circle"></ion-icon>
                        Built for local football
                    </span>
                </div>

            </div>


            <!-- Hero product visual -->
            <div class="relative mx-auto mt-16 max-w-5xl">

                <div class="rounded-2xl border border-slate-200
                   bg-slate-100 p-2 shadow-2xl shadow-slate-200/60
                   dark:border-slate-800 dark:bg-slate-900
                   dark:shadow-black/30 sm:rounded-3xl sm:p-3">

                    <div class="overflow-hidden rounded-xl border border-slate-200
                     bg-white dark:border-slate-800 dark:bg-slate-950">

                        <!-- Fake app header -->
                        <div class="flex h-12 items-center justify-between
                       border-b border-slate-200 px-4
                       dark:border-slate-800">

                            <div class="flex items-center gap-2">

                                <div class="h-6 w-6 rounded-md bg-blue-600"></div>

                                <div class="h-2.5 w-20 rounded-full bg-slate-200
                           dark:bg-slate-800"></div>

                            </div>

                            <div class="flex gap-2">
                                <div class="h-7 w-7 rounded-lg bg-slate-100
                           dark:bg-slate-900"></div>
                                <div class="h-7 w-7 rounded-lg bg-slate-100
                           dark:bg-slate-900"></div>
                            </div>

                        </div>


                        <!-- Fake dashboard -->
                        <div class="grid md:grid-cols-[180px_1fr]">

                            <div class="hidden border-r border-slate-200 p-4 md:block
                         dark:border-slate-800">

                                <div class="space-y-2">

                                    <div class="rounded-lg bg-blue-50 px-3 py-2
                             dark:bg-blue-900/30">
                                        <div class="h-2 w-16 rounded bg-blue-300"></div>
                                    </div>

                                    <div class="px-3 py-2">
                                        <div class="h-2 w-20 rounded bg-slate-200
                               dark:bg-slate-800"></div>
                                    </div>

                                    <div class="px-3 py-2">
                                        <div class="h-2 w-14 rounded bg-slate-200
                               dark:bg-slate-800"></div>
                                    </div>

                                    <div class="px-3 py-2">
                                        <div class="h-2 w-24 rounded bg-slate-200
                               dark:bg-slate-800"></div>
                                    </div>

                                </div>

                            </div>


                            <div class="p-5 sm:p-7">

                                <div class="flex items-center justify-between">

                                    <div>
                                        <div class="h-3 w-32 rounded bg-slate-900
                               dark:bg-white"></div>

                                        <div class="mt-2 h-2 w-48 rounded bg-slate-200
                               dark:bg-slate-800"></div>
                                    </div>

                                    <div class="hidden rounded-lg bg-blue-600 px-3 py-2
                             sm:block">
                                        <div class="h-2 w-16 rounded bg-white/80"></div>
                                    </div>

                                </div>


                                <div class="mt-7 grid gap-4 sm:grid-cols-3">

                                    <div class="rounded-xl border border-slate-200 p-4
                             dark:border-slate-800">
                                        <div class="h-8 w-8 rounded-lg bg-blue-50
                               dark:bg-blue-900/30"></div>

                                        <div class="mt-5 h-4 w-12 rounded bg-slate-900
                               dark:bg-white"></div>

                                        <div class="mt-2 h-2 w-20 rounded bg-slate-200
                               dark:bg-slate-800"></div>
                                    </div>


                                    <div class="rounded-xl border border-slate-200 p-4
                             dark:border-slate-800">
                                        <div class="h-8 w-8 rounded-lg bg-slate-100
                               dark:bg-slate-900"></div>

                                        <div class="mt-5 h-4 w-12 rounded bg-slate-900
                               dark:bg-white"></div>

                                        <div class="mt-2 h-2 w-20 rounded bg-slate-200
                               dark:bg-slate-800"></div>
                                    </div>


                                    <div class="rounded-xl border border-slate-200 p-4
                             dark:border-slate-800">
                                        <div class="h-8 w-8 rounded-lg bg-slate-100
                               dark:bg-slate-900"></div>

                                        <div class="mt-5 h-4 w-12 rounded bg-slate-900
                               dark:bg-white"></div>

                                        <div class="mt-2 h-2 w-20 rounded bg-slate-200
                               dark:bg-slate-800"></div>
                                    </div>

                                </div>


                                <div class="mt-4 rounded-xl border border-slate-200
                           p-5 dark:border-slate-800">

                                    <div class="flex items-center justify-between">
                                        <div class="h-3 w-28 rounded bg-slate-900
                               dark:bg-white"></div>

                                        <div class="h-2 w-14 rounded bg-slate-200
                               dark:bg-slate-800"></div>
                                    </div>

                                    <div class="mt-6 h-24 rounded-lg bg-slate-50
                             dark:bg-slate-900"></div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>



    <!-- =========================================================
         FEATURES
    ========================================================== -->

    <section id="about" class="border-b border-slate-200 bg-slate-50 py-20
             dark:border-slate-800 dark:bg-slate-900/40 sm:py-24">

        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="max-w-2xl">

                <p class="text-sm font-bold uppercase tracking-widest
                   text-blue-600 dark:text-blue-400">
                    Everything in one place
                </p>

                <h2 class="mt-3 text-3xl font-black tracking-tight
                   sm:text-4xl">
                    Simple tools for the people
                    <br class="hidden sm:block" />
                    who make tournaments happen.
                </h2>

                <p class="mt-5 text-base leading-7 text-slate-600
                   dark:text-slate-400">
                    Whether you're managing a local team or organizing an entire
                    tournament, Tonaa keeps the important details organized.
                </p>

            </div>


            <!-- Feature grid -->
            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Feature 1 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-6
                   hover:border-blue-200 hover:shadow-lg
                   hover:shadow-slate-200/50 transition
                   dark:border-slate-800 dark:bg-slate-950
                   dark:hover:border-blue-800 dark:hover:shadow-none">

                    <div class="flex h-11 w-11 items-center justify-center
                     rounded-xl bg-blue-50 text-blue-600
                     dark:bg-blue-900/30 dark:text-blue-400">
                        <ion-icon name="people-outline" class="text-xl"></ion-icon>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        Team Management
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                     dark:text-slate-400">
                        Coaches create their team profile and keep their players
                        organized in one place.
                    </p>

                </article>


                <!-- Feature 2 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-6
                   hover:border-blue-200 hover:shadow-lg
                   hover:shadow-slate-200/50 transition
                   dark:border-slate-800 dark:bg-slate-950
                   dark:hover:border-blue-800 dark:hover:shadow-none">

                    <div class="flex h-11 w-11 items-center justify-center
                     rounded-xl bg-blue-50 text-blue-600
                     dark:bg-blue-900/30 dark:text-blue-400">
                        <ion-icon name="person-add-outline" class="text-xl"></ion-icon>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        Player Registration
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                     dark:text-slate-400">
                        Add players to your team and maintain a reliable team
                        roster ready for tournament participation.
                    </p>

                </article>


                <!-- Feature 3 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-6
                   hover:border-blue-200 hover:shadow-lg
                   hover:shadow-slate-200/50 transition
                   dark:border-slate-800 dark:bg-slate-950
                   dark:hover:border-blue-800 dark:hover:shadow-none">

                    <div class="flex h-11 w-11 items-center justify-center
                     rounded-xl bg-blue-50 text-blue-600
                     dark:bg-blue-900/30 dark:text-blue-400">
                        <ion-icon name="trophy-outline" class="text-xl"></ion-icon>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        Tournament Discovery
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                     dark:text-slate-400">
                        Coaches can discover tournaments listed by sponsors and
                        find competitions that fit their teams.
                    </p>

                </article>


                <!-- Feature 4 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-6
                   hover:border-blue-200 hover:shadow-lg
                   hover:shadow-slate-200/50 transition
                   dark:border-slate-800 dark:bg-slate-950
                   dark:hover:border-blue-800 dark:hover:shadow-none">

                    <div class="flex h-11 w-11 items-center justify-center
                     rounded-xl bg-blue-50 text-blue-600
                     dark:bg-blue-900/30 dark:text-blue-400">
                        <ion-icon name="location-outline" class="text-xl"></ion-icon>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        Territory-Based Access
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                     dark:text-slate-400">
                        Set a tournament territory such as Kilibwoni Ward and
                        allow eligible teams from that area to participate.
                    </p>

                </article>


                <!-- Feature 5 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-6
                   hover:border-blue-200 hover:shadow-lg
                   hover:shadow-slate-200/50 transition
                   dark:border-slate-800 dark:bg-slate-950
                   dark:hover:border-blue-800 dark:hover:shadow-none">

                    <div class="flex h-11 w-11 items-center justify-center
                     rounded-xl bg-blue-50 text-blue-600
                     dark:bg-blue-900/30 dark:text-blue-400">
                        <ion-icon name="calendar-outline" class="text-xl"></ion-icon>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        Tournament Organization
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                     dark:text-slate-400">
                        Sponsors can create tournaments, define participation
                        requirements and bring local teams together.
                    </p>

                </article>


                <!-- Feature 6 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-6
                   hover:border-blue-200 hover:shadow-lg
                   hover:shadow-slate-200/50 transition
                   dark:border-slate-800 dark:bg-slate-950
                   dark:hover:border-blue-800 dark:hover:shadow-none">

                    <div class="flex h-11 w-11 items-center justify-center
                     rounded-xl bg-blue-50 text-blue-600
                     dark:bg-blue-900/30 dark:text-blue-400">
                        <ion-icon name="shield-checkmark-outline" class="text-xl"></ion-icon>
                    </div>

                    <h3 class="mt-6 text-lg font-bold">
                        One Trusted Platform
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                     dark:text-slate-400">
                        Keep teams, players and tournaments connected through one
                        purpose-built football management platform.
                    </p>

                </article>

            </div>

        </div>
    </section>



    <!-- =========================================================
         TWO USER TYPES
    ========================================================== -->

    <section class="bg-white py-20 dark:bg-slate-950 sm:py-24">

        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="grid gap-5 lg:grid-cols-2">

                <!-- Coach -->
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-7
                   sm:p-9 dark:border-slate-800 dark:bg-slate-900">

                    <div class="flex h-12 w-12 items-center justify-center
                     rounded-xl bg-blue-600 text-white">
                        <ion-icon name="people-outline" class="text-2xl"></ion-icon>
                    </div>

                    <p class="mt-7 text-xs font-bold uppercase tracking-widest
                     text-blue-600 dark:text-blue-400">
                        For Coaches
                    </p>

                    <h3 class="mt-2 text-2xl font-black">
                        Your team. Your roster. Your tournaments.
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-slate-500
                     dark:text-slate-400">
                        Register as a coach, create your team, add your players
                        and join tournaments that your team is eligible for.
                    </p>

                    <a href="#" class="mt-7 inline-flex items-center gap-2 text-sm
                     font-bold text-blue-600 hover:text-blue-700
                     dark:text-blue-400">
                        Register your team
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                </div>


                <!-- Sponsor -->
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-7
                   sm:p-9 dark:border-slate-800 dark:bg-slate-900">

                    <div class="flex h-12 w-12 items-center justify-center
                     rounded-xl bg-slate-900 text-white
                     dark:bg-white dark:text-slate-900">
                        <ion-icon name="business-outline" class="text-2xl"></ion-icon>
                    </div>

                    <p class="mt-7 text-xs font-bold uppercase tracking-widest
                     text-slate-500 dark:text-slate-400">
                        For Sponsors
                    </p>

                    <h3 class="mt-2 text-2xl font-black">
                        Create tournaments that bring communities together.
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-slate-500
                     dark:text-slate-400">
                        Register as a tournament sponsor and create competitions
                        with your own location, eligibility and participation
                        requirements.
                    </p>

                    <a href="#" class="mt-7 inline-flex items-center gap-2 text-sm
                     font-bold text-slate-800 hover:text-blue-600
                     dark:text-white dark:hover:text-blue-400">
                        Register a tournament
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>

                </div>

            </div>

        </div>
    </section>



    <!-- =========================================================
         CONTACT / FINAL CTA
    ========================================================== -->

    <section id="contact" class="border-t border-slate-200 bg-slate-50 py-20
             dark:border-slate-800 dark:bg-slate-900/50 sm:py-24">

        <div class="mx-auto max-w-4xl px-5 text-center sm:px-6">

            <div class="mx-auto flex h-14 w-14 items-center justify-center
                 rounded-2xl bg-blue-600 text-white">
                <ion-icon name="football-outline" class="text-2xl"></ion-icon>
            </div>

            <h2 class="mt-7 text-3xl font-black tracking-tight sm:text-4xl">
                Ready to put your team on the pitch?
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-sm leading-7
                 text-slate-500 dark:text-slate-400">
                Join Tonaa and make tournament participation easier for
                your team or create a tournament for your community.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-3
                 sm:flex-row">

                <a href="#" class="inline-flex items-center justify-center gap-2
                   rounded-xl bg-blue-600 px-6 py-3.5
                   text-sm font-bold text-white
                   hover:bg-blue-700">
                    Register Your Team
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

                <a href="mailto:hello@tonaa.co.ke" class="inline-flex items-center justify-center gap-2
                   rounded-xl border border-slate-300 bg-white
                   px-6 py-3.5 text-sm font-bold text-slate-800
                   hover:bg-slate-100
                   dark:border-slate-700 dark:bg-slate-900
                   dark:text-white dark:hover:bg-slate-800">
                    <ion-icon name="mail-outline"></ion-icon>
                    Contact Tonaa
                </a>

            </div>

        </div>

    </section>
</div>