<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgeVerification</title>
</head>

<body>
    <?php
    if (isset($_GET['age_submit'])) {
        $age = $_GET['age'];
        if ($age > 18) {
            echo "You Are Eligible.";
        } else {
            $rem = 18 - $age;
            echo "You aren't eligible. Remaining time=" . $rem . "years";
        }
    } else {
    ?>
        <form action="">
            Enter your age: <input type="text" name="age">
            <input type="submit" name="age_submit" value="submit">
        </form>
    <?php }
    ?>
</body>

</html>