<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Liste des utilisateur</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Role</th>
						<th>Email</th>
						<th>Nom</th>
						<th>Téléphone</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user as $u){ ?>
                    <tr>
						<td><?php echo $u['id']; ?></td>
						<td><?php echo $u['role']; ?></td>
						<td><?php echo $u['email']; ?></td>
						<td><?php echo $u['name']; ?></td>
						<td><?php echo $u['mobile']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/last_login/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Dernière connexion</a> 
                            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
