@php
    use App\Models\Service;
    $services = Service::get();

@endphp
<section class="bg-[#F1F5F9]"  >
    <div class="container mx-auto">
        <div id="featureOwlSlider" class="owl-carousel owl-theme grid grid-cols-12 gap-3 py-24">
            @foreach ($services as $item)
                <div class="lg:col-span-4 col-span-12">
                    <div class="space-y-3 py-12">
                        <div class="border-2 border-gray-300 rounded-xl lg:hover:shadow-2xl   space-y-6 ">
                            <img class="w-full bg-cover rounded-t-xl" src="{{ asset('storage/'.$item->thumbnail) }}" style="width: 100% !important">
                            {{-- <div class="py-5 px-3 text-start space-y-8"> --}}
                            <div class="px-8 pt-4 space-y-6">
                                <h3 class="text-[26px] font-semibold font-display text-[#334155]">{{$item->title}}</h3>
                                <p class="text-xl font-normal font-display text-[#334155]">{{$item->description}}</p>
                                <div class="flex justify-center lg:justify-end py-6 mr-2">
                                    <button onclick="Calendly.initPopupWidget({url: 'https://calendly.com/solarsquad/book?hide_gdpr_banner=1'});return true;" class="bg-[#2563EB] text-white px-6 text-lg font-semibold py-2 rounded-lg">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
