<div class="col-lg-9"><!--start col-lg-4-->
	<div class="w3-card-16">

		<?php if(isset($_SESSION['message'])){ $message=$_SESSION['message']; ?>
			<?php $word="successfully"; if(strpos($message,$word)){ $status="success"; }else{ $status="danger" ;} ?>
			<div class="alert alert-<?php echo $status ?> alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Feedback!</strong> <?php echo $message ?>
			</div>
			<?php $_SESSION['message']=null; } ?>
		<header class="w3-container w3-blue">
			<h5>Events</h5>
			<button class="btn btn-success" data-toggle="modal" data-target="#add" onclick="add_summary_note()" data-whatever="@mdo"><i class="fa fa-plus"></i> Add</button>
		</header>


		<div class="row">
			<div class="col-sm-12 text-center">
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<?php foreach($pagenation as $page_number): ?>
							<li class="page-item <?php if($page==$page_number){ echo "active";} ?>"><a class="page-link active" href="<?php echo base_url() ?>events_admin/<?php echo $page_number ?>"><?php echo $page_number ?></a></li>

						<?php endforeach; ?>
					</ul>
				</nav>
			</div>
		</div>

		<div class="col-sm-4 w3-right" style="display: none">
			<br>
			<form method="POST" action="<?php echo base_url() ?>home/search">
				<input type="hidden" name="endpoint" value="users">
				<input type="hidden" name="field" value="username">
				<input type="hidden" name="page" value="dashboard_users">
				<input type="text" class="form-control" placeholder="Search" name="search_text">
			</form>
			<br>
		</div>
	</div>
	<div id="container" style="width: 100%;" class="jumbotron">

		<table class="w3-table w3-table-stripped table-bordered">
			<thead>
			<th>Name</th>
			<th>Place</th>
			<th>Date</th>
			<th>Time</th>
			<th>Content</th>
			<th>Action</th>
			</thead>
			<tbody>
			<?php foreach($data as $item): ?>
				<td><?php echo $item->name;  ?></td>
				<td><?php echo $item->place;  ?></td>
				<td><?php echo date_format(date_create($item->date),"d M Y")  ?></td>
				<td><?php echo $item->time;  ?></td>
				<td><?php echo $item->content;  ?></td>
				<td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit" data-whatever="@mdo" onclick="edit_event('<?php echo $item->slug; ?>')"><i class="fa fa-edit"></i></button>
					<button class="btn btn-warning btn-sm" onclick="delete_event('<?php echo $item->slug; ?>','<?php echo $item->name; ?>')"><i class="fa fa-trash"></i></button></td>
				</tr>
			<?php endforeach; ?>
			</tr>
			</tbody>
		</table>
	</div>
</div>
</div><!--end col-lg-4-->


</div>
</div>
</div>
</div>


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="width: 40%">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('add_event');?>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Name:</label>
							<input type="text" class="form-control" name="name"  required="">
						</div>

						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Place:</label>
							<input type="text" class="form-control" name="place"  required="">
						</div>

						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Time:</label>
							<input type="time" class="form-control" name="time"  required="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Date:</label>
							<input type="date"  value="<?php echo date("Y-m-d");?>" class="form-control" name="occation_date"  required="">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Content:</label>
							<textarea class="form-control summernote"  rows="15" name="content" style="white-space: pre-wrap;"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>


<?php $uri = $_SERVER['REQUEST_URI']; ?>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="width: 30%;">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<?php echo form_open_multipart('update_event');?>
					<div class="row">
						<div class="col-lg-6">
							<input type="hidden" class="form-control" name="slug" id="slug" required="">
							<input type="hidden" class="form-control" id="url"  value="<?php echo base_url(); ?>">

							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Name:</label>
								<input type="text" class="form-control" id="name" name="name"  required="">
							</div>

							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Place:</label>
								<input type="text" class="form-control" id="place" name="place"  required="">
							</div>

							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Time:</label>
								<input type="time" class="form-control" id="time" name="time"  required="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Date:</label>
								<input type="date" id="occation_date"  value="<?php echo date("Y-m-d");?>" class="form-control" name="occation_date"  required="">
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Content:</label>
								<textarea class="form-control summernote"  id="content" rows="15" name="content" style="white-space: pre-wrap;"></textarea>
							</div>
						</div>
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Edit</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>






