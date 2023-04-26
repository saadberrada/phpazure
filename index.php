<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello, World!</title>
</head>
<body>
        <h1><?php echo 'Hello, World!'; ?></h1>
		<h2>
		<?php
			$name = $_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_NAME'];
			echo "hello" $name;
		?>
		</h2>
</body>
</html>