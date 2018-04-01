<?php
    $SiteTitle = "Controllers";
    $root = "/home/ubuntu/workspace/";
    
    
   include($root . "parts/PageHeader.php");
?>


<div class="container" style="background-color:pink">
    <h1>Header 1 for index page is working as intended.</h1>
    <button type="button" class="btn">Basic</button>
    <img src="../img/testemp_top_banner.jpg">
</div>



<?php
   include($root . "parts/PageFooter.php");
?>