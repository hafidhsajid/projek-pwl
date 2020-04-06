<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Menu <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>menu/tambah" class="btn btn-primary"> Tambah Data </a>
        </div>
    </div>

    <!-- mt-3 artinya margin top 3 -->
    <div class="row mt-3">
        
        <h2>Daftar Menu</h2>
    </div>
    <div class="col-md-10">
        <table class="table table-hover">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Price</th>
                <th scope="col">Opsi</th>
            </tr>
            <!-- alert -->
            <?php if (empty($datamenu)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Menu Tidak ditemukan!
                </div>
                <?php endif; ?>
                <?php foreach ($datamenu as $mnu){
                      $format =$english_format_number = number_format($mnu->price, 2, ',', ' ');
                    
                        echo "
                        <tr>
                        <td>$mnu->nama</td>
                        <td>Rp. $format</td>
                        <td>".anchor('menu/edit/'.$mnu->id, 'Edit', array('class' => 'badge badge-primary '))."
                        ".anchor('menu/hapus/'.$mnu->id, 'Hapus', array('class' => 'badge badge-danger '))."
                        </tr>";
                    }?>


            </ul>
        </table>
    </div>
</div>