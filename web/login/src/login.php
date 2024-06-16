<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$username = $data['username'];
$password = $data['password'];

if ($username == 'admin' && $password == 'admin@123') {
    echo json_encode(['success' => true, 'message' => '恭喜TZCTF{test_flag}！']);
} else {
    echo json_encode(['success' => false]);
}
?>
