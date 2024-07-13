@extends('layouts.app')
@section('content')
    <!----------herosection------------>
    @include('inc.herosection')
    <!----------herosection------------>
    <!---------frature section--------->
    @include('inc.featuresection')
    <!---------frature section--------->
    <!---------about section--------->
    @include('inc.aboutsection')
    <!---------about section--------->
    <!--------stand out----------->
    @include('inc.standout')
    <!--------stand out----------->
    <!-------video section-------->
    @include('inc.videosection')
    <!-------video section-------->
    <!-------------status section--------->
    @include('inc.statussection')
    <!-------------status section--------->
    <!--------------nextstep section---------->
    @include('inc.nextstep')
    <!--------------nextstep section---------->
    <!-------------testmonial --------------->
    @include('inc.testmonial')
    <!-------------testmonial --------------->
    <!----------------title section--------------->
    @include('inc.titlesection')
    <!----------------title section--------------->
    <!--------------faq section ------------------>
    @include('inc.faqsection')
    <!--------------faq section ------------------>
    <!-------- subscribe section------------------>
    @include('inc.subscribe')
    <!-------- subscribe section------------------>



@endsection




@push('scripts')

{{--
<script>
    function animateValue(id, start, end, duration) {
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        document.getElementById(id).innerText = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
      };
      window.requestAnimationFrame(step);
    }

    document.addEventListener("DOMContentLoaded", () => {
      animateValue("number1", 0, 50000, 3000);
      animateValue("number2", 0, 1500, 3000);
      animateValue("number3", 0, 500, 3000);
      animateValue("number4", 0, 1, 3000); // Million এককের জন্য 1 পর্যন্ত এনিমেট করা হবে
    });
  </script> --}}


  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script>
    $(document).ready(function() {
        $('.counter').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');

            $this.waypoint(function() {
                $({ countNum: $this.text() }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            }, { offset: '100%' });
        });
    });
</script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>


    <script>
        $(document).ready(function() {

            $('#featureOwlSlider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })

            // Servie Slider
            $('#servicesslider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
            // Testmonial Slider





        })
    </script>
@endpush
