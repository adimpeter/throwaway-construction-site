@extends('layouts.admin')

@section('content')

@include('snipps.pass-or-fail')

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ap-card">
					<h2 class="heading">Add Image</h2>
					<form method="post" action="{{ route('admin.add.gallery') }}" enctype="multipart/form-data">
						@csrf()
						<label for="imageCategory">Category</label>
						<div class="form-group" id="imageCategory">
							<select name="gallery_category" class="custom-select form-controls form-dropdown">
								@forelse($gallery_categories as $category)
									<option value="{{ $category->id }}">{{ $category->category }}</option>
								@empty

								@endforelse
							</select>
						</div>

						<div class="form-group">
							<div class="custom-file">
							    <input type="file" class="custom-file-input" id="inputGroupFile04" name="gallery_img" aria-describedby="inputGroupFileAddon04" accept=".jpeg,.png">
							    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
							  </div>
						</div>

						<button type="submit" class="btn btn-primary">Add Image</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section>

	<div class="container">
		<div class="row">
			@forelse($gallery_images as $image)

			<div class="col-md-4 gallery-img">
				<div class="label">{{ ucwords(strtolower($image->galleryCategory->category)) }}</div>
				<div class="options">
					<form method="post" class="image-action-form" action="{{ route('admin.delete.gallery', ['gallery' => $image]) }}">
						@csrf()
						@method('DELETE')
						<input type="hidden" name="gallery_id" value="{{ $image->id }}">
						<input type="hidden" name="action_id" class="action-id">
					</form>
					<button class="btn btn-default edit-gallery">Edit</button>
					<button class="btn btn-danger delete-gallery">Delete</button>
				</div>
				<img src="{{ asset($image->file_path) }}">
			</div>

			@empty

			@endforelse
		</div>
	</div>

</section>


<script type="text/javascript">
	$('.delete-gallery').on('click', function(){
		$(this).siblings('form').children('.action-id').val(0);
		$(this).siblings('.image-action-form').submit();
	});

	
</script>

@endsection

