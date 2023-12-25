<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
</head>
<body>

    <style>
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }

      header {
          background-color: #f8f9fa;
          padding: 20px;
          text-align: center;
      }

      main {
          padding: 20px;
          text-align: center;
      }

      footer {
          background-color: #f8f9fa;
          text-align: center;
          padding: 10px;
      }

      @media (max-width: 600px) {
          body {
              font-size: 18px;
          }

          header, main, footer {
              padding: 10px;
          }
      }
    </style>

    <main>
      <?php echo $content ?>
    </main>

    <footer>
      <ul>
        <li><a href="<?php echo BASE_URL ?>">Home</a></li>
        <li><a href="<?php echo BASE_URL ?>/article/1">Article 1</a></li>
        <li><a href="<?php echo BASE_URL ?>/article/2">Article 2</a></li>
      </ul>
    </footer>

</body>
</html>
