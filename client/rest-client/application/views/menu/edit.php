<?php echo form_open_multipart('menu/edit'); ?>
<?php echo form_hidden('id', $datamenu[0]->id); ?>


<div class="container">
    <div class="rom mt-3">
        <div class="col nd-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data
                </div>
                <div class="card-body">
                    <?php $rupiahh = $datamenu[0]->price; ?>
                    <table>
                        <tr class="form-group">
                            <td>Nama</td>
                            <td><input type="text" name="nama" id="nama" value="<?= $datamenu[0]->nama ?>" class="form-control"></td>
                        </tr>
                        <tr class="form-group">
                            <td>Price</td>
                            <td>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp. </span>
                                    <input type="text" name="price" id="price" value="<?= number_format($rupiahh, 0, ',' , '.') ?>" class="form-control">
                            </td>
                </div>
                </tr>
                <td colspan="2">
                    <div style="float: right">
                        <?php echo anchor('menu', 'Kembali', "class='btn btn-danger'"); ?>
                        <?php echo form_submit('submit', 'Simpan', "class='btn btn-primary'"); ?>
                    </div>
                </td>
                </tr>
                </table>
            </div>
            <?php
            echo form_close();
            ?>
            <script type="text/javascript">
                var rupiah = document.getElementById("price1");
                rupiah.addEventListener("keyup", function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    rupiah.value = formatRupiah(this.value);
                });

                /* Fungsi formatRupiah */
                function formatRupiah(angka, prefix) {
                    var number_string = angka.replace(/[^,\d]/g, "").toString(),
                        split = number_string.split(","),
                        sisa = split[0].length % 3,
                        rupiah = split[0].substr(0, sisa),
                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
                    if (ribuan) {
                        separator = sisa ? "." : "";
                        rupiah += separator + ribuan.join(".");
                    }

                    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
                    return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
                }
            </script>

        </div>
    </div>
</div>
</div>