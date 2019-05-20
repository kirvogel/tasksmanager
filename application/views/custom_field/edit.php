<?php echo form_open('custom_field/edit/'.$custom_field['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="is_required" class="col-md-4 control-label">Is Required</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_required" value="1" <?php echo ($custom_field['is_required']==1 ? 'checked="checked"' : ''); ?> id='is_required' />
		</div>
	</div>
	<div class="form-group">
		<label for="is_filter" class="col-md-4 control-label">Is Filter</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_filter" value="1" <?php echo ($custom_field['is_filter']==1 ? 'checked="checked"' : ''); ?> id='is_filter' />
		</div>
	</div>
	<div class="form-group">
		<label for="is_searcheable" class="col-md-4 control-label">Is Searcheable</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_searcheable" value="1" <?php echo ($custom_field['is_searcheable']==1 ? 'checked="checked"' : ''); ?> id='is_searcheable' />
		</div>
	</div>
	<div class="form-group">
		<label for="is_multiple" class="col-md-4 control-label">Is Multiple</label>
		<div class="col-md-8">
			<input type="checkbox" name="is_multiple" value="1" <?php echo ($custom_field['is_multiple']==1 ? 'checked="checked"' : ''); ?> id='is_multiple' />
		</div>
	</div>
	<div class="form-group">
		<label for="type" class="col-md-4 control-label">Type</label>
		<div class="col-md-8">
			<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $custom_field['type']); ?>" class="form-control" id="type" />
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $custom_field['name']); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="default_value" class="col-md-4 control-label">Default Value</label>
		<div class="col-md-8">
			<input type="text" name="default_value" value="<?php echo ($this->input->post('default_value') ? $this->input->post('default_value') : $custom_field['default_value']); ?>" class="form-control" id="default_value" />
		</div>
	</div>
	<div class="form-group">
		<label for="possible_values" class="col-md-4 control-label">Possible Values</label>
		<div class="col-md-8">
			<textarea name="possible_values" class="form-control" id="possible_values"><?php echo ($this->input->post('possible_values') ? $this->input->post('possible_values') : $custom_field['possible_values']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>