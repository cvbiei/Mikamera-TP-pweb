<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $nama = $_POST['nama'];
    $kamera = $_POST['kamera'];
    $lama = $_POST['lama'];

    //Data akan di simpan ke variabel $data dengan format yang sesuai
    $data = "Nama Penyewa : $nama \nKamera : $kamera \nLama Sewa : $lama\n\n";

    //Menentukan path file atau nama file yang mau di simpan
    $file_path = "data_orderan.txt";

    //Menyimpan data ke file txt
    if (file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo "Data berhasil di simpan.";
    }else{
        echo "Gagal menyimpan data";
    }
}
?>