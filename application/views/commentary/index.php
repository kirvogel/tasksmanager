<div class="pull-right">
	<a href="<?php echo site_url('commentary/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Issue Id</th>
		<th>Author Id</th>
		<th>Value</th>
		<th>Actions</th>
    </tr>
	<?php foreach($commentaries as $c){ ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['issue_id']; ?></td>
		<td><?php echo $c['author_id']; ?></td>
		<td><?php echo $c['value']; ?></td>
		<td>
            <a href="<?php echo site_url('commentary/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('commentary/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
