<?php echo form_open('mahasiswa/edit'); ?>
<?php echo form_hidden('id', $datamahasiswa[0]->id); ?>

<table>
    <tr>
        <td>ID</td>
        <td><?php echo form_input('', $datamahasiswa[0]->id, "disabled"); ?></td>
    </tr>
    <tr>
        <td>NRP</td>
        <td><?php echo form_input('nrp', $datamahasiswa[0]->nrp); ?></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td><?php echo form_input('nama', $datamahasiswa[0]->nama); ?></td>
    </tr>
    <tr>
        <td>EMAIL</td>
        <td><?php echo form_input('email', $datamahasiswa[0]->email); ?></td>
    </tr>
    <tr>
        <td>JURUSAN</td>
        <td><?php echo form_input('jurusan', $datamahasiswa[0]->jurusan); ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <?php echo form_submit('submit', 'Simpan'); ?>
            <?php echo anchor('mahasiswa', 'Kembali'); ?>
        </td>
    </tr>
</table>
<?php
echo form_close();
?>