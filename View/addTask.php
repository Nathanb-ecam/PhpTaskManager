<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php require("header.php");?>
    <div class="form-container">
    <p id="fill-state"></p>    
        <form action="../index.php?form" method="post" class="form" id="submit">    
            <h2>Add new Task</h2>
            <input type="text" class='label-inputs' placeholder="Tittle" name="title-input" id="title-input" required>
            <input type="text" class='label-inputs' placeholder="Price" name="price-input" id="price-input" required>
            <input type="text" class='label-inputs' placeholder="Quantity" name="quantity-input" id="quantity-input" required>
            <br/>
            <input type="submit" value="Save"  class="btn">
        </form>
    </div>
    
    <script src="script.js" ></script>
</body>
</html>

