@php
    use App\Models\Faq;
    $faqs = Faq::all();
@endphp

<section class=" bg-[#F1F5F9]">
    <div class="lg:w-[1480px] mx-auto lg:py-20">
        <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-[#E2E8F0] rounded-t-xl" data-inactive-classes="my-5" class=" px-3 divide-y">
            @foreach ($faqs as $key => $faq)
                <h2 id="accordion-color-heading-{{ $faq->id }}" class="" data-aos-offset="600" data-aos-duration="1000">
                    <button type="button" class="flex items-start justify-between w-full lg:pt-10 mt-6 lg:mt-0  lg:px-20 font-medium rtl:text-right text-gray-500  gap-2"
                        data-accordion-target="#accordion-color-body-{{ $faq->id }}" aria-expanded="true" aria-controls="accordion-color-body-{{ $faq->id }}">
                        <span class="px-6 py-3  text-left font-display text-[#334155] lg:text-[24px] text-[20px] font-semibold capitalize ">{{ $faq->question }}</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 m-6 lg:m-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-{{ $faq->id }}" class="@if ($key != 0) hidden @endif mb-5 font-display bg-[#E2E8F0] rounded-b-xl"
                    aria-labelledby="accordion-color-heading-{{ $faq->id }}" data-aos-offset="600" data-aos-duration="2000">
                    <div class="px-6 py-3 ">
                        <p class="mb-2 lg:text-[20px] text-[19px] text-justify lg:mr-56 leading-7 font-display capitalize lg:px-20 lg:py-6 text-[#475569] font-normal text-sm ">{{ $faq->answer }}</p>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

</section>
