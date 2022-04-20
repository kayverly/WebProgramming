
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php print $_POST["name"] ?></dd>

			<dt>Section</dt>
			<dd><?php print implode(", ",$_POST["section"]) ?></dd>

			<dt>Credit Card</dt>
			<dd><?php print $_POST["ccinfo"]."(". $_POST["card_type"].")"?></dd>
		</dl>
		<p>Here are all the suckers who have submitted here:</br> </p>
		
    <?php 
	
        
		$myfile = './sucker.txt';
		$person = array($_POST["name"],implode(", ",$_POST["section"]),$_POST["ccinfo"],$_POST["card_type"], PHP_EOL);
		$data = implode(";", $person);
		file_put_contents($myfile, $data, FILE_APPEND | LOCK_EX);
		$suckers = file_get_contents($myfile);
		echo "<pre>";
		print $suckers;
		echo "</pre>";
		
    ?>

	</body>
</html> 