<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 margin-top-10">
				@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif

				@if (session('error'))
					<div class="alert alert-danger">
						{{ session('error') }}
					</div>
				@endif
			</div>
		</div>
	</div>
</section>