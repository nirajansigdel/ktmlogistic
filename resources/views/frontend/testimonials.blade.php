@extends('frontend.layouts.master')

@section('content')
    <div class="background">
        <h1 class="page_title">{{ __('Testimonials') }}</h1>
    </div>


    <section class="testimonial_page">
        <div class="container">

            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-6 row test_row">

                        <div class="col-lg-4">
                            @if ($testimonial->image)
                                <img src="{{ asset('uploads/testimonial/' . $testimonial->image) }}" class="test_image" alt="">
                            @else
                                <img src="{{ asset('image/girl.jpg') }}" class="test_image" alt="">
                            @endif

                        </div>
                        <div class="col-lg-8">
                            <p>"{{ $testimonial->description }}"</p>
                            <h3>{{ $testimonial->name }}</h3>
                          

                        </div>

                    </div>
                @endforeach
            </div>

            {{-- <div class="row">
                <div class="mt-2">
                    <iframe
                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3Dpfbid0S9w4MzH6kPHLGzM1NzTvosGCh2L3kT8ZMxkZS7MXAnmh8geTwWGpARHFXQHntfmul%26id%3D100082259823827&show_text=true&width=500"
                        width="100%" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                </div>
                <div class="mt-2">
                    <iframe
                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpratima.basnet4%2Fposts%2Fpfbid02Tvb8jGq5yzejxBs4mVy8sRDRwojWMmL7QbGP7t1PoQSUafz5Y4pVfNW6fUZgCZPLl&show_text=true&width=500"
                        width="100%" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>

                <div class="mt-2">
                    <iframe
                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpramila.sedai%2Fposts%2Fpfbid02tuv7vsvANvrWYKnMbTJPyQdRqZ4kehTFZjSWodVoy2PV6skNUanG7BqXSFnkeDuFl&show_text=true&width=500"
                        width="100%" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div> --}}
        </div>


    </section>
@endsection
