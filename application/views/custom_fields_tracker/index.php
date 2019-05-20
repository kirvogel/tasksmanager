<div class="pull-right">
	<a href="<?php echo site_url('custom_fields_tracker/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Custom Field Id</th>
		<th>Tracker Id</th>
		<th>Actions</th>
    </tr>
	<?php foreach($custom_fields_trackers as $c){ ?>
    <tr>
		<td><?php echo $c['custom_field_id']; ?></td>
		<td><?php echo $c['tracker_id']; ?></td>
		<td>
            <a href="<?php echo site_url('custom_fields_tracker/edit/'.$c['custom_field_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('custom_fields_tracker/remove/'.$c['custom_field_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
