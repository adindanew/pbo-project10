<?php

namespace App\Models;

use App\Core\Model;

class Penduduk extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_penduduk";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
           /* $email = $_POST['email'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];*/

            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $nomor_hp = $_POST['nomor_hp'];
            $alamat_penduduk = $_POST['alamat_penduduk'];

            $sql = "INSERT INTO tb_penduduk
            SET nik=:nik, nama=:nama, jenis_kelamin=:jenis_kelamin, nomor_hp=:nomor_hp, alamat_penduduk=:alamat_penduduk";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nik", $nik);
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
            $stmt->bindParam(":nomor_hp", $nomor_hp);
            $stmt->bindParam(":alamat_penduduk", $alamat_penduduk);

            $stmt->execute();
      }  

      public function edit($id)
      {
            $query = "SELECT * FROM tb_penduduk WHERE penduduk_id=:penduduk_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":penduduk_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            /*$email = $_POST['email'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];
            $id = $_POST['id'];*/

            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $nomor_hp = $_POST['nomor_hp'];
            $alamat_penduduk = $_POST['alamat_penduduk'];
            $penduduk_id = $_POST['penduduk_id'];

            /*if (!empty($password)) {*/
                  $sql = "UPDATE tb_users
                  SET nik=:nik, nama=:nama, jenis_kelamin=:jenis_kelamin, nomor_hp=:nomor_hp, alamat_penduduk=:alamat_penduduk
                  WHERE penduduk_id=:penduduk_id";
            /*} else {
                  $sql = "UPDATE tb_penduduk
                  SET user_email=:user_email, user_full_name=:user_full_name
                  WHERE user_id=:user_id";
            }*/

            $stmt = $this->db->prepare($sql);

            /*$stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_password", $password);
            $stmt->bindParam(":user_full_name", $full_name);
            $stmt->bindParam(":user_id", $id);*/

            $stmt->bindParam(":nik", $nik);
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
            $stmt->bindParam(":nomor_hp", $nomor_hp);
            $stmt->bindParam(":alamat_penduduk", $alamat_penduduk);
            $stmt->bindParam(":penduduk_id", $penduduk_id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_penduduk WHERE penduduk_id=:penduduk_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":penduduk_id", $id);
            $stmt->execute();
      }
}
