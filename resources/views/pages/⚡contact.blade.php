<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Contact Us')] class extends Component
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
                Contact us
            </div>

            <h1 class="mt-7 text-4xl font-black tracking-tight text-slate-950
                 sm:text-5xl lg:text-6xl dark:text-white">
                Talk to the
                <br />
                <span class="text-blue-600">
                    Tonaa team.
                </span>
            </h1>

            <p class="mx-auto mt-7 max-w-2xl text-base leading-8 text-slate-600
                 sm:text-lg dark:text-slate-400">
                Questions about registering a team, listing a tournament or how
                territories work? Reach out — we usually respond within two
                working days.
            </p>

        </div>
    </section>


    <!-- =========================================================
         CONTACT CHANNELS + FORM
    ========================================================== -->

    <section class="bg-slate-50 py-20 dark:bg-slate-900/40 sm:py-24">

        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

            <div class="grid items-start gap-6 lg:grid-cols-[1fr_1.25fr]">

                <!-- Channels -->
                <div class="space-y-5">

                    <!-- Email -->
                    <a href="mailto:hello@tonaa.co.ke"
                       class="block rounded-2xl border border-slate-200 bg-white p-6
                       transition hover:border-blue-300 hover:shadow-lg
                       hover:shadow-slate-200/50
                       dark:border-slate-800 dark:bg-slate-950
                       dark:hover:border-blue-800 dark:hover:shadow-none">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl
                             bg-blue-50 text-blue-600
                             dark:bg-blue-900/30 dark:text-blue-400">
                            <ion-icon name="mail-outline" class="text-xl"></ion-icon>
                        </div>

                        <h2 class="mt-5 text-lg font-bold">
                            Email us
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-slate-500
                          dark:text-slate-400">
                            For registrations, sponsorships and general
                            inquiries.
                        </p>

                        <p class="mt-3 inline-flex items-center gap-1.5 text-sm
                          font-bold text-blue-600 dark:text-blue-400">
                            hello&#64;tonaa.co.ke
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </p>

                    </a>


                    <!-- Location -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6
                         dark:border-slate-800 dark:bg-slate-950">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl
                             bg-blue-50 text-blue-600
                             dark:bg-blue-900/30 dark:text-blue-400">
                            <ion-icon name="location-outline" class="text-xl"></ion-icon>
                        </div>

                        <h2 class="mt-5 text-lg font-bold">
                            Where we are
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-slate-500
                          dark:text-slate-400">
                            Tonaa is built for community football — starting in
                            Kilibwoni Ward, Nandi County, Kenya.
                        </p>

                    </div>


                    <!-- Socials -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6
                         dark:border-slate-800 dark:bg-slate-950">

                        <h2 class="text-lg font-bold">
                            Follow Tonaa
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-slate-500
                          dark:text-slate-400">
                            Tournament announcements and community updates.
                        </p>

                        <div class="mt-4 flex gap-2">

                            <a href="#" aria-label="Facebook" class="flex h-10 w-10 items-center justify-center
                             rounded-lg border border-slate-200 text-slate-500
                             transition hover:border-blue-600 hover:bg-blue-600
                             hover:text-white dark:border-slate-800 dark:text-slate-400">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>

                            <a href="#" aria-label="Instagram" class="flex h-10 w-10 items-center justify-center
                             rounded-lg border border-slate-200 text-slate-500
                             transition hover:border-blue-600 hover:bg-blue-600
                             hover:text-white dark:border-slate-800 dark:text-slate-400">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>

                            <a href="#" aria-label="X" class="flex h-10 w-10 items-center justify-center
                             rounded-lg border border-slate-200 text-slate-500
                             transition hover:border-blue-600 hover:bg-blue-600
                             hover:text-white dark:border-slate-800 dark:text-slate-400">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>

                            <a href="#" aria-label="WhatsApp" class="flex h-10 w-10 items-center justify-center
                             rounded-lg border border-slate-200 text-slate-500
                             transition hover:border-blue-600 hover:bg-blue-600
                             hover:text-white dark:border-slate-800 dark:text-slate-400">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Form -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm
                      dark:border-slate-800 dark:bg-slate-950 sm:p-8">

                    <h2 class="text-xl font-black tracking-tight">
                        Send us a message
                    </h2>

                    <p class="mt-2 text-sm leading-6 text-slate-500
                      dark:text-slate-400">
                        Fill in the form and we will get back to you by email.
                    </p>


                    <form id="contactForm" class="mt-7 space-y-5" novalidate>

                        <div class="grid gap-5 sm:grid-cols-2">

                            <div>
                                <label for="name" class="mb-2 block text-xs font-bold
                                     uppercase tracking-wider text-slate-500
                                     dark:text-slate-400">
                                    Name
                                </label>

                                <input type="text" id="name" name="name" required
                                    placeholder="Your full name"
                                    class="w-full rounded-lg border border-slate-300 bg-white
                                    px-4 py-3 text-sm text-slate-900
                                    placeholder-slate-400 transition
                                    focus:border-blue-500 focus:outline-none
                                    focus:ring-4 focus:ring-blue-600/10
                                    dark:border-slate-700 dark:bg-slate-950
                                    dark:text-white dark:placeholder-slate-500" />
                            </div>

                            <div>
                                <label for="email" class="mb-2 block text-xs font-bold
                                     uppercase tracking-wider text-slate-500
                                     dark:text-slate-400">
                                    Email
                                </label>

                                <input type="email" id="email" name="email" required
                                    placeholder="you&#64;example.com"
                                    class="w-full rounded-lg border border-slate-300 bg-white
                                    px-4 py-3 text-sm text-slate-900
                                    placeholder-slate-400 transition
                                    focus:border-blue-500 focus:outline-none
                                    focus:ring-4 focus:ring-blue-600/10
                                    dark:border-slate-700 dark:bg-slate-950
                                    dark:text-white dark:placeholder-slate-500" />
                            </div>

                        </div>


                        <div>
                            <label for="subject" class="mb-2 block text-xs font-bold
                                 uppercase tracking-wider text-slate-500
                                 dark:text-slate-400">
                                Subject
                            </label>

                            <select id="subject" name="subject" required
                                class="w-full rounded-lg border border-slate-300 bg-white
                                px-4 py-3 text-sm text-slate-900 transition
                                focus:border-blue-500 focus:outline-none
                                focus:ring-4 focus:ring-blue-600/10
                                dark:border-slate-700 dark:bg-slate-950
                                dark:text-white">
                                <option value="Team registration">
                                    Team registration
                                </option>

                                <option value="Tournament sponsorship">
                                    Tournament sponsorship
                                </option>

                                <option value="General inquiry">
                                    General inquiry
                                </option>
                            </select>
                        </div>


                        <div>
                            <label for="message" class="mb-2 block text-xs font-bold
                                 uppercase tracking-wider text-slate-500
                                 dark:text-slate-400">
                                Message
                            </label>

                            <textarea id="message" name="message" rows="6" required
                                placeholder="Tell us how we can help…"
                                class="w-full resize-y rounded-lg border border-slate-300 bg-white
                                px-4 py-3 text-sm text-slate-900
                                placeholder-slate-400 transition
                                focus:border-blue-500 focus:outline-none
                                focus:ring-4 focus:ring-blue-600/10
                                dark:border-slate-700 dark:bg-slate-950
                                dark:text-white dark:placeholder-slate-500"></textarea>
                        </div>


                        <button type="submit"
                            class="inline-flex w-full items-center justify-center gap-2
                            rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-bold
                            text-white shadow-sm shadow-blue-600/20 transition
                            hover:bg-blue-700">
                            Send message
                            <ion-icon name="send-outline"></ion-icon>
                        </button>

                        <p class="text-xs text-slate-400">
                            This opens your email app with the message prepared —
                            no account needed.
                        </p>

                    </form>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         CONTACT FORM SCRIPT (mailto compose)
    ========================================================== -->

    <script>
        const contactForm = document.getElementById("contactForm");

        contactForm.addEventListener("submit", (event) => {

            event.preventDefault();

            if (!contactForm.reportValidity()) {
                return;
            }

            const data = new FormData(contactForm);

            const subject = encodeURIComponent(
                "[Tonaa] " + data.get("subject")
            );

            const body = encodeURIComponent(
                data.get("message") +
                "\n\n—\n" +
                data.get("name") +
                "\n" +
                data.get("email")
            );

            window.location.href =
                "mailto:hello@tonaa.co.ke?subject=" + subject + "&body=" + body;
        });
    </script>
</div>
