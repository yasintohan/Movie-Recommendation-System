 
 
 <!--
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
     <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
   -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
   
 
   <link rel="stylesheet" type="text/css" href="css/style.css">
   
  </head>
  <body>
    
	
	
	
	<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Movies</a>
        </div>
        <div class="navbar-collapse collapfile:///C:/Users/Rıdvan/Desktop/data%20homework/main.php#se">
            <ul class="nav navbar-nav navbar-right">
			
			
				
				
                <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Ana Sayfa</a></li>
				
		
		
				
		
            </ul>
        </div>
    </div>
   
</div>



<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
		<!--<li class="nav-header">Başlıca</li>-->
        <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Ana Sayfa</a></li>
		 
		<li><a href="#"><i class="glyphicon glyphicon-signal"></i> Deneme</a></li>
		 
		
		<li class="nav-header" id="dropdown"><a data-toggle="collapse" href="#dropdown-uretim"><span class="glyphicon glyphicon-wrench"></span> Deneme <span class="caret"></span></a>
		<div id="dropdown-uretim" class="collapse">
			<ul class="nav nav-pills nav-stacked" style="border-bottom:1px solid #ddd;border-top:1px solid #ddd">
				<li><a href="#"><i class="glyphicon glyphicon-picture"></i> Deneme</a></li>
				
				
			</ul>
		</div>
		</li>
		
		
		<li>
		
		
		<div class="col-lg-12">
				<form class="form-horizontal" action="index.php" method="GET">
				<fieldset>

				<!-- Form Name -->
				<legend>Search</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Name</label>  
				  <div class="col-md-8">
				  <input id="name" name="name" type="text" placeholder="name" class="form-control input-md">
				  
				  </div>
				</div>

				<!-- Multiple Checkboxes -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="checkboxes">Category</label>
				  <div class="col-md-8">
				  <div class="checkbox">
					<label for="checkboxes-0">
					  <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
					  Option one
					</label>
					</div>
				  <div class="checkbox">
					<label for="checkboxes-1">
					  <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
					  Option two
					</label>
					</div>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Year</label>  
				  <div class="col-md-4">
				  <input id="yearmin" name="yearmin" type="text" placeholder="min" class="form-control input-md">
				  
				  </div>
				  <div class="col-md-4">
				  <input id="yearmax" name="yearmax" type="text" placeholder="max" class="form-control input-md">
				  
				  </div>
				</div>
				
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Imdp</label>  
				  <div class="col-md-4">
				  <input id="imdbmin" name="imdbmin" type="text" placeholder="min" class="form-control input-md">
				  
				  </div>
				  <div class="col-md-4">
				  <input id="imdbmax" name="imdbmax" type="text" placeholder="max" class="form-control input-md">
				  
				  </div>
				</div>
				

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="singlebutton"></label>
				  <div class="col-md-8">
					<button id="singlebutton" name="singlebutton" class="btn btn-primary">Search</button>
				  </div>
				</div>

				</fieldset>
				</form>
			</div>	
		
		
		
		
		
		
		</li>
		
		  
		
		
		
		
		
    </ul>
</div>	





