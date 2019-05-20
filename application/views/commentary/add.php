<?php echo form_open('commentary/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="issue_id" class="col-md-4 control-label"><span class="text-danger">*</span>Issue</label>
		<div class="col-md-8">
			<select name="issue_id" class="form-control">
				<option value="">select issue</option>
				<?php 
				foreach($all_issues as $issue)
				{
					$selected = ($issue['id'] == $this->input->post('issue_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$issue['id'].'" '.$selected.'>'.$issue['id'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('issue_id');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="author_id" class="col-md-4 control-label"><span class="text-danger">*</span>User</label>
		<div class="col-md-8">
			<select name="author_id" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_users as $user)
				{
					$selected = ($user['id'] == $this->input->post('author_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['firstname'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('author_id');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="value" class="col-md-4 control-label"><span class="text-danger">*</span>Value</label>
		<div class="col-md-8">
			<textarea name="value" class="form-control" id="value"><?php echo $this->input->post('value'); ?></textarea>
			<span class="text-danger"><?php echo form_error('value');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>