@extends('layouts.admin')

@section('content')

@include('snipps.pass-or-fail')

<section>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="heading">Company Details</h2>
				@if(isset($company->name))
				<form method="post" action="" enctype="multipart/form-data">
					@csrf()
					<div class="form-group">
						<input type="text" name="company_name" class="form-control" required="required" placeholder="company name" value="{{ $company->name }}">
					</div>
					<div class="form-group">
						<input type="email" name="company_email" class="form-control" placeholder="company email" value="{{ $company->email }}">
					</div>
					<div class="form-group">
						<input type="text" name="company_phone" class="form-control" placeholder="company phone number" value="{{ $company->phone }}">
					</div>
					<div class="form-group">
						<label>Company Adddress</label>
						<textarea rows="5" name="company_address" class="form-control" value="{{ $company->address }}"></textarea>
					</div>
					<div class="form-group">
						<div class="custom-file">
						    <input type="file" class="custom-file-input" id="inputGroupFile04" name="company_logo" aria-describedby="inputGroupFileAddon04" accept=".jpeg,.png">
						    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
						  </div>
					</div>

					<div>
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</form>
				@else

				<form method="post" action="{{ route('admin.store.company') }}" enctype="multipart/form-data">
					@csrf()
					<div class="form-group">
						<input type="text" name="company_name" class="form-control" required="required" placeholder="company name">
					</div>
					<div class="form-group">
						<input type="email" name="company_email" class="form-control" placeholder="company email">
					</div>
					<div class="form-group">
						<input type="text" name="company_phone" class="form-control" placeholder="company phone number">
					</div>
					<div class="form-group">
						<label>Company Adddress</label>
						<textarea rows="5" name="company_address" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<div class="custom-file">
						    <input type="file" class="custom-file-input" id="inputGroupFile04" name="company_logo" aria-describedby="inputGroupFileAddon04" accept=".jpeg,.png">
						    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
						  </div>
					</div>

					<div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>

				@endif
			</div>
		</div>
	</div>

</section>

@endsection

