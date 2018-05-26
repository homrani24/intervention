<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Reclamation Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('reclamation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Date Heure</th>
						<th>Panne</th>
						<th>Sujet</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($reclamation as $r){ ?>
                    <tr>
						<td><?php echo $r['id']; ?></td>
						<td><?php echo $r['date_heure']; ?></td>
						<td><?php echo $r['panne']; ?></td>
						<td><?php echo $r['sujet']; ?></td>
						<td>
                            <a href="<?php echo site_url('reclamation/edit/'.$r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('reclamation/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
