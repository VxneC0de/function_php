<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/styles_1.css">
  <title>Sweets Survey</title>
</head>
<body>

  <form name="vote" action="results.php" method="post">

    <div>

      <label for="favorite">What is your favorite candy?</label><br>

      <input type="radio" name="vote" id="chocolate" value="op1" required> Option 1: Chocolate<br>

      <input type="radio" name="vote" id="candies" value="op2" required> Option 2: Candies<br>

      <input type="radio" name="vote" id="cookies" value="op3" required> Option 3: Cookies<br>

      <input type="radio" name="vote" id="others" value="op4" required> Option 4: Others<br>

    </div>

    <input type="submit" name="submit_2" value="vote">

  </form>

</body>
</html>