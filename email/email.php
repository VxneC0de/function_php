<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email</title>
</head>
<body>
  
  <form method="post" action="email2.php">
    
    <div>

      <label for="name">Name</label>
      <input type="text" name="name" placeholder="Enter your name" required/>

    </div>
    
    <div>

      <label for="email">Email</label>
      <input type="email" name="email" placeholder="Enter your Email" required/>

    </div>

    <div>

      <label for="comment">Any comments or suggestions?</label>
      <br>
      <textarea name="comment" placeholder="Enter your comment here..."></textarea>

    </div>

    <button type="submit">Send</button>
  
  </form>

</body>
</html>