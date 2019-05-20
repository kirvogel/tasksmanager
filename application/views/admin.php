<?php if (null !== $this->session->userdata('user') && ($user = $this->session->userdata('user'))['admin'] == 1) : ?>
			<div class="pull-none"> <center>
				ADMIN CONSOLE </br></br>
			<a href="<?php echo site_url('user/'); ?>" class="btn btn-info btn-xs">All users</a> <br/>
            <a href="<?php echo site_url('custom_field/'); ?>" class="btn btn-info btn-xs">Custom fields</a> </br>
            <a href="<?php echo site_url('status/'); ?>" class="btn btn-info btn-xs">Statuses</a> <br/>
            <a href="<?php echo site_url('tracker/'); ?>" class="btn btn-info btn-xs">Trackers</a> <br/>
            </center>
            </div>

<?php else : ?>
<div class="text-center">
	<h2>You can't veiw this page.</h2>
</div>
<?php endif; ?>
