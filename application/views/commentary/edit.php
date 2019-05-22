<?php if (null !== $this->session->userdata('user') && ($user = $this->session->userdata('user'))['admin'] == 1) : ?>

<?php echo form_open('commentary/edit/'.$commentary['id'],array("class"=>"form-horizontal")); ?>


	<div class="form-group">
		<label for="value" class="col-md-4 control-label"><span class="text-danger">*</span>Value</label>
		<div class="col-md-8">
			<textarea name="value" class="form-control" id="value"><?php echo ($this->input->post('value') ? $this->input->post('value') : $commentary['value']); ?></textarea>
			<span class="text-danger"><?php echo form_error('value');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>

<?php else : ?>
<center><h2>Вы не можете просматривать эту страницу.</h2></center>
<?php endif; ?>   
