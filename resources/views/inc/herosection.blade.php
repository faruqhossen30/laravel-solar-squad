@php
    use App\Models\Slider;
    $sliders = Slider::all();
@endphp
<section id="heroSlider" class="owl-carousel owl-theme">
    @foreach ($sliders as $key => $item)
        <section class="w-full  bg-no-repeat bg-cover flex items-center " style="background: linear-gradient(rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.60)), url({{ asset('storage') . '/' . $item->thumbnail }}); background-size: cover; background-repeat: no-repeat; height: 85vh">
                <div class="w-full px-20 mx-auto space-y-8 lg:space-y-8 py-8 lg:py-42 ">

                    <h1 class="text-[#F8FAFC] text-3xl  leading-normal lg:text-[72px] lg:text-left font-extrabold animate__animated animate__slideInDown w-full px-3 lg:w-1/2">
                        {{ $item->title }}
                    </h1>

                    <p class="text-[#F8FAFC] lg:text-2xl font-display font-normal text-wrap px-4 w-full pb-5   text-center lg:text-left  lg:w-1/3 animate__animated animate__zoomIn ">
                        {{ $item->description }}
                    </p>
                    <div class="px-4 flex justify-center lg:justify-start">

                        <button href="#"onclick="Calendly.initPopupWidget({url: 'https://calendly.com/solarsquad/book?hide_gdpr_banner=1'});return true;" class="flex items-center bg-[#2563EB] text-white text-xl font-semibold rounded-md px-8 py-5 space-x-2">
                            <span>Boost Your Income</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5  font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>

        </section>
    @endforeach
</section>
