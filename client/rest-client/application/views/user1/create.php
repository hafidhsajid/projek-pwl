<?php echo form_open_multipart('mahasiswa/create'); ?>
<table>
    <tr>
        <td>NRP</td>
        <td><?php echo form_input('nrp'); ?></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td><?php echo form_input('nama'); ?></td>
    </tr>
    <tr>
        <td>EMAIL</td>
        <td><?php echo form_input('email'); ?></td>
    </tr>
    <tr>
        <td>JURUSAN</td>
        <td><?php echo form_input('jurusan'); ?></td>
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