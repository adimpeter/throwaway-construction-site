@extends('tmp-layouts.app')

@section('content')


<!-- bradcam_area  -->
  <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Project Gallery</h3>
                        <p><a href="{{ route('homepage') }}">Home</a> / Gallery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

<div class="container">
    
    <div class="section-top-border">
    <h3>Image Gallery</h3>
    <div class="row gallery-item">

        @forelse($gallery_images as $image)
            <div class="col-md-4">
                <a href="{{ asset($image->file_path) }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{ asset($image->file_path) }});"></div>
                </a>
            </div>

        @empty

        @endforelse

    </div>
</div>

</div>


@endsection