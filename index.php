<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MSM</title>
    <link rel="stylesheet" href="./_resources-new/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" /> <!-- jquery.fancybox.css?v=2.1.5 -->
    <link href="css/styles.css?v=5" rel="stylesheet" />
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="theme-color" content="#006401" />
    <link rel="icon" sizes="192x192" href="images/structure/logos/icon.png" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
     
</head>
<body>
    <?php include ('include-header.php'); ?>
  

    <?php include ('include-slider.php'); ?>
    
    <?php include ('include-news.php'); ?>
    
    <div class="wrapper background-grey clearfix">
        <div class="container">
            <?php include ('include-subfeature.php'); ?>
        </div>
    </div>
   
    <main class="container" role="main">
        <div class="row">
            <div class="col-sm-6">
                
            </div>
            <div class="col-sm-6">
                <?php include ('include-events.php'); ?>
            </div>
            
        </div>
       
    </main>
 

<?php include ('include-prefooter.php'); ?>
<?php include ('include-footer.php'); ?>

  
<script src="scripts/script.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>