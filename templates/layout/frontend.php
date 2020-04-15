<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?> | Vue
    </title>
    <link href="webroot/img/kode.png" type="image/png" rel="icon" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <?php //echo $this->fetch('content')?>
    <div id="dashboard">
        {{ message }}
    </div>
    <script src="vue/js/chunk-vendors.js"></script>
    <script src="vue/js/app.js"></script>
</body>
</html>
