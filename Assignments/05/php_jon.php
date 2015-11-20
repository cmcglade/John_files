<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="php file" content="this is a file for assignment 5">
  <title></title>
</head>

<body>

  <h2>A paragraph with PHP</h2>

  <!--  the form  -->
  <h3>Input what you want to see in paragraph</h3>
  <form method="POST">
    <label>First Name</label><br>
    <input type="text" name="first_name"><br>
    <label>Last Name</label><br>
    <input type="text" name="last_name"><br>
    <label>Your Mother's Maiden Name</label><br>
    <input type="text" name="mother_maiden_name"><br>
    <label>Your Favourite Color</label><br>
    <input type="text" name="favourite_color"><br>
    <label>Postal Code</label><br>
    <input type="text" name="postal_code"><br><br>
    <input type="submit" value="Show Below">
  </form>

  <!-- the paragraph output -->
  <h3>The paragraph will look like this:</h3>
  <?php
    $first_name = ucwords($_POST["first_name"]);
    $last_name = ucwords($_POST["last_name"]);
    $maiden_name = ucwords($_POST["mother_maiden_name"]);
    $fav_color = $_POST["favourite_color"];
    $postal_code = strtoupper($_POST["postal_code"]);
    echo "Hi $first_name!, I find it interesting to think about how our identity might  change if we had our mother's name. If your name wasn't $first_name $last_name, but instead it was $first_name $maiden_name, would your favourite colour still be $fav_color? Would you still live in $postal_code? ";
   ?>

   <!-- try to show the input with a different color -->
   <p>
      Hi <span style="color:red"><?php echo $first_name; ?></span>!, I find it interesting to think about how our identity might  change if we had our mother's name. If your name wasn't <span style="color:red"><?php echo $first_name; ?></span> <span style="color:red"><?php echo $last_name ?></span> , but instead it was <span style="color:red"><?php echo $first_name; ?></span> <span style="color:red"><?php echo $maiden_name ?></span>, would your favourite colour still be <span  style="color:red"><?php echo $fav_color; ?>? </span> Would you still live in <span style="color:red"><?php echo $postal_code; ?></span>?
   </p>

</body>

</html>
