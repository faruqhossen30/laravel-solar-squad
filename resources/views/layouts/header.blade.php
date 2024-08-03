@php
    use App\Models\Setting\WebsiteSetting;
    $site = WebsiteSetting::first();
@endphp

<section class="bg-[#2563EB]">
    <div class="container">
        <div class="grid grid-cols-12 py-3">
            <div class="lg:col-span-3 hidden lg:block">
                <ul class="flex  justify-start text-white space-x-6 ">
                    <li><a href="#aboutus">About Us</a></li>
                    <li>
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                            class="block py-3 px-3 md:p-0 text-white  font-display rounded hover:text-white md:hover:bg-transparent md:border-0  dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            type="button">
                            Contact
                        </button>
                    </li>

                </ul>
            </div>
            <div class="lg:col-span-6 col-span-6">
                <div class="flex justify-start lg:justify-center text-white text-start">
                    <p>info@solarsquad.us </p>
                </div>
            </div>
            <div class="col-span-6 lg:col-span-3  lg:block ">
                <div class="flex  justify-end lg:space-x-6 space-x-3">
                    <a href="{{$site->facebook_link}}" target="_bland">
                        <svg class="w-6 h-6  border-2 rounded-full p-1  text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="{{$site->instagram_link}}" target="_blank">
                        <svg class="w-6 h-6 border-2 rounded-full p-1  text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
