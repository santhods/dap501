<div id="bodynav" class="container">
    <div class="row">
        <div class="col-md-12">
	     <div class="navbar navbar-default">
	        <div class="navbar-header">
                
                
                <?php 
                // <a class="navbar-brand visible-xs-*" href="index.php"><?php echo "Testemp" </a>
                ?>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navibar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button> <!-- end class: button, navbar-toggle -->
                                     
            </div> <!-- end class: navbar-header -->
			
			<div id="navibar" class="collapse navbar-collapse">
           	    <ul class="nav navbar-nav" style="color:green">
                    <li><a href="/controllers/"><?php echo "Instrumentation";//echo $WEB_VALUE['billsTitle']; ?></a></li>
                    <li><a href="<?php //echo $_LNK['siteSectionDebates']; ?>"><?php echo "Thermowell, Fittings and Transmitters";//echo $WEB_VALUE['debatesTitle']; ?></a></li>
	       		    <li><a href="<?php //echo $_LNK['siteSectionVotes']; ?>"><?php echo "Cable";//echo $WEB_VALUE['votesTitle']; ?></a></li>
	       		    <li><a href="<?php //echo $_LNK['siteSectionVotes']; ?>"><?php echo "Sensors";//echo $WEB_VALUE['votesTitle']; ?></a></li>
                    <li><a href="<?php //echo $_LNK['siteSectionMembers']; ?>"><?php echo "Connectors";//echo $WEB_VALUE['membersTitle']; ?></a></li>
                    <li><a href="<?php //echo $_LNK['siteSectionCommittees']; ?>"><?php echo "Knowledge Base";//echo $WEB_VALUE['committeesTitle']; ?></a></li>           
                    <li><a href="<?php //echo $_LNK['siteSectionCommittees']; ?>"><?php echo "About Testemp";//echo $WEB_VALUE['committeesTitle']; ?></a></li>           
                </ul>
               
               
               <!---
                <div class='col-md-offset-8'>
                    <form method="POST" action="<?php //echo $_LNK['siteSectionSearch']; ?>"  class="form-inline navbar-form col-md-1">
                        <div class='input-group'>
                            <input type='text' class='form-control' placeholder='Search here' name='search-query' required="true">
                            <div class='input-group-btn'>
                                <button class='btn btn-default' type='submit' name='search-submit'>
                                    <i class='glyphicon glyphicon-search'></i>
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    
                    <div class='input-group col-md-4 pull-right'>
                        <a style="margin-top: 7px;" href="<?php //print($_LNK['sitePageSignin']); ?>" class="btn btn-primary">Login</a>
                        <a style="margin-top: 7px;" href="<?php //print($_LNK['sitePageSubscribe']); ?>" class="btn btn-success">Subscribe</a> 
                    </div>
                </div>
                 --> 
                 
                 
                 
           	</div> <!-- end id: navibar -->
	     </div> <!-- end class: navigationbar-fixed-top -->	
	    </div> <!-- end class col-md navbar -->
	</div> <!-- end class: row -->
</div> <!-- end id: bodynav -->