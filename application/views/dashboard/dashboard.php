
<?php  $data=$company_details; ?>
        <div class="col-lg-9"><!--start col-lg-4-->

			<?php if(isset($_SESSION['message'])){ $message=$_SESSION['message']; ?>
				<?php $word="successfully"; if(strpos($message,$word)){ $status="success"; }else{ $status="danger" ;} ?>
					<div class="alert alert-<?php echo $status ?> alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Feedback!</strong> <?php echo $message ?>
					</div>
				<?php $_SESSION['message']=null; } ?>

			 <div class="w3-card-16">
					<header class="w3-container w3-blue">
							<h5>Company Details</h5>
							 <button class="btn btn-success" data-toggle="modal" data-target="#edit_password" data-whatever="@mdo"><i class="fa fa-plus"></i> Password</button>
						</header>
						<br>
					<div id="container" class="row" style="width: 100%;">
                           <br>
							<div class="gallery w3-container" style="width: 50%;">
							  <a target="_blank" href="<?php echo base_url(); ?>images\<?php echo $data->logo; ?>">
							    <img src="<?php echo base_url(); ?>images\<?php echo $data->logo; ?>" alt="" style="object-fit: cover; height: 300px;" >
							  </a>
							  <div class="desc"><?php echo $data->name;  ?></div>
							  <div class="container">
							  	 <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_company" onclick="add_summary_note()" data-whatever="@mdo" onclick="edit_company('<?php echo $data->shortname; ?>')"><i class="fa fa-edit"></i> Edit</button>
							  	
							  	<br>
							  </div>
							 </div>
						<br>
					</div>
					<br>
			</div>		
		</div><!--end col-lg-4-->


	   </div> 
        </div>
	</div>
	</div>



<div class="modal fade" id="edit_company" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 60%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		  <?php echo form_open_multipart('update_company');?>
        <div class="row">
        	 <div class="col-lg-6">
		          <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Company Short Name:</label>
		            <input type="text" class="form-control" value="<?php echo $data->shortname ?>" name="shortname" required="" placeholder="Company Short Name">
		          </div>
				  
		          <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Company Name:</label>
		            <input type="text" class="form-control" value="<?php echo $data->name ?>" name="name" required="" placeholder="Company Full Name">
		          </div>
				 <div class="form-group">
					 <label for="message-text" class="col-form-label">Company Email</label>
					 <input type="email" class="form-control" value="<?php echo $data->email ?>" name="email" placeholder="Company Email" required="">
				 </div>

				 <div class="form-group">
					 <label for="message-text" class="col-form-label">Company Phone</label>
					 <input type="tel" class="form-control" value="<?php echo $data->phone ?>" name="phone" placeholder="Ground Phone Number" required="">
				 </div>


				 <div class="form-group">
					 <label for="message-text" class="col-form-label">Facebook</label>
					 <input type="text" class="form-control" value="<?php echo $data->facebook_link ?>" name="facebook_link" placeholder="Example: https://www.facebook.com/" required="">
				 </div>
				 <div class="form-group">
					 <label for="message-text" class="col-form-label">Twitter</label>
					 <input type="text" class="form-control" value="<?php echo $data->twitter_link ?>" name="twitter_link" placeholder="example: https://www.twitter.com/hei" required="">
				 </div>

				 <div class="form-group">
					 <label for="message-text" class="col-form-label">Our Vision:</label>
					 <textarea class="form-control summernote"  name="vision" required="" style="white-space: pre-wrap;" rows="7"><?php echo $data->vision ?></textarea>
				 </div>

				 <div class="form-group">
					 <label for="message-text" class="col-form-label">Company Motto</label>
					 <input type="tel" class="form-control" value="<?php echo $data->motto ?>" name="motto" placeholder="Company Motto" required="">
				 </div>
			 </div>
        	 <div class="col-lg-6">
				 <div class="form-group">
					 <label for="message-text" class="col-form-label">Company Mission:</label>
					 <textarea class="form-control summernote" name="mission" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->mission ?></textarea>
				 </div>
				  <div class="form-group">
		            <label for="message-text" class="col-form-label">Company Address:</label>
		            <textarea class="form-control summernote"  name="physical_location" required="" style="white-space: pre-wrap;" rows="7"><?php echo $data->physical_location ?></textarea>
		          </div>

				 <div class="form-group">
					 <label for="message-text" class="col-form-label">Company Logo:</label>
					 <input type="file" class="form-control" id="logo" name="logo" accept=".jpg, .png, .jpeg, .gif" onchange="readURL(this,'company_logo')">
					 <input type="hidden" value="<?php echo $data->logo ?>" name="current_logo">
					 <br>
					 <div>
						 <img src="<?php echo base_url() ?>images/<?php echo $data->logo ?>" alt="" style="object-fit: cover; height: 200px; width: 100%;" id="company_logo">
					 </div>
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

<div class="modal fade" id="edit_company_policy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Company Environment Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="reflesh_home('dashboard')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="<?php echo base_url(); ?>index.php/update_company_env_policy" enctype="multipart/form-data">
        <div class="row">
        	<input type="hidden" class="form-control" name="company_id" id="company_identify" required="">
		          <input type="hidden" class="form-control" id="url" value="<?php echo base_url(); ?>">
        	 <div class="col-lg-12">
		           <div class="form-group">
		            <label for="message-text" class="col-form-label">Company Environment Policy:</label>
		            <textarea class="form-control summernote" id="company_environmental_policy" rows="15" name="company_environmental_policy" required="" style="white-space: pre-wrap;"></textarea>
		          </div>
        	 </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reflesh_home('dashboard')">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
       </form>
    </div>
  </div>
</div>


<div class="modal fade" id="edit_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="<?php echo base_url(); ?>index.php/edit_password" enctype="multipart/form-data">
        <div class="row">
        	 <div class="col-lg-12">
		          <div class="form-group">
		            <input type="password" name="new_password" class="form-control" placeholder="New Password">
		            <br>
		            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
		          </div>
        	 </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
       </form>
    </div>
  </div>
</div>




