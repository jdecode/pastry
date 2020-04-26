<?php
use Cake\Routing\Router;
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?> | Vue
    </title>
    <link href="<?= Router::url('/') ?>img/kode.png" type="image/png" rel="icon" />
    <link rel="stylesheet" href="<?= Router::url('/') ?>css/style.css" />
    <script type="text/javascript" defer src="<?= Router::url('/') ?>webroot/vue/js/chunk-vendors.js"></script>
    <script type="text/javascript" defer src="<?= Router::url('/') ?>webroot/vue/js/app.js"></script>
</head>
<body class="bg-gray-600">
    <?php //echo $this->fetch('content')?>
    <div id="dashboard">
        {{ message }}
    </div>
</body>
</html>
