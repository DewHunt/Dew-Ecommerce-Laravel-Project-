@extends('admin/layouts/master')

@section('content')
	<div class="main-panel">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-header">
							Add Products to Database
						</div>
						<div class="card-body">
							<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group row">
									<label for="inputProductTitle" class="col-sm-2 col-form-label">Product Title</label>
									<div class="col-sm-10">
										<input type="text" name="inputProductTitle" class="form-control" id="inputProductTitle" placeholder="Product Title">
									</div>
								</div>

								<div class="form-group row">
									<label for="inputProductDescription" class="col-sm-2 col-form-label">Description</label>
									<div class="col-sm-10">
										<textarea name="inputProductDescription" rows="8" cols="80" class="form-control"></textarea>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputProductPrice" class="col-sm-2 col-form-label">Price</label>
									<div class="col-sm-10">
										<input type="number" name="inputProductPrice" class="form-control" id="inputProductPrice" placeholder="Price">
									</div>
								</div>

								<div class="form-group row">
									<label for="inputProductQuantity" class="col-sm-2 col-form-label">Quantity</label>
									<div class="col-sm-10">
										<input type="number" name="inputProductQuantity" class="form-control" id="inputProductQuantity" placeholder="Quantity">
									</div>
								</div>

								<div class="form-group row">
									<label for="inputProductImage" class="col-sm-2 col-form-label">Product Image</label>

									<div class="row">
										<div class="col-sm-3">
											<input type="file" name="inputProductImage[]" class="form-control" id="inputProductImage">
										</div>
										<div class="col-sm-3">
											<input type="file" name="inputProductImage[]" class="form-control" id="inputProductImage">
										</div>
										<div class="col-sm-3">
											<input type="file" name="inputProductImage[]" class="form-control" id="inputProductImage">
										</div>
										<div class="col-sm-3">
											<input type="file" name="inputProductImage[]" class="form-control" id="inputProductImage">
										</div>
										<div class="col-sm-3">
											<input type="file" name="inputProductImage[]" class="form-control" id="inputProductImage">
										</div>
									</div>
								</div>
						</div>
						<div class="card-footer text-muted">
								<div class="form-group row">
									<div class="col-sm-10">
										<button type="submit" class="btn btn-outline-primary">Add Product</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->

		<!-- partial:partials/_footer.html -->
		<footer class="footer">
			<div class="container-fluid clearfix">
				<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
					Copyright © 2018
					<a href="{{ route('index') }}" target="_blank">Dew Ecommerce</a>. All rights reserved.
				</span>
				<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
					Powered by Dew Software House (DSH)
					<i class="mdi mdi-heart text-danger"></i>
				</span>
			</div>
		</footer>
		<!-- partial -->
	</div>
@endsection