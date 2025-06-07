<?php
require 'Pasien_model.php';

$model = new Pasien_model();
$id = $_GET['id'] ?? null;
$status = $_GET['status'] ?? null;

if ($id && in_array($status, ['diterima', 'ditolak'])) {
    $model->update_status($id, $status);
}

header('Location: dashboard.php');
exit;
