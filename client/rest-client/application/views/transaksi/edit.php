<?php echo form_open('transaksi/edit'); ?>
<?php echo form_hidden('id', $datatransaksi[0]->id); ?>

<div class="container">
    <div class="rom mt-3">
        <div class="col nd-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>
                <div class="card-body">
                    <table>
                        <tr class="form-group" >
                            <td><label for="customer">Customer </label></td>
                            <td>
                                <?php
                                $selectedCustomer
                                ?>

                                <select class="form-control" id="id_customer" name="id_customer">
                                    <?php
                                    foreach ($datauser as $j) {
                                        echo "<option value='.$j->id.'";
                                        echo $datatransaksi[0]->id_customer == $j->id ? 'selected' : '';
                                        echo ">$j->nama</option>";
                                    }
                                    ?>
                                </select>
                                <?php
                                echo $selectedCustomer = null;
                                ?>

                            </td>
                        <tr class="form-group" >
                            <td>Menu</td>
                            <td>
                                <select class="form-control" id="id_menu" name="id_menu">
                                    <?php
                                    foreach ($datamenu as $j) {

                                        echo "<option value='.$j->id.'";
                                        echo $datatransaksi[0]->id_menu == $j->id ? 'selected' : '';
                                        echo ">$j->nama</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr class="form-group" >
                            <td>Tanggal</td>
                            <td><input type="date" name="tanggal" id="tanggal" value="<?= $datatransaksi[0]->tanggal ?>" class="form-control"></td>
                        </tr>
                        <td colspan="2">
                            <div style="float: right">
                                <?php echo anchor('transaksi', 'Kembali', "class='btn btn-danger'"); ?>
                                <?php echo form_submit('submit', 'Simpan', "class='btn btn-primary'"); ?>
                            </div>
                        </td>
                        </tr>
                    </table>
                </div>
                <?php
                echo form_close();
                ?>

            </div>
        </div>
    </div>
</div>