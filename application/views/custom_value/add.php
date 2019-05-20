<?php echo form_open('custom_value/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="issue_id" class="col-md-4 control-label">Issue</label>
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
		</div>
	</div>
	<div class="form-group">
		<label for="tracker_id" class="col-md-4 control-label">Tracker Id</label>
		<div class="col-md-8">
			<input type="text" name="tracker_id" value="<?php echo $this->input->post('tracker_id'); ?>" class="form-control" id="tracker_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="custom_field_id" class="col-md-4 control-label">Custom Field Id</label>
		<div class="col-md-8">
			<input type="text" name="custom_field_id" value="<?php echo $this->input->post('custom_field_id'); ?>" class="form-control" id="custom_field_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="lock_version" class="col-md-4 control-label">Lock Version</label>
		<div class="col-md-8">
			<input type="text" name="lock_version" value="<?php echo $this->input->post('lock_version'); ?>" class="form-control" id="lock_version" />
		</div>
	</div>
	<div class="form-group">
		<label for="value" class="col-md-4 control-label">Value</label>
		<div class="col-md-8">
			<textarea name="value" class="form-control" id="value"><?php echo $this->input->post('value'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>