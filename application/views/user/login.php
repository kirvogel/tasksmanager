<?php echo form_open('user/login',array("class"=>"form-horizontal")); ?>

	
	<div class="form-group">
		<label for="login" class="col-md-4 control-label">Login</label>
		<div class="col-md-8">
			<input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" class="form-control" id="login" />
		</div>
	</div>
	<div class="form-group">
		<label for="hash" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="hash" value="<?php echo $this->input->post('hash'); ?>" class="form-control" id="hash" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Enter site</button>
        </div>
	</div>

<?php echo form_close(); ?>
