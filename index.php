<?php 
session_start();
include_once __DIR__ . "/functions.php";

if (isset($_GET["length"])) {
    $password_length = $_GET["length"];
    $password = password_gen($password_length);
    $_SESSION["password"] = $password;
    header("Location: password_page.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="length">Password Length:</label>
        <input type="number" name="length" id="length">
        <button type="submit" value="submit">Send</button>
        <button type="reset">Reset</button>
    </form>

    <?php if(isset($password)) { ?>
        <div class="alert alert-primary" role="alert">La tua password è <?php echo $password?> </div>
    <?php } else {?>
        <div>Non hai selezionato la lunghezza della password</div>
    <?php }?>
</body>
</html>