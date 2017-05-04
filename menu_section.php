 <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src=<?php echo"assets/img/".$donnees['image']; ?> />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $_SESSION['utilisateur']; ?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="dashbord.php" >
                        <i class="icon-table"></i> Home
	   
                       
                    </a>                   
                </li>



                
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Absences
	                       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">1</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="pages_calendar.php"><i class="icon-angle-right"></i> Calender </a></li>
                      
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Activity
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="pages_calendar.php"><i class="icon-angle-right"></i> Calendar </a></li>
                        <li><a href="activitie.php"><i class="icon-angle-right"></i> Add Activity For ToDay </a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="holiday.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> Holidays
	     
                    </a>
                  
                </li>
<li><a href="message.php"><i class="icon-signin"></i> Messenger </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->