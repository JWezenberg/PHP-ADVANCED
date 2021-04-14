<!doctype html>
<html>
<title> Le 2nd page </title>
<head>
    <style>
        body{
            background-color: <?php echo $_POST['Achtergrondkleur'] ?>;
        }
        table,tr,td{
            padding: <?php echo $_POST['Padding'] ?>px;
            border: <?php echo $_POST['Tabel-borderdikte'] ?>px gray;
        }
    </style>
</head>

<body>

    <h1>Welkom</h1>

    <table border='$info'>
        <thead>
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
            </thead>
            <tbody>
            
                <?php
                $info = array('voornaam'=>'John', 'achternaam'=>'Wezenberg', 'leeftijd'=>'26', 'woonplaats'=>'Amsterdam');



                   foreach ($info as $column) {
                      echo "<td>$column</td>";
                   }
                  




                ?>
            </tbody>
    </table>
</body>
</html>