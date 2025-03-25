<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezpieczeństwo w sieci!</title>
    <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #f0f4f8, #dfeaf2);
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #333;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      text-shadow: 1px 1px 2px #ccc;
    }

    p {
      font-size: 1rem;
      text-shadow: 1px 1px 2px #ccc;
    }

    a {
      text-decoration: none;
      padding: 12px 24px;
      background-color: #0077cc;
      color: #fff;
      border-radius: 10px;
      transition: background-color 0.3s ease, transform 0.2s ease;
      font-size: 1.2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    a:hover {
      background-color: #005fa3;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
    <h1>Łeb w web</h1>
    <a href="https://linktr.ee/lebwweb" target="_blank">Link do strony</a>
</body>
</html>

<?php
$ip = $_SERVER['REMOTE_ADDR'];
$log = "Szczegóły połączenia: " . date("Y-m-d H:i:s") . " - IP: " . $ip . "\n";
echo "<p>{$log}</p>";
?>