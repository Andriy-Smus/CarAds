<?php

function getTelegramToken() {
  $path = __DIR__ . '/.env'; 
  if (!file_exists($path)) {
      $path = __DIR__ . '/../.env';
  }

  if (file_exists($path)) {
      $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      foreach ($lines as $line) {
          if (strpos(trim($line), '#') === 0) continue;
          list($name, $value) = explode('=', $line, 2);
          if (trim($name) === 'TELEGRAM_TOKEN') {
              return trim($value);
          }
      }
  }
  return null;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("HTTP/1.1 403 Forbidden");
  exit("Доступ заборонено");
}

$token = getTelegramToken();
$chat_id = "415079280";

// Отримуємо дані з POST-запиту
$name = $_POST['name'] ?? 'Не вказано';
$phone = $_POST['phone'] ?? 'Не вказано';
$message = $_POST['message'] ?? 'Порожньо';

// Формуємо текст повідомлення
$arr = array(
  'Нова заявка з сайту CarAds!' => '',
  'Ім’я: ' => $name,
  'Телефон: ' => $phone,
  'Повідомлення: ' => $message
);

$txt = "";
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

// Відправляємо через Telegram API
$url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}";
$sendToTelegram = @fopen($url, "r");

if ($sendToTelegram) {
  echo "success";
} else {
  echo "error";
}
?>