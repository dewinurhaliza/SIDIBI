<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $deskripsi_barang = $_POST['deskripsi_barang'];
    $lokasi = $_POST['lokasi'];
    $waktu = $_POST['waktu'];
    $tindakan = $_POST['tindakan'];

    // Simpan data ke database atau lakukan tindakan lainnya sesuai kebutuhan
    // Contoh: Simpan ke file teks
    $file = fopen("pengaduan.txt", "a");
    fwrite($file, "Nama: " . $nama . "\n");
    fwrite($file, "Alamat: " . $alamat . "\n");
    fwrite($file, "Nomor Kontak: " . $kontak . "\n");
    fwrite($file, "Deskripsi Barang: " . $deskripsi_barang . "\n");
    fwrite($file, "Lokasi: " . $lokasi . "\n");
    fwrite($file, "Waktu Kejadian: " . $waktu . "\n");
    fwrite($file, "Tindakan yang Diinginkan: " . $tindakan . "\n\n");
    fclose($file);

    echo "Pengaduan Anda telah berhasil dikirim.";
}
?>
