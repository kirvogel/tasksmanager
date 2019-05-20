<?php echo form_open('tracker/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="is_custom" class="col-md-4 control-label">Is Custom</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_custom" value="1" id="is_custom" />
		</div>
	</div>
	<div class="form-group">
		<label for="is_useable" class="col-md-4 control-label">Is Useable</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_useable" value="1" id="is_useable" />
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>