@php
    use App\Models\Service;
    $services = Service::all();

@endphp
<section class="bg-[#F1F5F9]"  >
    <div class="container mx-auto">
        <div id="featureOwlSlider" class="owl-carousel owl-theme grid grid-cols-12 gap-3 py-6 lg:py-12 ">

            @foreach ($services as $item)
                <div class="col-span-4 ">
                    <div class=" space-y-3 ">
                        <div class="border rounded-lg hover:shadow-xl space-y-3">
                            <img class="w-full bg-cover rounded-t-xl" src="{{ asset('storage/'.$item->thumbnail) }}">
                            <div class="px-6  space-y-3">
                                <h3 class="text-xl font-semibold font-display text-[#334155]">{{$item->title}}</h3>
                                <p class="text-base font-normal font-display text-[#334155]">{{$item->description}}</p>
                                <div class="flex justify-center lg:justify-end py-2">
                                    <a href="#" class="bg-[#2563EB] text-white px-6  py-2 rounded-lg">learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
