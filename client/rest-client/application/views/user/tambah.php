<?php echo form_open('user/tambah'); ?>

<div class="container">
    <div class="rom mt-3">
        <div class="col nd-6">


            <table>
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" name="nama" id="nama" class="form-control"></input></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type="password" name="password" id="password" class="form-control"></input></td>
                    <input type="hidden" name="level" id="level" value="user">
                </tr>


                    <td colspan="2">
                        <?php echo anchor('user', 'Kembali', "class='btn btn-danger'"); ?>
                        <?php echo form_submit('submit', 'Simpan', "class='btn btn-primary'"); ?>
                    </td>
                </tr>
            </table>
            <?php
            echo form_close();
            ?>

        </div>
    </div>
</div>