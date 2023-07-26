<?php
require_once('utils/loadClass.php');

$machine = new MachineACafe("café senseo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="machine">
        <div class="marque">
            <?php echo $machine->getMarque(); ?>
        </div>
        <div class="allumage">
            <form method="get" action="">
                <input type="hidden" class="onoff" value="<?php $allumage = $machine->setEnFonction(false); ?>">
                <input type="submit" class="start" value="alumer">
            </form>
            <?php echo $machine->allumage(); ?>
        </div>
        <div class="dosette">
            <?php echo $machine->mettreUneDosette(); ?>
        </div>
        <div class="sucre">
            <?php $machine->setSucre(true); ?>
            <?php echo $machine->addSugar(); ?>
        </div>
        <div class="cafe">
            <?php echo $machine->faireDuCafe(); ?>
        </div>
    </div>
    <script>
            let start = document.querySelector('.start');
            start.addEventListener('click', ()=>{
            fetch('./onoff.php')
            .then(response => response.text())
            .then(value => {
            document.querySelector('form').innerHTML = value
            });
        });
</script>
</body>
</html>