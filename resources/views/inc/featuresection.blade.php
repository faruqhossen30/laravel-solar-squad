
<section class="bg-[#F1F5F9]">
    <div class="container mx-auto">
        <div id="featureOwlSlider" class="owl-carousel owl-theme grid grid-cols-12 gap-3 py-24 ">

            @foreach ([1,1,2,1,1,1,1] as $item)
            <div class="col-span-4 ">
                <div class=" space-y-3 ">
                    <div class="border rounded-lg hover:shadow-xl space-y-3">
                        <img class="w-full object-cover rounded-t-xl" src="{{ asset('img/businesswoman-with-money 1.png') }}">
                        <div class="px-6  space-y-3">
                            <h3 class="text-xl font-semibold font-display text-[#334155]">Turn Your Spare Time Into Cash.</h3>
                            <p class="text-base font-normal font-display text-[#334155]">At Solar Squad, you can achieve this without any previous sales training or skills. This
                                opportunity is about making a
                                simple call to your friends, letting them know they can save on their utility bills.</p>
                            <div class="flex justify-end py-2">
                                <a href="#" class="bg-[#2563EB] text-white px-3 py-2 rounded-lg">learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
