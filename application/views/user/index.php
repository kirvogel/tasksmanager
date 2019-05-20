<?php if (null !== $this->session->userdata('user') && ($user = $this->session->userdata('user'))['admin'] == 1) : ?>

<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Admin</th>
		<th>Login</th>
		<th>Firstname</th>
		<th>Surname</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users as $u){ ?>
    <tr>
		<td><?php echo $u['id']; ?></td>
		<td><?php echo $u['admin']; ?></td>
		<td><?php echo $u['login']; ?></td>
		<td><?php echo $u['firstname']; ?></td>
		<td><?php echo $u['surname']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<?php else : ?>
<div class="text-center">
	<h2>You don't have admin rights to view this page.</h2>
</div>
<?php endif; ?>

