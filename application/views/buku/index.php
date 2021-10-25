<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Buku Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('buku/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Buku</th>
						<th>Id Kategori</th>
						<th>Judul</th>
						<th>Harga</th>
						<th>Stok</th>
						<th>Penerbit</th>
						<th>Deskripsi</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($buku as $b){ ?>
                    <tr>
						<td><?php echo $b['id_buku']; ?></td>
						<td><?php echo $b['id_kategori']; ?></td>
						<td><?php echo $b['judul']; ?></td>
						<td><?php echo $b['harga']; ?></td>
						<td><?php echo $b['stok']; ?></td>
						<td><?php echo $b['penerbit']; ?></td>
						<td><?php echo $b['deskripsi']; ?></td>
						<td>
                            <a href="<?php echo site_url('buku/edit/'.$b['id_buku']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('buku/remove/'.$b['id_buku']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
