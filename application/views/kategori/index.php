<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Kategori Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('kategori/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Kategori</th>
						<th>Nama Kategori</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($kategori as $k){ ?>
                    <tr>
						<td><?php echo $k['id_kategori']; ?></td>
						<td><?php echo $k['nama_kategori']; ?></td>
						<td>
                            <a href="<?php echo site_url('kategori/edit/'.$k['id_kategori']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('kategori/remove/'.$k['id_kategori']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
