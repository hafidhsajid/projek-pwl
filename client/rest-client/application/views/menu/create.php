<?php echo form_open('menu/tambah'); ?>
<?php echo form_hidden('id', $datamenu[0]->id); ?>

<div class="container">
    <div class="rom mt-3">
        <div class="col nd-6">
<table>
    <tr>
        <td>NAMA</td>
        <td><?php echo form_input('nama'); ?></td>
    </tr>
    <tr>
        <td>password</td>
        <td></td>
        <td><?php echo form_input('nama'); ?></td>
    </tr>
    <tr>
        <td>Level</td>
        <td><?php echo form_input('nama'); ?></td>
    </tr>
    
    <tr>
        <td colspan="2">
            <?php echo form_submit('submit', 'Simpan'); ?>
            <?php echo anchor('menu', 'Kembali'); ?>
        </td>
        
    </tr>
</table>
<?php
echo form_close();
?>