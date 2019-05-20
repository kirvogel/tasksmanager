<?php echo form_open('custom_field/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="is_required" class="col-md-4 control-label">Is Required</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_required" value="1" id="is_required" />
		</div>
	</div>
	<div class="form-group">
		<label for="is_filter" class="col-md-4 control-label">Is Filter</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_filter" value="1" id="is_filter" />
		</div>
	</div>
	<div class="form-group">
		<label for="is_searcheable" class="col-md-4 control-label">Is Searcheable</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_searcheable" value="1" id="is_searcheable" />
		</div>
	</div>
	<div class="form-group">
		<label for="is_multiple" class="col-md-4 control-label">Is Multiple</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_multiple" value="1" id="is_multiple" />
		</div>
	</div>
	<div class="form-group">
		<label for="type" class="col-md-4 control-label">Type</label>
		<div class="col-md-8">
			<input type="text" name="type" value="<?php echo $this->input->post('type'); ?>" class="form-control" id="type" />
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="default_value" class="col-md-4 control-label">Default Value</label>
		<div class="col-md-8">
			<input type="text" name="default_value" value="<?php echo $this->input->post('default_value'); ?>" class="form-control" id="default_value" />
		</div>
	</div>
	<div class="form-group">
		<label for="possible_values" class="col-md-4 control-label">Possible Values</label>
		<div class="col-md-8">
			<textarea name="possible_values" class="form-control" id="possible_values"><?php echo $this->input->post('possible_values'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>