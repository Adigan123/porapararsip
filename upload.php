<?php
include 'db.php';

// Cek apakah file di-upload
if (isset($_FILES['file']) && isset($_POST['name'])) {
    $name = $_POST['name'];
    $file = $_FILES['file'];
    
    // Tentukan folder penyimpanan file
    $target_dir = "uploads/";
    $file_name = time() . "_" . basename($file['name']);
    $target_file = $target_dir . $file_name;

    // Cek apakah file valid
    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        // Simpan data arsip ke database
        $sql = "INSERT INTO arsip (name, file_path) VALUES ('$name', '$file_name')";
        
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["status" => "success", "message" => "File berhasil di-upload!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Gagal menyimpan data ke database."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal meng-upload file."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Nama arsip atau file tidak ditemukan."]);
}
?>
