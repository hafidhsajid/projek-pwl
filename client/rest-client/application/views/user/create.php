<?php echo form_open_multipart('mahasiswa/create'); ?>
<table>
    <tr>
        <td>NAMA</td>
        <td><?php echo form_input('nrp'); ?></td>
    </tr>
    <tr>
        <td>Level</td>
        <td><?php echo form_input('nama'); ?></td>
    </tr>
    
    <tr>
        <td colspan="2">
            <?php echo form_submit('submit', 'Simpan'); ?>
            <?php echo anchor('user', 'Kembali'); ?>
        </td>
    </tr>
</table>
<?php
echo form_close();
?>