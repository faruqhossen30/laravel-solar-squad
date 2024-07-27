@php
    use App\Models\Testmonial;
    $testmonials = Testmonial::all();
@endphp
<section>
    <div class="lg:w-[1515px] mx-auto lg:py-44 py-10  ">
        <div id="testMonialSlider" class="owl-carousel owl-theme grid grid-cols-12   ">

            @foreach ($testmonials as $testmonial)
                <div class="col-span-12 lg:col-span-6  ">
                    <div class="flex justify-center -mb-20">
                        <img src="{{ asset('storage/' . $testmonial->thumbnail) }}"
                            class=" object-cover  object-top max-h-[220px] min-w-[220px]   border-8 border-white rounded-full " alt="">
                    </div>

                    <div class="bg-[#E2E8F0] rounded-3xl ">

                        <div class="flex justify-between px-6 pt-12">
                            {{-- <img src="{{ asset('img/quate-down.png') }}" class="h-8 w-8" alt="" srcset=""> --}}
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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

                            <div class="py-8">
                                <span class="text-[36px] font-extrabold font-display  text-[#475569]">{{ $testmonial->name }}</span>
                                <p class="text-center text-[24px] font-normal  font-display text-[#475569]">{{ $testmonial->address }}</p>
                            </div>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 rotate-180" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
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
                        <p class="lg:px-12 text-center text-[19px] font-normal font-display text-[#475569]">
                            <?php echo substr($testmonial->description, 0, 315); ?></p>

                        <div class="flex justify-center py-6">

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
