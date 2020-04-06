<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data User <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>user/tambah" class="btn btn-primary"> Tambah Data </a>
        </div>
    </div>

    <!-- mt-3 artinya margin top 3 -->
    <div class="row mt-3">
        <div class="col-md-6">
            <form method="post">
                <div class="input-group mb-3">
                    
            </form>
        </div>
        <h2>Daftar User</h2>
    </div>
    <div class="col-md-8">
        <table class="table table-hover">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col" >Aksi</th>
            </tr>
            <!-- alert -->
            <?php if (empty($datauser)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data User Tidak ditemukan!
                </div>
                <?php endif; ?>
                <?php foreach ($datauser as $usr)
            echo "
            <tr>
            <td>$usr->nama</td>
            <td>".anchor('user/edit/'.$usr->id, 'Edit', array('class' => 'badge badge-primary '))."
            ".anchor('user/hapus/'.$usr->id, 'Hapus', array('class' => 'badge badge-danger '))."
            </tr>";?>

            </ul>
        </table>
    </div>
</div>
</div>
