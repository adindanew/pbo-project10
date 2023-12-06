<h2>Input Penduduk</h2>

<form action="<?php echo URL; ?>/penduduk/save" method="post">
    <table>


    <tr>
            <td>NIK</td>
            <td><input type="text" name="nik"  required></td>
        </tr>
        <tr>
            <td>NAMA LENGKAP</td>
            <td><input type="nama" name="nama"  required></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td><input type="text" name="jenis_kelamin"  required></td>
        </tr>

        <tr>
            <td>No.Telp</td>
            <td><input type="text" name="nomor_hp" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat_penduduk"  required></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>