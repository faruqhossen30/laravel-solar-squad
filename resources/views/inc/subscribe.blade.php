<section class="bg-[#F1F5F9] lg:pb-28 pb-6">

    <div class="rounded-lg container overflow-x-hidden">
        <div class="container lg:max-w-[860px] xl:max-w-[1240px] mx-auto bg-[#E2E8F0] py-6 lg:py-[50px] space-y-4">
            {{-- <div class="container mx-auto bg-[#E2E8F0] py-6 lg:py-[50px] space-y-4"> --}}

            <h4 class="text-center lg:text-3xl text-2xl font-bold font-display text-[#475569] animate__animated animate__heartBeat">Subscribe</h4>
            <h6 class="text-center capitalize lg:text-[19px] text-[16px]  font-medium font-display  text-[#475569] animate__animated animate__flipInX">For Solar Squad Promotions
                And News Updates</h6>

            <form action="{{ route('subscribed') }}" method="post">
                @csrf
                <div class="flex items-center  justify-center px-6 lg:px-52 xl:px-80">
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">

                        </div>
                        <input type="email" id="voice-search" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-5 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Email Address" />
                        @error('email')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror



                    </div>
                    <button type="submit"
                        class="inline-flex items-center py-2 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>
