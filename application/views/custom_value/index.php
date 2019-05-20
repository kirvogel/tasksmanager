<div class="pull-right">
	<a href="<?php echo site_url('custom_value/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Issue Id</th>
		<th>Tracker Id</th>
		<th>Custom Field Id</th>
		<th>Lock Version</th>
		<th>Value</th>
		<th>Actions</th>
    </tr>
	<?php foreach($custom_values as $c){ ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['issue_id']; ?></td>
		<td><?php echo $c['tracker_id']; ?></td>
		<td><?php echo $c['custom_field_id']; ?></td>
		<td><?php echo $c['lock_version']; ?></td>
		<td><?php echo $c['value']; ?></td>
		<td>
            <a href="<?php echo site_url('custom_value/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('custom_value/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
