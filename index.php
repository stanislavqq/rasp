<?php
ini_set('display_errors', E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RASP | ADOREDANCE</title>
    <link rel="stylesheet" href="/src/css/style.css">
</head>
<body>
<?php

include 'sqlite.php';

$db = new DB('database.sqlite');

$treners = $db->queryAll('SELECT * FROM `treners`');

?>
<script type="text/javascript">
    var treners = <?= json_encode($treners); ?>
</script>
<div id="app">
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="/img/logo.jpg" alt="">
            </div>
        </div>
    </header>
    <main class="wrapper" v-html="html">

    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="/src/js/app.js"></script>
</body>
</html>