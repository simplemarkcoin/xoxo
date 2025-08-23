<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 Error</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #000;
      font-family: Arial, Helvetica, sans-serif;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center; /* moves the text toward the center */
      align-items: flex-start;
      color: #fff;
    }
    .content {
      padding: 80px 40px; /* increased top padding to raise text higher */
    }
    h1 {
      font-size: 1.5rem;
      margin: 0 0 8px 0;
      font-weight: bold;
    }
    p {
      font-size: 0.9rem;
      margin: 0 0 16px 0;
      color: #bbb;
    }
    a.button {
      display: inline-block;
      padding: 8px 16px;
      font-size: 0.85rem;
      font-weight: bold;
      color: #000;
      background-color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background 0.3s ease;
    }
    a.button:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>
  <div class="content">
    <h1>Requested Page Unavailable</h1>
    <p>We’re sorry, but this page is currently not accessible</p>
    <a href="/" class="button">Return to safety</a>
  </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\app\resources\views/errors/404.blade.php ENDPATH**/ ?>