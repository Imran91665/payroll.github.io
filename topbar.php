<style>
	.new{
    background-color: #40739e;
  }
</style>

<nav class="navbar navbar-light fixed-top new" style="padding:0;min-height:3.5rem">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  		
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b>Payroll Management System</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white" style="display: flex;">
<img src="pic/photo3.jpg" alt="" style = "height:50px; width:50px; border-radius:50%;">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>