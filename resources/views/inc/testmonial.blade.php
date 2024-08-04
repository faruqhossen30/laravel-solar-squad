@php
    use App\Models\Testmonial;
    $testmonials = Testmonial::all();
@endphp
<section class="bg-[#F8FAFC] px-3 lg:px-0 hidden xl:block">
    <div class="lg:w-[1515px]  mx-auto lg:py-44 py-10 ">
        <div id="testMonialSlider" class="owl-carousel owl-theme">
            @foreach ($testmonials as $testmonial)
                <div class="h-full ">
                    <div class="flex justify-center lg:-mb-[110px] xl:-mb-[80px]">
                        <img src="{{ asset('storage/' . $testmonial->thumbnail) }}"
                            class=" object-cover  object-top lg:max-h-[220px] lg:min-h-[220px] lg:min-w-[220px] lg:max-w-[220px] max-h-[180px] min-h-[180px] min-w-[180px] max-w-[180px]  border-8 border-white rounded-full "
                            alt="">
                    </div>

                    <div class="bg-[#E2E8F0] rounded-3xl  ">
                        <div class="flex items-center justify-between px-10  lg:pt-24 pt-14">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="lg:h-24 lg:w-24 h-16 w-16" xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px" viewBox="0 0 288 288" style="enable-background:new 0 0 288 288;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #2563EB;
                                    }

                                    .st1 {
                                        fill: #F97316;
                                    }

                                    .st2 {
                                        fill: #1E40AF;
                                    }

                                    .st3 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #FDC60B;
                                        fill-opacity: 0.5;
                                    }
                                </style>
                                <path class="st0" d="M128.3,72.97l-7.78-11.82c-53.84,35.73-83.75,79.16-83.75,114.89c0,34.57,25.73,50.82,47.56,50.82
                                                                       c27.52,0,46.96-23.01,46.96-47.24c0-20.42-13.16-37.83-30.81-44.32c-5.09-1.79-9.87-3.27-9.87-11.82
                                                                       C90.61,112.55,98.69,96.3,128.3,72.97z M247.05,72.97l-7.78-11.82c-53.25,35.73-83.75,79.16-83.75,114.89
                                                                       c0,34.57,26.32,50.82,48.16,50.82c27.81,0,47.56-23.01,47.56-47.24c0-20.42-13.45-37.83-31.71-44.32
                                                                       c-5.08-1.79-9.57-3.27-9.57-11.82C209.95,112.55,218.33,96.3,247.05,72.97L247.05,72.97z" />
                            </svg>

                            <div class="pt-8 pb-4 ">
                                <span class="lg:text-[36px] text-2xl font-extrabold font-display  text-[#475569]">{{ $testmonial->name }}</span>
                                <p class="text-center lg:text-[24px] text-xl font-normal  font-display text-[#475569]">{{ $testmonial->address }}</p>
                            </div>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="lg:h-24 lg:w-24 h-16 w-16 rotate-180"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 288 288" style="enable-background:new 0 0 288 288;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #2563EB;
                                    }

                                    .st1 {
                                        fill: #F97316;
                                    }

                                    .st2 {
                                        fill: #1E40AF;
                                    }

                                    .st3 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #FDC60B;
                                        fill-opacity: 0.5;
                                    }
                                </style>
                                <path class="st0" d="M128.3,72.97l-7.78-11.82c-53.84,35.73-83.75,79.16-83.75,114.89c0,34.57,25.73,50.82,47.56,50.82
                                                                   c27.52,0,46.96-23.01,46.96-47.24c0-20.42-13.16-37.83-30.81-44.32c-5.09-1.79-9.87-3.27-9.87-11.82
                                                                   C90.61,112.55,98.69,96.3,128.3,72.97z M247.05,72.97l-7.78-11.82c-53.25,35.73-83.75,79.16-83.75,114.89
                                                                   c0,34.57,26.32,50.82,48.16,50.82c27.81,0,47.56-23.01,47.56-47.24c0-20.42-13.45-37.83-31.71-44.32
                                                                   c-5.08-1.79-9.57-3.27-9.57-11.82C209.95,112.55,218.33,96.3,247.05,72.97L247.05,72.97z" />
                            </svg>
                        </div>
                        <p class="lg:px-12 px-6 text-justify  lg:text-center text-[19px] font-normal font-display text-[#475569] line-clamp-3 ">
                            <?php echo substr($testmonial->description, 0, 415); ?>
                        </p>

                        <div class="flex justify-center xl:py-6 lg:py-6 py-10 ">

                            @for ($i = 1; $i <= $testmonial->review; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-[#2563EB]">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endfor

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="bg-[#F8FAFC] px-3 lg:px-0 xl:hidden">
    <div class="py-10 px-5 lg:px-10">
        <div id="testMonialmobileSlider" class="owl-carousel owl-theme ">

            @foreach ($testmonials as $testmonial)
                <div class="min-h-full rounded-b-3xl" style="background: rgb(226,232,240); background: linear-gradient(0deg, rgba(226,232,240,1) 43%, rgba(255,255,255,1) 100%);">
                    <div class="flex justify-center -mb-[80px]">
                        <img src="{{ asset('storage/' . $testmonial->thumbnail) }}"
                            class=" object-cover  object-top  max-h-[180px] min-h-[180px] min-w-[180px] max-w-[180px]  border-8 border-white rounded-full " alt="">
                    </div>

                    <div class="bg-[#E2E8F0] flex flex-col rounded-3xl min-h-full">

                        <div class="flex items-center justify-between px-10 pt-14">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class=" h-16 w-16" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 288 288" style="enable-background:new 0 0 288 288;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #2563EB;
                                    }

                                    .st1 {
                                        fill: #F97316;
                                    }

                                    .st2 {
                                        fill: #1E40AF;
                                    }

                                    .st3 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #FDC60B;
                                        fill-opacity: 0.5;
                                    }
                                </style>
                                <path class="st0" d="M128.3,72.97l-7.78-11.82c-53.84,35.73-83.75,79.16-83.75,114.89c0,34.57,25.73,50.82,47.56,50.82
                                                               c27.52,0,46.96-23.01,46.96-47.24c0-20.42-13.16-37.83-30.81-44.32c-5.09-1.79-9.87-3.27-9.87-11.82
                                                               C90.61,112.55,98.69,96.3,128.3,72.97z M247.05,72.97l-7.78-11.82c-53.25,35.73-83.75,79.16-83.75,114.89
                                                               c0,34.57,26.32,50.82,48.16,50.82c27.81,0,47.56-23.01,47.56-47.24c0-20.42-13.45-37.83-31.71-44.32
                                                               c-5.08-1.79-9.57-3.27-9.57-11.82C209.95,112.55,218.33,96.3,247.05,72.97L247.05,72.97z" />
                            </svg>

                            <div class="pt-8 pb-4 ">
                                <span class="text-2xl font-extrabold font-display  text-[#475569]">{{ $testmonial->name }}</span>
                                <p class="text-center  text-xl font-normal  font-display text-[#475569]">{{ $testmonial->address }}</p>
                            </div>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class=" h-16 w-16 rotate-180" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 288 288" style="enable-background:new 0 0 288 288;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #2563EB;
                                    }

                                    .st1 {
                                        fill: #F97316;
                                    }

                                    .st2 {
                                        fill: #1E40AF;
                                    }

                                    .st3 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #FDC60B;
                                        fill-opacity: 0.5;
                                    }
                                </style>
                                <path class="st0" d="M128.3,72.97l-7.78-11.82c-53.84,35.73-83.75,79.16-83.75,114.89c0,34.57,25.73,50.82,47.56,50.82
                                                           c27.52,0,46.96-23.01,46.96-47.24c0-20.42-13.16-37.83-30.81-44.32c-5.09-1.79-9.87-3.27-9.87-11.82
                                                           C90.61,112.55,98.69,96.3,128.3,72.97z M247.05,72.97l-7.78-11.82c-53.25,35.73-83.75,79.16-83.75,114.89
                                                           c0,34.57,26.32,50.82,48.16,50.82c27.81,0,47.56-23.01,47.56-47.24c0-20.42-13.45-37.83-31.71-44.32
                                                           c-5.08-1.79-9.57-3.27-9.57-11.82C209.95,112.55,218.33,96.3,247.05,72.97L247.05,72.97z" />
                            </svg>
                        </div>
                        <p class="px-8 text-start text-[18px] font-normal font-display text-[#475569]">
                            <?php echo substr($testmonial->description, 0, 315); ?></p>

                        <div class="flex justify-center lg:py-6 py-3">

                            @for ($i = 1; $i <= $testmonial->review; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-[#2563EB]">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endfor

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
