<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Change Background Color with form</title>
</head>

<style media="screen">

  html {
    min-height: 100%;
  }

  body {
    color: #0A0A0A;
    margin: 2em;
    padding: 2em;
    font-family: Montserrat;
    <?php echo $_POST['color'] ?>
    min-height: 100%;
    text-align: center;
  }

  #button {
    margin-top: 1em;
  }

</style>

<body>
  <h2>Pick a color</h2>


  <form action = "<?php $_PHP_SELF ?>" method = "POST">
    <!-- Nombre: <input type="text" name="name"><br> -->
    <select name="color"><br>

      <option value="background-color: #FFE53B;
                     background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);">Orange gradient</option>

      <option value="background-color: #08AEEA;
                     background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);">Green gradient</option>

      <option value="background-color: #0093E9;
                     background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);">Blue gradient</option>

    </select><br>
    <input id="button" type="submit" value="Change">
  </form>

</body>

</html>
