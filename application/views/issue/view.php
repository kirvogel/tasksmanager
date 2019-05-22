
<div class="pull-right">
	<?php if (null !== $this->session->userdata('user') && (($user = $this->session->userdata('user'))['admin'] == 1 || ($user = $this->session->userdata('user'))['id'] == $issue['assigned_to_id'])) : ?>
<a href="<?php echo site_url('issue/edit/'.$issue['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
<?php endif; ?>
<?php if (null !== $this->session->userdata('user') && ($user = $this->session->userdata('user'))['admin'] == 1) : ?>
            <a href="<?php echo site_url('issue/remove/'.$issue['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
            
<?php endif; ?>
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
	<br/>
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
	<br/>
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
	<br/>
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
	<br/>
	<div class="form-group">
		<label for="title" class="col-md-4 control-label">Title</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('title') ? $this->input->post('title') : $issue['title']); ?>
		</div>
	</div>
	<br/>
	<div class="form-group">
		<label for="created_on" class="col-md-4 control-label">Created On</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('created_on') ? $this->input->post('created_on') : $issue['created_on']); ?>
		</div>
	</div>
	<br/>
	<div class="form-group">
		<label for="updated_on" class="col-md-4 control-label">Updated On</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('updated_on') ? $this->input->post('updated_on') : $issue['updated_on']); ?>
		</div>
	</div>
	<br/>
	<div class="form-group">
		<label for="start_date" class="col-md-4 control-label">Start Date</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('start_date') ? $this->input->post('start_date') : $issue['start_date']); ?>
		</div>
	</div>
	<br/>
	<div class="form-group">
		<label for="due_date" class="col-md-4 control-label">Due Date</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('due_date') ? $this->input->post('due_date') : $issue['due_date']); ?>
		</div>
	</div>
	<br/>
	<div class="form-group">
		<label for="end_date" class="col-md-4 control-label">End Date</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('end_date') ? $this->input->post('end_date') : $issue['end_date']); ?>
		</div>
	</div>
	<br/>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<?php echo ($this->input->post('description') ? $this->input->post('description') : $issue['description']); ?>
		</div>
	</div>
	<br/>
<hr>
<h2>History</h2>
<table class="table table-striped table-bordered">
    <tr>
		<th>Version Id</th>
		<th>Changer Id</th>
		<th>Status</th>
		<th>Title</th>
		<th>Description</th>
		<th>Assigned To Id</th>
		<th>Duedate</th>
		<th>Updated On</th>
		<th>Tracker Id</th>
    </tr>
	<?php foreach($versions as $v){ ?>
    <tr>
		<td><?php echo $v['version_id']; ?></td>
		<td><?php echo $v['changer_login']; ?></td>
		<td><?php echo $v['status']; ?></td>
		<td><?php echo $v['title']; ?></td>
		<td><?php echo $v['description']; ?></td>
		<td><?php echo $v['assigned_login']; ?></td>
		<td><?php echo $v['duedate']; ?></td>
		<td><?php echo $v['updated_on']; ?></td>
		<td><?php echo $v['tracker_name']; ?></td>
    </tr>
	<?php } ?>
</table>
<hr>
<?php if (null !== $this->session->userdata('user')) : ?>
<h2>Add comment</h2></br>
	<form id="comment_form" action="<?= base_url() ?>issue/add_comment/<?= $issue['id'] ?>" method='post'>
                    <div class="form-group">
                        <label for="comment">Comment :</label>
                        <textarea class="form-control" name="comment_body" value="<?= set_value("comment_body") ?>" id='comment'></textarea>
                    </div>

                    <div id='submit_button'>
                        <input class="btn btn-success" type="submit" name="submit" value="add comment"/>
                    </div>
</form>
<?php endif; ?>
	
	
<hr>
<table class="table table-striped table-bordered">
	<tr>
		<th>Author</th>
		<th>Comment</th>
		<?php if (null !== $this->session->userdata('user') && ($user = $this->session->userdata('user'))['admin'] == 1) : ?>
		<th>Actions</th>
		<?php endif; ?>
    </tr>
<?php 

        /*var_dump($commentaries);*/
foreach($commentaries as $c){ ?>
    <tr>
		<td><?php echo $c['author']; ?></td>
		<td><?php echo $c['value']; ?></td>
		<?php if (null !== $this->session->userdata('user') && ($user = $this->session->userdata('user'))['admin'] == 1) : ?>
		<td>
            <a href="<?php echo site_url('commentary/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('commentary/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
		<?php endif; ?>
    </tr>
	<?php } ?>
	
</table>




