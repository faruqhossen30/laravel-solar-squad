@php
    use App\Models\Setting\WebsiteSetting;
    $site = WebsiteSetting::first();
@endphp
<section class="bg-[#F1F5F9] py-12 lg:py-36 bg-cover object-center bg-no-repeat" style="background-image: url('img/solar.png')">
    <div class="flex justify-center items-center">
        <span class="relative flex items-center justify-center h-24 w-24">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-transparent ring-2 ring-white opacity-75"></span>
            <span class="animate-ping absolute inline-flex w-10/12 h-5/6 rounded-full bg-transparent ring-2 ring-white opacity-75"></span>
            <button href="{{$site->video_url}}"  class="video-popupbutton flex items-center justify-center rounded-full h-24 w-24 bg-white z-50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-14 h-14 text-blue-500">
                    <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                  </svg>
                </button>
          </span>

    </div>
</section>


{{-- <a class="video-popupbutton" >Open popup</a> --}}
