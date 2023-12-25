<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $article['title'] ?></title>
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

    <header>
        <h1>My Blog</h1>
    </header>
    <main>
        <article>
            <h2><?php echo $article['title'] ?></h2>
            <p><?php echo $article['content'] ?></p>
        </article>
    </main>
    <footer>
      <p>Copyright &copy; <?php echo date('Y') ?> </p>
    </footer>
</body>
</html>
