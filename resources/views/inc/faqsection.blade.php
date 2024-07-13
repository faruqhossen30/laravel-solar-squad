@php
    use App\Models\Faq;
    $faqs = Faq::all();
@endphp
{{-- <section class="bg-white">
    <div class="container mx-auto py-24 ">
        <div id="accordion-collapse" data-accordion="collapse" data-active-classes="rounded-xl" class=" divide-y-2 divide-gray-100">
            @foreach ($faqs as $key => $faq)
                <div class=" border p-4 space-y-4 "  >
                    <h6 id="accordion-collapse-heading-{{ $faq->id }}" data-active-classes="rounded-xl">
                        <button type="button" class="flex justify-between text-[20px] font-bold w-full" data-accordion-target="#accordion-collapse-body-{{ $faq->id }}"
                            aria-expanded="true" aria-controls="accordion-collapse-body-{{ $faq->id }}">
                            <span class="font-display ">{{$faq->question}}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h6>
                    <p id="accordion-collapse-body-{{ $faq->id }}" class="@if ($key != 0) hidden @endif font-display"
                        aria-labelledby="accordion-collapse-heading-{{ $faq->id }}">{{$faq->answer}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}



<section class="container mx-auto py-10">

    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-gray-200 rounded-t-xl" class=" divide-y">

        @foreach ($faqs as $key => $faq)
            <h2 id="accordion-color-heading-{{ $faq->id }}">
                <button type="button"
                    class="flex items-center justify-between w-full p-4 font-medium rtl:text-right text-gray-500 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-800 gap-2"
                    data-accordion-target="#accordion-color-body-{{ $faq->id }}" aria-expanded="true" aria-controls="accordion-color-body-{{ $faq->id }}">
                    <span class=" font-display text-[#334155] font-semibold capitalize">{{ $faq->question }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-{{ $faq->id }}" class="@if ($key != 0) hidden @endif mb-5 font-display bg-gray-200 rounded-b-xl"
                aria-labelledby="accordion-color-heading-{{ $faq->id }}">
                <div class="p-3 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2  dark:text-gray-400 text-[#475569i1] font-normal text-sm capitalize">{{ $faq->answer }}</p>
                </div>
            </div>
        @endforeach


    </div>

</section>
