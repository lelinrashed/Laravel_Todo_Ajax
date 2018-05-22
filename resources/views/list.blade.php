<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Todo with Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<style rel="stylesheet">
		a {
			outline: 0;
		}
		a:hover {
			text-decoration: none;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<br>
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="card">
					<div class="card-header">Ajax Todo List <a data-toggle="modal" data-target="#exampleModal" href="" class="i fa fa-plus float-right"></a></div>
					<div class="card-body">
						<ul class="list-group">
							<li class="list-group-item">Rashed</li>
							<li class="list-group-item">Rana</li>
							<li class="list-group-item">Rahim</li>
							<li class="list-group-item">Rakib</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							...
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>



	
	{{-- Javascript file --}}
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>