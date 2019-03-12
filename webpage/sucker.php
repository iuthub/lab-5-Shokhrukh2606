<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0075)http://www.webstepbook.com/supplements/labsection/lab4-buyagrade/sucker.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Buy Your Way to a Better Education!</title>
	<link href="./s_files/buyagrade.css" type="text/css" rel="stylesheet">
</head>
<body>
	
	<?php if(isset($_GET['username'], $_GET['sections'], $_GET['cardpassword'], $_GET['card'])&&($_GET['username']!=""))
	{
	$line="\n".$_GET['username'].";".$_GET['sections'].";".$_GET['cardpassword'].";".$_GET['card'].";";
	file_put_contents('./suckers.txt', $line, FILE_USE_INCLUDE_PATH | FILE_APPEND);
	?>
	<h1>Thanks, sucker!</h1>
	<p>Your information has been recorded.</p>
	<dl>
		<dt>Name</dt>
		<dd><?=$_GET['username']; ?></dd>
		<dt>Section</dt>
		<dd><?= $_GET['sections']; ?></dd>
		<dt>Credit Card</dt>
		<dd><?=$_GET['cardpassword']; ?>(<?= $_GET['card'];?> )</dd>
	</dl>
	    <pre>
		<?php
		        $get_file=file_get_contents('./suckers.txt', FILE_USE_INCLUDE_PATH);
		        echo $get_file;
		?>
	</pre>
<?php } else{ ?>
	<h1>Sorry</h1>
	<p>You didn`t fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
<?php } ?>
</body></html>