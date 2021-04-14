<!doctype html>
<html>
<title> Le 1st page </title>
<head>

</head>

<body>

    <form name='Form1' action='advanced-2.php' method='post'>
    Background colour: <select name = 'Achtergrondkleur' id='achtergrondkleur'>
    <?php
    $kleuren = array('red', 'blue', 'green', 'black', 'brown');
    foreach($kleuren as $option){
        echo "<option value=$option>$option</option>";
    }
    ?>
    </select>
        Text colour: <input type='' name='Tekstkleur'>
        Border: <input type='text' name='Tabel-borderdikte'>
        Padding: <input type='text' name='Padding'>
        <input type='submit' name='Submit'>
    </form>

</body>
</html>