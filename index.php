<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php Lessons</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<form method="get">
    <input type="text" name="person">
    <button>Submit</button>
</form>

    <?php
        $name = $_GET['person'];
        echo "Hi There ".$name;
        print 5 + 10
    ?>
</body>
</html>