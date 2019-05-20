<div class="pull-right">
	<a href="<?php echo site_url('version/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Issue Id</th>
		<th>Version Id</th>
		<th>Status</th>
		<th>Title</th>
		<th>Description</th>
		<th>Assigned To Id</th>
		<th>Duedate</th>
		<th>Updated On</th>
		<th>Changer Id</th>
		<th>Tracker Id</th>
		<th>Actions</th>
    </tr>
	<?php foreach($versions as $v){ ?>
    <tr>
		<td><?php echo $v['id']; ?></td>
		<td><?php echo $v['issue_id']; ?></td>
		<td><?php echo $v['version_id']; ?></td>
		<td><?php echo $v['status']; ?></td>
		<td><?php echo $v['title']; ?></td>
		<td><?php echo $v['description']; ?></td>
		<td><?php echo $v['assigned_to_id']; ?></td>
		<td><?php echo $v['duedate']; ?></td>
		<td><?php echo $v['updated_on']; ?></td>
		<td><?php echo $v['changer_id']; ?></td>
		<td><?php echo $v['tracker_id']; ?></td>
		<td>
            <a href="<?php echo site_url('version/edit/'.$v['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('version/remove/'.$v['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
