<?php echo form_open('issue/view/'.$issue['id'],array("class"=>"form-horizontal")); ?>
<div class="pull-right">
<a href="<?php echo site_url('issue/edit/'.$issue['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('issue/remove/'.$issue['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
</div>
</br>

	<div class="form-group">
		<label for="author" class="col-md-4 control-label">Author</label>
		<div class="col-md-8">
				<?php 
				foreach($all_users as $user)
				{
					if ($user['id'] == $issue['author']) echo $user['login'];
				} 
				?>
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
			<?php 
				foreach($all_statuses as $status)
				{
					if ($status['id'] == $issue['status']) echo $status['name'];
				} 
				?>
		</div>
	</div>
	<div class="form-group">
		<label for="assigned_to_id" class="col-md-4 control-label">Assigned to</label>
		<div class="col-md-8">
							<?php 
				foreach($all_users as $user)
				{
					if ($user['id'] == $issue['assigned_to_id']) echo $user['login'];
				} 
				?>
		</div>
	</div>
	<div class="form-group">
		<label for="tracker_id" class="col-md-4 control-label">Tracker</label>
		<div class="col-md-8">
			<?php 
				foreach($all_trackers as $tracker)
				{
					if ($tracker['tracker_id'] == $issue['tracker_id']) echo $tracker['name'];
				} 
				?>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-4 control-label">Title</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('title') ? $this->input->post('title') : $issue['title']); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="created_on" class="col-md-4 control-label">Created On</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('created_on') ? $this->input->post('created_on') : $issue['created_on']); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="updated_on" class="col-md-4 control-label">Updated On</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('updated_on') ? $this->input->post('updated_on') : $issue['updated_on']); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="start_date" class="col-md-4 control-label">Start Date</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('start_date') ? $this->input->post('start_date') : $issue['start_date']); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="due_date" class="col-md-4 control-label">Due Date</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('due_date') ? $this->input->post('due_date') : $issue['due_date']); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="end_date" class="col-md-4 control-label">End Date</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('end_date') ? $this->input->post('end_date') : $issue['end_date']); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('description') ? $this->input->post('description') : $issue['description']); ?>
		</div>
	</div>
	
	
<hr>


	
<?php echo form_close(); ?>

