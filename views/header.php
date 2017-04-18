<!DOCTYPE html>
<html>
    <head>
        
        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Scrapper</title>
        <?php endif ?>
        
        <meta charset="utf-8">
	    <meta name="description" content="Web Scrapper">
	    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
	    <link rel="stylesheet" type="text/css" href="css/styles.css">
	    <script type="text/javascript" src="js/jquery.min.js"></script>
	    <script src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-inverse navbar-fixed-top">
        	    <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">Home</a>
                    </div>
                </div>
            </nav>
        </div>
        