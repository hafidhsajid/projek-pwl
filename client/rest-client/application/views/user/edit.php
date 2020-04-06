<?php echo form_open('user/edit'); ?>
<?php echo form_hidden('id', $datauser[0]->id); ?>

<div class="container">
<div class="rom mt-3">
<div class="col nd-6">


<table>
    <tr>
        <td>NAMA</td>
        <td><?php echo form_input('nama', $datauser[0]->nama, "class='form-control'"); ?></td>
    </tr>
    <tr>
        <td>PASSWORD</td>
        <?php $password = $datauser[0]->password; ?>
        <td><input type="password" name="password" id="password" , class="form-control" value=<?= $password; ?> ></input></td>
    </tr> 
    
    <tr>
        <td><label for="level">Level</label></td>
    <td>
        <?php 
        $tmplevel;
        ?>
       <select class="form-control", id="level", name="level">
           <option value="">-----select----</option>
                <?php
                foreach ($datauser as $j) {
                    foreach ($level_list as $k){
                    echo "<option value='$k'";
                    echo $k == $j->level ? 'selected' : '';
                    echo ">$k</option>";
                    }
                }
                ?>
            </select>
    </td>
    <tr>
        <td colspan="2">
            <div style="float: right">
                <?php echo anchor('user', 'Kembali', "class='btn btn-danger'"); ?>
                <?php echo form_submit('submit', 'Simpan', "class='btn btn-primary'"); ?>
            </div>
        </td>
    </tr>
</table>
<?php
echo form_close();
?>

</div>
</div>
</div>