<div class="pull-right">
	<a href="<?php echo site_url('versions_custom/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Version Id</th>
		<th>Custom Values Id</th>
		<th>Value</th>
		<th>Actions</th>
    </tr>
	<?php foreach($versions_custom as $v){ ?>
    <tr>
		<td><?php echo $v['id']; ?></td>
		<td><?php echo $v['version_id']; ?></td>
		<td><?php echo $v['custom_values_id']; ?></td>
		<td><?php echo $v['value']; ?></td>
		<td>
            <a href="<?php echo site_url('versions_custom/edit/'.$v['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('versions_custom/remove/'.$v['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
