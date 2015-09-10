<html>
    <head>
        <title>
            Welcome!
        </title>
        <meta charset ="UTF-8">
        <meta viewport="width:device-width;initial-scale:1;">
        <link rel="stylesheet" type="text/css" media="all" href="bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" media="all" href="bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="bootstrap/dist/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" media="all" href="bootstrap/dist/css/bootstrap-theme.min.css">
    </head>
    <body style="background-image:url('img/background.jpg');background-repeat:no-repeat;background-size:cover;">
    	<script "javascript">
    		function UserValidation(){
				  var username;
				  username = document.forms["auth"]["username"].value;

				  if(isNaN(username)||username<100000000||username>1000000000){
					 alert("Enter a Valid Roll Number");
                      return false;
				  }
				  else{
                      return true;
				  }
        }
      </script>
        <div style="width:100%; height:300px; font-size:15;margin-top:50px; opacity:1.0; border:1px; text-align:center;">
           	<p style="font-size:60;color:black;"id="mass">
           		Title Goes Here!
           		<img src ="img/icon.png" height="80px" width="80px">
            </p>
        <div class="col-lg-4 col-sm-6 col-sm-offset-3 col-lg-offset-4">
                <div style="margin-top:80px;" class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php
                              session_start();
                              if($_SESSION["panel_heading_index"]==NULL){
                                echo "<h4>Login.</h4>";
                              }
                              else{
                                echo $_SESSION["panel_heading_index"] ;
                                $_SESSION["panel_heading"]=NULL;
                              }
                            ?>
                        </div>
                    	<div class="panel-body">
                      		<form name="auth" class="form-inline" action="php/Authentication.php" method="post" onsubmit="return UserValidation()">
                        		<div class="form-group">
                        			<label for="un">
                        				Username
                        			</label>
                              		<input type="text"  class="form-control" id="un" name="username" placeholder="Roll Number" required><br><br>
                              		<label for="pw">
                              			Password
                              		</label>
                              		<input type="password" class= "form-control" id="pw" name="password" placeholder="Octa Password" required><br><br>
                                	<input type="submit" class="btn btn-info btn-md" name ="submit" value="Submit">

                            	</div>
                      		</form>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-sm-offset-3 col-lg-offset-4">
          <div style="margin-top:70px;font-size:25;color:black;text-align:center" class="row">
            <small>
              <cite>
              	Made with &#10084 by <a href="http://delta.nitt.edu">Delta Force</a>
              </cite> 
            </small>
          </div>
        </div>
    </body>
</html>
