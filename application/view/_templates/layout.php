<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="OM">
	<meta name="Keywords" content="eityeight88">
	<meta name="Description" content="">

	<title><?=SITE_TITLE;?></title>

	<link href="<?=URL;?>img/logo.gif" rel="apple-touch-icon" />
	<link href="<?=URL;?>img/logo.gif" rel="apple-touch-icon" sizes="76x76" />
	<link href="<?=URL;?>img/logo.gif" rel="apple-touch-icon" sizes="120x120" />
	<link href="<?=URL;?>img/logo.gif" rel="apple-touch-icon" sizes="152x152" />
	<link href="<?=URL;?>img/logo.gif" rel="apple-touch-icon" sizes="180x180" />
	<link href="<?=URL;?>img/logo.gif" rel="icon" sizes="192x192" />
	<link href="<?=URL;?>img/logo.gif" rel="icon" sizes="128x128" />

	<?php require APP . 'view/_templates/style.php'; ?>

</head>
<body class="">

<?php require APP . 'view/_templates/header.php'; ?>

<?php require APP . $content;  ?>

<?php require APP . 'view/_templates/footer.php'; ?>

<?php require APP . 'view/_templates/script.php'; ?>

</body>
</html>