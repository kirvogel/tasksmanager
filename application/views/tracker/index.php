<div class="pull-right">
	<a href="<?php echo site_url('tracker/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Tracker Id</th>
		<th>Is Custom</th>
		<th>Is Useable</th>
		<th>Name</th>
		<th>Actions</th>
    </tr>
	<?php foreach($trackers as $t){ ?>
    <tr>
		<td><?php echo $t['tracker_id']; ?></td>
		<td><?php echo $t['is_custom']; ?></td>
		<td><?php echo $t['is_useable']; ?></td>
		<td><?php echo $t['name']; ?></td>
		<td>
            <a href="<?php echo site_url('tracker/edit/'.$t['tracker_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tracker/remove/'.$t['tracker_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
