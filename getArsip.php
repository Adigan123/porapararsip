<?php
include 'db.php';

$sql = "SELECT * FROM arsip";
$result = $conn->query($sql);

$arsipData = [];
while ($row = $result->fetch_assoc()) {
    $arsipData[] = $row;
}

echo json_encode($arsipData);
?>
