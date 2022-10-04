<?php
include 'partials/header.tpl.php';
//include 'home.php';

?>
<body>
    <header>
        <h1> <?= $title;?> </h1>
        
    </header>
    <?php include 'partials/nav.tpl.php';
    ?>
    
    <main>
        <?php foreach($alumnes as $alumne):?>
            <p> <?= $alumne;?> </p>
        <?php endforeach; ?>
    </main>
</body>
</html>