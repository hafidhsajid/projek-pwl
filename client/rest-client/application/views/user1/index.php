<font color="orange">
    <?php echo $this->session->flashdata('hasil'); ?>
</font>

<table border="1">
    <thead>
        <tr>
            <th scope="col">NRP</th>
            <th scope="col">NAMA</th>
            <th scope="col">EMAIL</th>
            <th scope="col">JURUSAN</th>
            <th scope="col">PROSES</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($datamahasiswa as $mhs) {
            echo "<tr>
                <td> $mhs->nrp</td>
                <td> $mhs->nama</td>
                <td> $mhs->email</td>
                <td> $mhs->jurusan</td>
                <td>" . anchor('mahasiswa/edit/' . $mhs->id, 'Edit') . "
                    " . anchor('mahasiswa/delete/' . $mhs->id, 'Delete') . "</td>
            </tr>";
        }
        ?>

    </tbody>
</table>
<a href="http://localhost/pwl/rest-client/mahasiswa/create">+ Tambah data <a>