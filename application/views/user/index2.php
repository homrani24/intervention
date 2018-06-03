<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"> Liste des utilisateur</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Role</th>
						<th>Email</th>
						<th>Nom</th>
						<th>Mobile</th>
                    </tr>
                    <?php foreach($user as $u){ ?>
                    <tr>
						<td><?php echo $u['id']; ?></td>
						<td><?php echo $u['role']; ?></td>
						<td><?php echo $u['email']; ?></td>
						<td><?php echo $u['name']; ?></td>
						<td><?php echo $u['mobile']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
