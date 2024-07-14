@php
    use App\Models\Slider;
    $sliders = Slider::all();
@endphp
<section id="heroSlider" class="owl-carousel owl-theme">
    @foreach ($sliders as $key => $item)
        <section class="w-full  bg-no-repeat bg-cover " style="background: linear-gradient(rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.60)), url({{ asset('storage') . '/' . $item->thumbnail }}); background-size: cover; background-repeat: no-repeat; height: 85vh"
            style="">
                <div class="container mx-auto space-y-8 lg:space-y-12 py-8 lg:py-42 ">

                    <h1 class="text-white text-3xl lg:text-6xl text-center lg:text-left font-extrabold  w-full px-3 lg:w-1/2">
                        {{ $item->title }}
                    </h1>

                    <p class="text-white lg:text-xl  font-display font-semibold text-wrap px-4 w-full  text-center lg:text-left  lg:w-1/3  ">
                        {{ $item->description }}
                    </p>
                    <div class="px-4 flex justify-center lg:justify-start">

                        <button href="#" class="flex items-center bg-[#2563EB] text-white   text-xl font-semibold rounded-lg px-6 py-2">
                            Boost Your Income
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4  font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>

        </section>
    @endforeach
</section>
