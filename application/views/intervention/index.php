<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Liste des Interventions </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('intervention/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Id société</th>
						<th>Date Heure</th>
						<th>Description</th>
						<th>Etat</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($intervention as $i){ ?>
                    <tr>
						<td><?php echo $i['id']; ?></td>
						<td><?php echo $i['id_company']; ?></td>
						<td><?php echo $i['date_heure']; ?></td>
                        <td><?php  if($i['active'] == 1){ ?>       
                        <a href="<?php echo site_url('intervention/etat/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Active</a>       
                         <?php } else { ?>
                        <a href="<?php echo site_url('intervention/etat/'.$i['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-pencil"></span> Desactive</a>       
                         <?php } ?></td>
                        
						<td><?php echo $i['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('intervention/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('intervention/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
