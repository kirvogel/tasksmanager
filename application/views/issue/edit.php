<?php echo form_open('issue/edit/'.$issue['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="author" class="col-md-4 control-label">User</label>
		<div class="col-md-8">
			<select name="author" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_users as $user)
				{
					$selected = ($user['id'] == $issue['author']) ? ' selected="selected"' : "";

					echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['firstname'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
			<select name="status" class="form-control">
				<option value="">select status</option>
				<?php 
				foreach($all_statuses as $status)
				{
					$selected = ($status['id'] == $issue['status']) ? ' selected="selected"' : "";

					echo '<option value="'.$status['id'].'" '.$selected.'>'.$status['name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="assigned_to_id" class="col-md-4 control-label">User</label>
		<div class="col-md-8">
			<select name="assigned_to_id" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_users as $user)
				{
					$selected = ($user['id'] == $issue['assigned_to_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['firstname'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="tracker_id" class="col-md-4 control-label">Tracker</label>
		<div class="col-md-8">
			<select name="tracker_id" class="form-control">
				<option value="">select tracker</option>
				<?php 
				foreach($all_trackers as $tracker)
				{
					$selected = ($tracker['tracker_id'] == $issue['tracker_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$tracker['tracker_id'].'" '.$selected.'>'.$tracker['name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="last_changer" class="col-md-4 control-label">User</label>
		<div class="col-md-8">
			<select name="last_changer" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_users as $user)
				{
					$selected = ($user['id'] == $issue['last_changer']) ? ' selected="selected"' : "";

					echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['firstname'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-4 control-label">Title</label>
		<div class="col-md-8">
			<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $issue['title']); ?>" class="form-control" id="title" />
		</div>
	</div>
	<div class="form-group">
		<label for="due_date" class="col-md-4 control-label">Due Date</label>
		<div class="col-md-8">
			<input type="text" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}" name="due_date" value="<?php echo ($this->input->post('due_date') ? $this->input->post('due_date') : $issue['due_date']); ?>" class="form-control" id="due_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="end_date" class="col-md-4 control-label">End Date</label>
		<div class="col-md-8">
			<input type="text" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}" name="end_date" value="<?php echo ($this->input->post('end_date') ? $this->input->post('end_date') : $issue['end_date']); ?>" class="form-control" id="end_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $issue['description']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
