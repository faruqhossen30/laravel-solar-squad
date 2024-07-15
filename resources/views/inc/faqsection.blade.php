@php
    use App\Models\Faq;
    $faqs = Faq::all();
@endphp

<section class="container mx-auto py-10">

    <div id="accordion-color" data-accordion="collapse"  data-active-classes="bg-gray-200 rounded-t-xl" class=" px-3 divide-y">

        @foreach ($faqs as $key => $faq)
            <h2 id="accordion-color-heading-{{ $faq->id }}"  data-aos="fade-right"
                data-aos-offset="600"
                data-aos-duration="2000"
                data-aos-easing="ease-in-sine">
                <button type="button"
                    class="flex items-start justify-between w-full p-4 font-medium rtl:text-right text-gray-500  hover:bg-gray-200  gap-2"
                    data-accordion-target="#accordion-color-body-{{ $faq->id }}" aria-expanded="true" aria-controls="accordion-color-body-{{ $faq->id }}">
                    <span class=" font-display text-[#334155] font-semibold capitalize text-left">{{ $faq->question }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-{{ $faq->id }}" class="@if ($key != 0) hidden @endif mb-5 font-display bg-gray-200 rounded-b-xl"
                aria-labelledby="accordion-color-heading-{{ $faq->id }}" data-aos="fade-right"
                data-aos-offset="600"
                data-aos-duration="2000"
                data-aos-easing="ease-in-sine">
                <div class="p-3">
                    <p class="mb-2   text-[#475569i1] font-normal text-sm capitalize">{{ $faq->answer }}</p>
                </div>
            </div>
        @endforeach


    </div>

</section>
