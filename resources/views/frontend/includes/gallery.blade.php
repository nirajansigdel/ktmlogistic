<section class="gallery_section">
    <div class="container">
        <h2 class="text-center section_title">Gallery</h2>


        <div class="row">

            @foreach ($images as $image)
                <div class="col-md-4" style="margin-left:0; margin-right:0">
                    <a style="color: var(--first)" href="{{ route('singleImage', ['slug' => $image->slug]) }}">
                        <div class="accordion">
                            {{-- <h4 class="text-center">{{ $image->title }}</h4> --}}
                            <ul>

                                @foreach ($image->img as $imgUrl)
                                    <li tabindex="{{ $loop->iteration }}"
                                        style=" background-image: url('{{ asset($imgUrl) }}');">

                                    </li>
                                @endforeach

                            </ul>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>



    </div>
</section>