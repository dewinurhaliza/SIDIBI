<?php 
include 'koneksi.php'; 

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM data_pegawai WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()){
        echo "Data berhasil dihapus.";
    } else{
        echo "Error: ".$stmt->error;
    }
    $stmt->close();
}
header("Location: pegawai.php");
exit;
?>
