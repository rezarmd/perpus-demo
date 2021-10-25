<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Buku Add</h3>
            </div>
            <?php echo form_open('buku/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_kategori" class="control-label">Id Kategori</label>
						<div class="form-group">
							<input type="text" name="id_kategori" value="<?php echo $this->input->post('id_kategori'); ?>" class="form-control" id="id_kategori" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="judul" class="control-label">Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo $this->input->post('judul'); ?>" class="form-control" id="judul" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="harga" class="control-label">Harga</label>
						<div class="form-group">
							<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control" id="harga" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="stok" class="control-label">Stok</label>
						<div class="form-group">
							<input type="text" name="stok" value="<?php echo $this->input->post('stok'); ?>" class="form-control" id="stok" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="penerbit" class="control-label">Penerbit</label>
						<div class="form-group">
							<input type="text" name="penerbit" value="<?php echo $this->input->post('penerbit'); ?>" class="form-control" id="penerbit" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deskripsi" class="control-label">Deskripsi</label>
						<div class="form-group">
							<textarea name="deskripsi" class="form-control" id="deskripsi"><?php echo $this->input->post('deskripsi'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>