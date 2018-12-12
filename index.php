<html>
	<head>
		<meta charset="utf-8">
		<title>POC PRODABEL</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
  		<link href="./css/bootstrap-theme.css" rel="stylesheet">
  		<link href="./css/widgets.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
                  <link href="./css/style-responsive.css" rel="stylesheet" />
                  <link href="./css/xcharts.min.cs" rel=" stylesheet">
                  <link href="./css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  		
  		
<?php
        //include('./include/db.php');
      include('./classes/userinfo.php');
      header('Access-Control-Allow-Origin: *');
      header("Access-Control-Allow-Headers: Content-Type");
      
      
?>		
	</head>
	<body>
	<div class="container">
	
		<span class="border border-primary"><h1><a href="http://www.netservice.com.br" class="text-primary">NETSERVICE</a> - POC PRODABEL </h1></span>
		<hr>
	
		
		<fieldset>
			<legend> Usuários </legend>
			<div class="table-responsive-sm">
				<table class="table table-striped table-hover table-bordered">
					<thead >
						<tr class="table-primary">
							<td> Usuario </td>
							<td> Email </td>
							<td> VIP </td>
							<td> MAC </td>
							<td> Ação</td>
						</tr>
					</thead>
					<tbody>
					<tr>
					<?php 
					       $user = new usuario();
					       $recebe = $user->getInfo();
					           foreach($recebe as $u)
					           {
  					 ?>
					
							<td> <?php echo $u['name']; ?> </td>
							<td> <?php echo $u['Mail']?> </td>
							<td> <?php echo "y";     ?> </td>
							<td> <?php echo $u['mac'] ?> </td>
							<td> <a href="<?php echo 'vip.php?cpf='.$u['cpf']; ?>"><button type="button" class="btn btn-dark">CADASTRAR MAC</button>	</a></td>
							
					</tr>
											
						
					
					</tbody>
					<?php 
							//$user = new usuario();
							//$recebe = $user->getInfo();
							//print_r($recebe);
					           }
							?>
						
					
				
				
				</table>
				</div>
		
		</fieldset>
		</div>
	</body>
</html>
