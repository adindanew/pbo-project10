<h2>Edit Penduduk</h2>

<form action="<?php echo URL; ?>/penduduk/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['penduduk_id']; ?>">
    <table>
        <tr>
            <td>NIK</td>
            <td><input type="text" name="nik" value="<?php echo $data['row']['nik']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA LENGKAP</td>
            <td><input type="nama" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $data['row']['jenis_kelamin']; ?>" required></td>
        </tr>

        <tr>
            <td>No.Telp</td>
            <td><input type="text" name="nomor_hp" value="<?php echo $data['row']['nomor_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat_penduduk" value="<?php echo $data['row']['alamat_penduduk']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>