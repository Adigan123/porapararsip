<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data arsip dari database
    $sql = "DELETE FROM arsip WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Arsip berhasil dihapus."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal menghapus arsip."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "ID arsip tidak ditemukan."]);
}
?>
