


 <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <form class="" action="index.php" method="post">
    <label for="image">Input your image here</label>
  <input type="file" id='image' name="image" value="">
<button type="submit" name="fix_submit">Submit here</button>
  </form>
<?php

$handle = fopen($_FILES["image"]["tmp_name"], 'r');
echo "File path is $handle"?>






</body>

</html>
