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
						<th>Ip adresse</th>
						<th>date</th>
						<th>Platform</th>
                    </tr>
                    <tr>
						<td><?php echo $user['id_user']; ?></td>
						<td><?php echo $user['ip_adress']; ?></td>
						<td><?php echo $user['date']; ?></td>
						<td><?php echo $user['platform']; ?></td>
                    </tr>
                </table>
                                
            </div>
        </div>
    </div>
</div>
