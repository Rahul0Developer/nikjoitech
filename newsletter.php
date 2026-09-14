<?php
// newsletter.php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode(['success'=>false,'message'=>'Invalid request.']);
  exit;
}

$name  = htmlspecialchars(strip_tags(trim($_POST['name'] ?? '')));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);

if (!$email) {
  echo json_encode(['success'=>false,'message'=>'Please enter a valid email address.']);
  exit;
}
if (!$name) {
  echo json_encode(['success'=>false,'message'=>'Please enter your name.']);
  exit;
}

$file = __DIR__ . '/data/newsletter.json';
$dir  = dirname($file);
if (!is_dir($dir)) mkdir($dir, 0755, true);

$subscribers = [];
if (file_exists($file)) {
  $subscribers = json_decode(file_get_contents($file), true) ?: [];
}

// Duplicate check
foreach ($subscribers as $s) {
  if (strtolower($s['email']) === strtolower($email)) {
    echo json_encode(['success'=>false,'message'=>'You are already subscribed. Thank you!']);
    exit;
  }
}

$subscribers[] = [
  'id'    => uniqid(),
  'date'  => date('Y-m-d H:i:s'),
  'name'  => $name,
  'email' => $email,
  'ip'    => $_SERVER['REMOTE_ADDR'] ?? '',
];

file_put_contents($file, json_encode($subscribers, JSON_PRETTY_PRINT));

// Also CSV
$csvFile = __DIR__ . '/data/newsletter.csv';
$newFile = !file_exists($csvFile);
$fh      = fopen($csvFile, 'a');
if ($newFile) fputcsv($fh, ['ID','Date','Name','Email','IP']);
fputcsv($fh, [end($subscribers)['id'], end($subscribers)['date'], $name, $email, $_SERVER['REMOTE_ADDR'] ?? '']);
fclose($fh);

echo json_encode(['success'=>true,'message'=>'Subscribed successfully! Welcome aboard.']);
