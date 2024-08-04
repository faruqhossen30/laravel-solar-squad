@php
    use App\Models\Service;
    $services = Service::get();
@endphp
<section class="bg-[#F1F5F9] lg:py-[70px] xl:py-[124px]">
    <div class="container mx-auto">
        <div id="featureOwlSlider" class="owl-carousel owl-theme grid grid-cols-12 px-3 lg:px-10">
            @foreach ($services as $item)
                <div class="lg:col-span-4 col-span-12">
                    <div class="">
                        <div class="border-2 border-gray-300 rounded-xl lg:hover:shadow-2xl">
                            <img class="w-full bg-cover rounded-t-xl lg:max-h-[400px]" src="{{ asset('storage/'.$item->thumbnail) }}" style="width: 100% !important">
                            <div class="px-8 py-5 lg:py-12 space-y-4 lg:space-y-8">
                                <h3 class="text-[18px] lg:text-xl xl:text-[26px] font-semibold font-display text-[#334155]">{{$item->title}}</h3>
                                <p class="text-base lg:text-lg xl:text-xl  font-normal font-display text-[#334155] ">{{$item->description}}</p>
                                <div class="flex justify-start lg:justify-end">


                                    <button onclick="Calendly.initPopupWidget({url: 'https://calendly.com/solarsquad/book?hide_gdpr_banner=1'});return true;" class="bg-[#2563EB] text-white px-3 lg:px-6 text-base lg:text-lg font-semibold py-2 lg:py-2 rounded-md lg:rounded-lg">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
