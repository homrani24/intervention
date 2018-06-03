<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Liste des Contrats</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('contrat/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Date Début</th>
						<th>Date Fin</th>
						<th>Type</th>
						<th>Télécharger</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($contrat as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['date_deb']; ?></td>
						<td><?php echo $c['date_fin']; ?></td>
						<td><?php echo $c['type']; ?></td>
						<td>
                        <a href="<?php echo site_url('Dashboard/generate_pdf/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Télécharger</a>       

                        </td>
						<td>
                            <a href="<?php echo site_url('contrat/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('contrat/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
