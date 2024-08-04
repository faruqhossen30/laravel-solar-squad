<section class="sticky top-0 z-50 bg-gray-50 shadow-sm">
    <nav class="container border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-wrap items-center justify-between mx-auto py-2">
            <a href="{{ route('homepage') }}" class="flex items-center  rtl:space-x-reverse">
                <img src="{{ asset('img/Group 2@2x.png') }}" class="h-14" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto " id="navbar-solid-bg">
                <ul
                    class="flex flex-col   items-center  divide-x-reverse font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="{{ route('homepage') }}"
                            class="block py-1 px-3 md:p-0 text-gray-900 font-display rounded hover:bg-blue-700 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#aboutus"
                            class="block py-1 px-3 md:p-0 text-gray-900 font-display rounded hover:bg-blue-700 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About
                            Us</a>
                    </li>
                    <li>
                        <a href="#overview"
                            class="block py-1 px-3 md:p-0 text-gray-900 font-display rounded hover:bg-blue-700 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Overview</a>
                    </li>
                    <li>
                        <a href="#faq"
                            class="block py-1 px-6 md:p-0 text-gray-900 font-display rounded hover:bg-blue-700 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">FAQ</a>
                    </li>

                    <li>
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                            class="block py-1 px-3 mb-1 md:p-0 text-gray-900 font-display rounded hover:bg-blue-700 hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            type="button">
                            Contact Us
                        </button>

                        <!-- Main modal -->
                        <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between pt-3 pr-3 rounded-t dark:border-gray-600">
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="static-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <!-- Contact Us -->
                                    <div class="mx-auto">


                                        <div class="p-6 mx-auto">
                                            <!-- Card -->
                                            <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-neutral-700">
                                                <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                                    Get in touch
                                                </h2>

                                                <form action="{{ route('contact.send') }}" method="POST">
                                                    @csrf
                                                    <div class="grid gap-4 lg:gap-6">
                                                        <!-- Grid -->
                                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                                            <div>
                                                                <label for="hs-firstname-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">First
                                                                    Name</label>
                                                                <input type="text" name="fname" id="hs-firstname-contacts-1"
                                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                            </div>

                                                            <div>
                                                                <label for="hs-lastname-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Last
                                                                    Name</label>
                                                                <input type="text" name="lname" id="hs-lastname-contacts-1"
                                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                            </div>
                                                        </div>
                                                        <!-- End Grid -->

                                                        <!-- Grid -->
                                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                                            <div>
                                                                <label for="hs-email-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Email</label>
                                                                <input type="email" name="email" id="hs-email-contacts-1" autocomplete="email"
                                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                            </div>

                                                            <div>
                                                                <label for="hs-phone-number-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Phone
                                                                    Number</label>
                                                                <input type="text" name="phone" id="hs-phone-number-1"
                                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                            </div>
                                                        </div>
                                                        <!-- End Grid -->

                                                        <div>
                                                            <label for="hs-about-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Details</label>
                                                            <textarea id="hs-about-contacts-1" name="details" rows="4"
                                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- End Grid -->

                                                    <div class="mt-6 grid">
                                                        <button type="submit"
                                                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">submit</button>
                                                    </div>
                                            </div>
                                            <!-- End Card -->
                                        </div>
                                    </div>
                                    <!-- End Contact Us -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="hidden lg:block ">
                        <a href="#"
                            class="block py-3 text-2xl px-3 md:p-0 font-display text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">|</a>
                    </li>



                    <button type="button" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/solarsquad/book?hide_gdpr_banner=1'});return true;"
                        class="flex items-center bg-[#2563EB] text-white rounded-lg px-3 py-2 space-x-2">
                        <p>
                            Book Your Call
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4  font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </ul>

            </div>
        </div>
    </nav>

</section>
