<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title><?=SITE_NAME?></title>
	
</head>

<body>
	
	<?Template::load('example.php');?>
	
	<h1>Example</h1>
	
	<p><?=$this->message;?></p>
	
	<p>Other get var: <?=$this->params['get']['other']?></p>
	
</body>
</html>


