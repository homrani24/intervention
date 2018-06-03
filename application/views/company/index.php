<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Liste des sociète  </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('company/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nom</th>
						<th>Tel</th>
						<th>Fax</th>
						<th>Ville</th>
						<th>Email</th>
						<th>Adresse</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($company as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['name']; ?></td>
						<td><?php echo $c['tel']; ?></td>
						<td><?php echo $c['fax']; ?></td>
						<td><?php echo $c['ville']; ?></td>
						<td><?php echo $c['email']; ?></td>
						<td><?php echo $c['adresse']; ?></td>
						<td>
                            <a href="<?php echo site_url('company/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('company/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
