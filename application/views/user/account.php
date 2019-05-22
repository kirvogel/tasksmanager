
<div class="container">
    <h2>User Account</h2>
    <?php $user = $this->session->userdata('user');?>
    <!h3>Welcome <?php echo $user['firstname'] . ' ' . $user['surname']; ?>!</h3>
    <div class="account-info">
        <p><b>Name: </b><?php echo $user['firstname'] . ' ' . $user['surname']; ?></p>
        <p><b>Login: </b><?php echo $user['login']; ?></p>
    </div>
</div>
<b>Tasks: </b>
<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Title</th>
		<th>Created On</th>
		<th>Updated On</th>
		<th>Start Date</th>
		<th>Due Date</th>
		<th>End Date</th>
		<th>Description</th>
		<th>Actions</th>
    </tr>
	<?php foreach($issues as $i){ ?>
    <tr>
		<td><?php echo $i['id'];?></td>
		<td><?php echo $i['title']; ?></td>
		<td><?php echo $i['created_on']; ?></td>
		<td><?php echo $i['updated_on']; ?></td>
		<td><?php echo $i['start_date']; ?></td>
		<td><?php echo $i['due_date']; ?></td>
		<td><?php echo $i['end_date']; ?></td>
		<td><?php echo $i['description']; ?></td>
		<td>
			<a href="<?php echo site_url('issue/view/'.$i['id']); ?>" class="btn btn-info btn-xs">View</a> 
			<?php if (null !== $this->session->userdata('user') && (($user = $this->session->userdata('user'))['admin'] == 1 || ($user = $this->session->userdata('user'))['id'] == $issue['assigned_to_id'])) : ?>
            <a href="<?php echo site_url('issue/edit/'.$i['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <?php endif; ?>
            <?php if (null !== $this->session->userdata('user') && (($user = $this->session->userdata('user'))['admin'] == 1)) : ?>
            <a href="<?php echo site_url('issue/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
            <?php endif; ?>
        </td>
    </tr>
	<?php } ?>
</table>
