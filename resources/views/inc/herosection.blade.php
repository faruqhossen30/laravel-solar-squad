<section id="heroSlider" class="owl-carousel owl-theme">
    @foreach ([1, 2, 3, 4, 5, 6] as $key => $item)
    <section  class="w-full bg-no-repeat bg-cover" style="background-image: url('img/young-beautiful-smiling-model-using-new-laptop-citypark-sunny-day.jpg')">
            <div class="absluate inset-0 bg-gray-900 bg-center opacity-65" style="height: 85vh">
                <div class="container mx-auto space-y-12 py-36 ">

                    <h1 class="text-white text-6xl font-extrabold">
                        Earn Extra Income <br>
                        with Ease {{ $key }}
                    </h1>

                    <p class="text-white text-xl  font-display font-semibold">
                        Discover a simple way to boost your income by helping <br>others save on their utility bills. No prior sales <br>experience needed!
                    </p>

                    <button href="#" class="flex items-center bg-[#2563EB] text-white  text-xl font-semibold rounded-lg px-3 py-2">
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
