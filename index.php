<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'pokemon.php' ?>
    <div class="container">
    
        <div class="pokeDex">
            <div class="leftPart">
                <div class="image">
                    <img src="<?php echo $pokemon['sprite'] ?>" alt="">
                </div>
                <div class="name">
                    <p>#<?php echo $pokemon['id'] ?></p>
                    <h1><?php echo $pokemon['name'] ?></h1>
                    <div id="types">
                        <?php foreach($pokemon['types'] as $type): ?>
                            <p class="<?php echo $type['type']['name']; ?>"><?php echo $type['type']['name']; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="rightPart">
                <div class="wrapper">
                <h2>Details</h2>
                <p>Height: <strong><?php echo $pokemon['height']?></strong> </p>
                <p>Weight: <strong><?php echo $pokemon['weight']?></strong></p>
                <h2>Base Stats</h2>
                <?php foreach($pokemon['stats'] as $stats): ?>
                    <p><?php echo $stats['stat']['name']?>: <strong><?php echo $stats['base_stat']?></strong></p>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div>
        <a href="?id=<?php echo $id - 1; ?>">Previous</a>
        <a href="?id=<?php echo $id + 1; ?>">Next</a>
        </div>
    </div>
</body>
</html>