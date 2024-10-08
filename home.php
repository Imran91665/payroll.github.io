<?php include 'db_connect.php' ?>
<style>
   .card-body{
	text-align: center;
   }
   .box2{
	text-align: center;
   }
</style>

<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
                <div class="card">
					
                    <div class="card-body">
					
                    <?php echo "Welcome back ". $_SESSION['login_name']."!"  ?>
					             
                    </div>
					<div class="box">
					 
					<p class="font-18 max-width-600">you are in an institution established to serve the wider Christian community in Ghana and Africa.</p>
					</div>
                    
                </div>
				<div class="box2">
				 <img src="pic\login-page-img.png" alt="" style = "height:400px; width:400px;">
				</div>
            </div>
	</div>

</div>
<script>
	
</script>