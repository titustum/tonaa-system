<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('About Us')] class extends Component
{
    //
};
?>

<div>
    <!-- =========================================================
         PAGE HEADER
    ========================================================== -->

    <section class="border-b border-slate-200 bg-white pt-32 pb-16
             dark:border-slate-800 dark:bg-slate-950 sm:pt-40 sm:pb-20">

        <div class="mx-auto max-w-4xl px-5 text-center sm:px-6">

            <div class="inline-flex items-center gap-2 rounded-full
                 border border-blue-200 bg-blue-50 px-3.5 py-2
                 text-xs font-bold uppercase tracking-wider
                 text-blue-700
                 dark:border-blue-800 dark:bg-blue-900/30
                 dark:text-blue-300">
                <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                Our story
            </div>

            <h1 class="mt-7 text-4xl font-black tracking-tight text-slate-950
                 sm:text-5xl lg:text-6xl dark:text-white">
                Local football,
                <br />
                <span class="text-blue-600">
                    finally organized.
                </span>
            </h1>

            <p class="mx-auto mt-7 max-w-2xl text-base leading-8 text-slate-600
                 sm:text-lg dark:text-slate-400">
                Managing a community tournament used to mean paper registers,
                phone calls and guesswork. Tonaa puts the whole thing in one
                system — teams, players, sponsors and tournaments working
                together.
            </p>

        </div>
    </section>


    <!-- =========================================================
         WHY TONAA EXISTS
    ========================================================== -->

    <section class="border-b border-slate-200 bg-slate-50 py-20
             dark:border-slate-800 dark:bg-slate-900/40 sm:py-24">

        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="grid items-start gap-12 lg:grid-cols-2">

                <!-- Narrative -->
                <div>

                    <p class="text-sm font-bold uppercase tracking-widest
                       text-blue-600 dark:text-blue-400">
                        Why Tonaa exists
                    </p>

                    <h2 class="mt-3 text-3xl font-black tracking-tight sm:text-4xl">
                        Built for the people who make tournaments happen.
                    </h2>

                    <p class="mt-5 text-base leading-8 text-slate-600
                       dark:text-slate-400">
                        Every season, sponsors pour resources into community
                        tournaments while coaches struggle to keep their teams
                        organized. Registration lists go missing, eligibility is
                        disputed and information never reaches the people who
                        need it.
                    </p>

                    <p class="mt-4 text-base leading-8 text-slate-600
                       dark:text-slate-400">
                        Tonaa changes that. Sponsors list tournaments with clear
                        territories and requirements. Coaches register teams,
                        manage players and join competitions their teams are
                        eligible for. Everyone works from the same source of
                        truth.
                    </p>

                </div>


                <!-- Values card -->
                <div class="rounded-2xl border border-slate-200 bg-white p-7
                      shadow-sm sm:p-9
                      dark:border-slate-800 dark:bg-slate-950">

                    <h3 class="text-lg font-bold">
                        What we stand for
                    </h3>

                    <ul class="mt-6 space-y-5">

                        <li class="flex gap-3.5">
                            <ion-icon name="checkmark-circle"
                                class="mt-0.5 shrink-0 text-xl text-blue-600 dark:text-blue-400"></ion-icon>

                            <div>
                                <p class="font-bold">Structure over paperwork</p>
                                <p class="mt-1 text-sm leading-6 text-slate-500 dark:text-slate-400">
                                    Team rosters, tournament details and
                                    participation records live in one place — not
                                    in scattered notebooks and chats.
                                </p>
                            </div>
                        </li>

                        <li class="flex gap-3.5">
                            <ion-icon name="checkmark-circle"
                                class="mt-0.5 shrink-0 text-xl text-blue-600 dark:text-blue-400"></ion-icon>

                            <div>
                                <p class="font-bold">Fair access through territories</p>
                                <p class="mt-1 text-sm leading-6 text-slate-500 dark:text-slate-400">
                                    Tournaments define who can participate by
                                    area, so opportunities stay with the local
                                    teams they were created for.
                                </p>
                            </div>
                        </li>

                        <li class="flex gap-3.5">
                            <ion-icon name="checkmark-circle"
                                class="mt-0.5 shrink-0 text-xl text-blue-600 dark:text-blue-400"></ion-icon>

                            <div>
                                <p class="font-bold">Community-first football</p>
                                <p class="mt-1 text-sm leading-6 text-slate-500 dark:text-slate-400">
                                    We exist to grow the local game — connecting
                                    coaches, players and sponsors who share one
                                    pitch.
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         HOW IT WORKS
    ========================================================== -->

    <section class="bg-white py-20 dark:bg-slate-950 sm:py-24">

        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="max-w-2xl">

                <p class="text-sm font-bold uppercase tracking-widest
                   text-blue-600 dark:text-blue-400">
                    How it works
                </p>

                <h2 class="mt-3 text-3xl font-black tracking-tight sm:text-4xl">
                    From listing to kickoff in three steps.
                </h2>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-3">

                <!-- Step 1 -->
                <article class="rounded-2xl border border-slate-200 bg-slate-50 p-6
                         dark:border-slate-800 dark:bg-slate-900/60">

                    <span class="flex h-10 w-10 items-center justify-center rounded-xl
                          bg-blue-600 text-sm font-black text-white">
                        01
                    </span>

                    <h3 class="mt-5 text-lg font-bold">
                        Sponsor lists a tournament
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                      dark:text-slate-400">
                        A sponsor registers a tournament, sets its territory —
                        such as a ward — and defines the participation
                        requirements.
                    </p>

                </article>


                <!-- Step 2 -->
                <article class="rounded-2xl border border-slate-200 bg-slate-50 p-6
                         dark:border-slate-800 dark:bg-slate-900/60">

                    <span class="flex h-10 w-10 items-center justify-center rounded-xl
                          bg-blue-600 text-sm font-black text-white">
                        02
                    </span>

                    <h3 class="mt-5 text-lg font-bold">
                        Coach registers a team
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                      dark:text-slate-400">
                        A coach creates the team profile, adds players to the
                        roster and keeps everything ready for competition.
                    </p>

                </article>


                <!-- Step 3 -->
                <article class="rounded-2xl border border-slate-200 bg-slate-50 p-6
                         dark:border-slate-800 dark:bg-slate-900/60">

                    <span class="flex h-10 w-10 items-center justify-center rounded-xl
                          bg-blue-600 text-sm font-black text-white">
                        03
                    </span>

                    <h3 class="mt-5 text-lg font-bold">
                        Eligible teams join
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                      dark:text-slate-400">
                        Teams within the tournament territory join and compete —
                        no disputes, no missed invitations.
                    </p>

                </article>

            </div>

        </div>
    </section>


    <!-- =========================================================
         TERRITORY SPOTLIGHT
    ========================================================== -->

    <section class="border-y border-slate-200 bg-slate-50 py-20
             dark:border-slate-800 dark:bg-slate-900/40 sm:py-24">

        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="grid items-center gap-12 lg:grid-cols-2">

                <!-- Explanation -->
                <div>

                    <p class="text-sm font-bold uppercase tracking-widest
                       text-blue-600 dark:text-blue-400">
                        Territory-based tournaments
                    </p>

                    <h2 class="mt-3 text-3xl font-black tracking-tight sm:text-4xl">
                        Opportunities that stay with the community.
                    </h2>

                    <p class="mt-5 text-base leading-8 text-slate-600
                       dark:text-slate-400">
                        Every tournament on Tonaa belongs to a territory. When a
                        sponsor sets one — say Kilibwoni Ward — only teams
                        registered within that ward can participate. The result
                        is fair competition and tournaments that truly serve
                        their communities.
                    </p>

                </div>


                <!-- Mock tournament card -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6
                      shadow-xl shadow-slate-200/50
                      dark:border-slate-800 dark:bg-slate-950 dark:shadow-black/20 sm:p-8">

                    <div class="flex items-start justify-between gap-4">

                        <div class="flex items-center gap-3.5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center
                                 rounded-xl bg-blue-600 text-white">
                                <ion-icon name="trophy-outline" class="text-xl"></ion-icon>
                            </div>

                            <div>
                                <p class="font-extrabold">
                                    Kilibwoni Ward Open Cup
                                </p>

                                <p class="text-xs text-slate-400">
                                    Community tournament
                                </p>
                            </div>

                        </div>

                        <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50
                              px-3 py-1.5 text-[11px] font-bold uppercase tracking-wide
                              text-blue-700 dark:bg-blue-900/30 dark:text-blue-300">
                            <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                            Open
                        </span>

                    </div>


                    <dl class="mt-7 space-y-4 text-sm">

                        <div class="flex items-center gap-3">
                            <ion-icon name="location-outline"
                                class="shrink-0 text-lg text-slate-400"></ion-icon>

                            <div>
                                <dt class="sr-only">
                                    Territory
                                </dt>

                                <dd class="font-semibold">
                                    Kilibwoni Ward
                                </dd>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <ion-icon name="people-outline"
                                class="shrink-0 text-lg text-slate-400"></ion-icon>

                            <div>
                                <dt class="sr-only">
                                    Eligibility
                                </dt>

                                <dd class="font-semibold">
                                    Teams registered in Kilibwoni Ward only
                                </dd>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <ion-icon name="calendar-outline"
                                class="shrink-0 text-lg text-slate-400"></ion-icon>

                            <div>
                                <dt class="sr-only">
                                    Season
                                </dt>

                                <dd class="font-semibold">
                                    Season 2026
                                </dd>
                            </div>
                        </div>

                    </dl>


                    <div class="mt-7 rounded-xl border border-dashed border-slate-300 p-4
                         text-xs leading-6 text-slate-500
                         dark:border-slate-700 dark:text-slate-400">
                        Eligibility is checked automatically — coaches only see
                        tournaments their team qualifies for.
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         FINAL CTA
    ========================================================== -->

    <section class="bg-blue-600 py-16 sm:py-20">

        <div class="mx-auto max-w-4xl px-5 text-center sm:px-6">

            <h2 class="text-3xl font-black tracking-tight text-white sm:text-4xl">
                Put your team on the pitch.
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-blue-100">
                Register your team as a coach or create a tournament for your
                community as a sponsor. Tonaa handles the rest.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

                <a href="{{ route('register-team') }}" wire:navigate
                   class="inline-flex items-center justify-center gap-2 rounded-xl
                   bg-white px-6 py-3.5 text-sm font-bold text-blue-700
                   transition hover:bg-blue-50">
                    <ion-icon name="people-outline"></ion-icon>
                    Register Your Team
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

                <a href="{{ route('register-tournament') }}" wire:navigate
                   class="inline-flex items-center justify-center gap-2 rounded-xl
                   border border-white/40 px-6 py-3.5 text-sm font-bold
                   text-white transition hover:bg-white/10">
                    <ion-icon name="business-outline"></ion-icon>
                    Register a Tournament
                </a>

            </div>

        </div>
    </section>
</div>
