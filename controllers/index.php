<?php
    $SiteTitle = "Controllers";
    echo $_SERVER['DOCUMENT_ROOT'];

    
   include($_SERVER['DOCUMENT_ROOT'] . "/parts/PageHeader.php");
?>


<div class="container" style="background-color:pink">
    <h1>Header 1 for index page is working as intended.</h1>
    <button type="button" class="btn">Basic</button>
    <img src="../img/testemp_top_banner.jpg">
</div>



<?php
    // echo "<h1>Hello There</h1>";
    
    //echo "<h3>How are you today</h3>";
    
   include($_SERVER['DOCUMENT_ROOT'] . "/parts/PageFooter.php");
?>