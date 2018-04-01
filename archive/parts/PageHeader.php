<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php   
        ini_set('display_errors', 1);
        ini_set('error_logs', 1);
        // $root = "/home/ubuntu/workspace/";
     ?>
    
    <?php include($root  . "styles/BootstrapSrc.php"); ?>
    
    <title> <?php echo $SiteTitle . " | Testemp Ltd"; ?> </title>

 </head>

<body>
    <div id="wrapper">
        <div id="header">
            <!--- As the navigation bar needs to be persistent and will not change often, it will be put here by default -->
            <?php include($root . "components/PageLogo.php"); ?>
            <?php include($root . "components/PageNavBar.php"); ?>
        </div>
        
        <div id="main">
            
            
