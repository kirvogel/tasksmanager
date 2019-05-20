<div class="pull-right">
	<a href="<?php echo site_url('status/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Actions</th>
    </tr>
	<?php foreach($statuses as $s){ ?>
    <tr>
		<td><?php echo $s['id']; ?></td>
		<td><?php echo $s['name']; ?></td>
		<td>
            <a href="<?php echo site_url('status/edit/'.$s['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('status/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
