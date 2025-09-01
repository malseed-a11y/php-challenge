<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <form action="<?php echo htmlspecialchars('get.php'); ?>" method="post">
        <h1>Simple Calculator</h1>

        <label for="fnamber">First namber:</label>
         <input type="number" id="fnamber" name="fnamber"><br>
         
         
         <label for="lnamber">Second namber:</label> 
         <input type="number" id="lnamber" name="lnamber"><br>

         <label for="opr">Select The Operator:</label> 
         <select id="opr" name="opr">
             <option value="none">None</option>
             <option value="add">+</option>
             <option value="sub">-</option>
             <option value="mul">*</option>
             <option value="div">/</option>
            </select><br>
        <input type="submit" value="Submit">
    </form>
        

</body>
</html>