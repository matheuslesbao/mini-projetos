<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Date</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav>
      <h1>Work with Date()</h1>
      <p>Aprendendo PHP</p>
      <p>
        Monstrando date com Y -> <?php echo date("Y"); ?>
      </p>
    </nav>

  </header>

  <main>
    <h3>Mostrando a hora em formato am e pm</h3>
    <?php echo "<p> Horario: " . $hour . "</p>"; ?>

    <h3>Dia da Semana</h3>
    <p><?php echo date("l") ?></p>

    <h3>Quanto falta para sabado</h3>
    <p>
      <?php echo "Faltam <strong> " . $cooldown . "</strong> para Sabado" ?>
    </p>

    <h3>Mes Atual</h3>
    <p>
      <?php echo date("F") ?>
    </p>
  </main>
</body>

</html>
