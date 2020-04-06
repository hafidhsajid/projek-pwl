<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Transaksi <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>transaksi/tambah" class="btn btn-primary"> Tambah Data </a>
        </div>
    </div>

    <!-- mt-3 artinya margin top 3 -->
    <div class="row mt-3">
        
        <h2>Daftar Transaksi</h2>
    </div>
    <div class="col-md-10">
        <table class="table table-hover">
            <tr>
                <th scope="col">Customer</th>
                <th scope="col">Menu</th>
                <th scope="col" >Harga</th>
                <th scope="col" >Tanggal</th>
                <th scope="col" >Opsi</th>
            </tr>
            <!-- alert -->
            <?php if (empty($datatransaksi)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Transaksi Tidak ditemukan!
                </div>
                <?php endif; ?>
                <?php 
                setlocale(LC_MONETARY, 'id_ID');
                $harga = $datatransaksi[0]->id_menu;
                $customer = $datatransaksi[0]->id_customer;
                $menu = $datatransaksi[0]->id_menu;
                 ?>
                <?php foreach ($datatransaksi as $trns){
                    foreach ($datamenu as $key) {
                        $trns->id_menu == $key->id ? $menu = $key->nama : '';
                        $trns->id_menu == $key->id ? $harga = $key->price : '';
                        foreach($datauser as $usr){
                            $trns->id_customer == $usr->id ? $customer = $usr->nama : '';
                        }
                    }
                        echo "
                        <tr>
                        <td>$customer</td>
                        <td>$menu</td>
                        <td>$harga</td>
                        <td>$trns->tanggal</td>
                        <td>".anchor('transaksi/edit/'.$trns->id, 'Edit', array('class' => 'badge badge-primary '))."
                        ".anchor('transaksi/hapus/'.$trns->id, 'Hapus', array('class' => 'badge badge-danger '))."
                        </tr>";
                    }?>


            </ul>
        </table>
    </div>
</div>