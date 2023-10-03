<html>
<head>
    <title>PAGINA INVIA - RISPOSTA SERVER</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        section {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $bdate = $_POST['bdate'];
        $bplace = $_POST['bplace'];
    ?>
    <section>
        <h2>Registration Details:</h2>
        <p>Name: <?php echo $name; ?></p>
        <p>Surname: <?php echo $surname; ?></p>
        <p>Gender: <?php echo $gender; ?></p>
        <p>Birthday: <?php echo $bdate; ?></p>
        <p>Birth place: <?php echo $bplace; ?></p>
    </section>
</body>
</html>