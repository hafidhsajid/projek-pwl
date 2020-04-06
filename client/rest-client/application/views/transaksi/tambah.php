<div class="container">
    <div class="row mt-3">
        <div class="col-nd-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data  
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="id_customer">Customer</label>
                            <select name="id_customer" id="id_customer" class="form-control">
                                <option value="" selected>-----select----
                                <?php 
                                foreach($datauser as $row)
                                { 
                                    echo '<option value="'.$row->id.'">'.$row->nama.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_menu">Menu</label>
                            <select class="form-control", id="id_menu", name="id_menu">
                            <option value="" selected>-----select----

                                <?php 
                                foreach($datamenu as $row)
                                { 
                                    echo '<option value="'.$row->id.'">'.$row->nama.'</option>';
                                }
                                ?>
                                </select>
                            </option>
                            
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name='tanggal'>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                        <div style="float: right">
                                <?php echo anchor('transaksi', 'Kembali', "class='btn btn-danger'"); ?>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>