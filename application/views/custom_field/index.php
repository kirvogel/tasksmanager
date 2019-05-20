<div class="pull-right">
	<a href="<?php echo site_url('custom_field/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Is Required</th>
		<th>Is Filter</th>
		<th>Is Searcheable</th>
		<th>Is Multiple</th>
		<th>Type</th>
		<th>Name</th>
		<th>Default Value</th>
		<th>Possible Values</th>
		<th>Actions</th>
    </tr>
	<?php foreach($custom_fields as $c){ ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['is_required']; ?></td>
		<td><?php echo $c['is_filter']; ?></td>
		<td><?php echo $c['is_searcheable']; ?></td>
		<td><?php echo $c['is_multiple']; ?></td>
		<td><?php echo $c['type']; ?></td>
		<td><?php echo $c['name']; ?></td>
		<td><?php echo $c['default_value']; ?></td>
		<td><?php echo $c['possible_values']; ?></td>
		<td>
            <a href="<?php echo site_url('custom_field/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('custom_field/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
