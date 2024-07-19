<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/styles_1.css">
  <title>Result</title>
</head>
<body bgcolor="<?php echo @$_COOKIE['color']; ?>">

  <form action="createCookie.php" method="post">

    <label for="color">Color:</label>
    <input type="color" name="color">

    <button type="submit">Color background preference</button>

  </form>

</body>
</html>