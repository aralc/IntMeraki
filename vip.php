<htmL>
	<head>
	<link href="./css/bootstrap-theme.css" rel="stylesheet">
  		<link href="./css/widgets.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
                  <link href="./css/style-responsive.css" rel="stylesheet" />
                  <link href="./css/xcharts.min.cs" rel=" stylesheet">
                  <link href="./css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	
<script src="./js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<!--   <script src="./js/jquery-3.3.1.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>-->
<?php header('Access-Control-Allow-Origin: *');
      header("Access-Control-Allow-Headers: Content-Type");
    
?>


<script>

$.ajaxSetup({
	headers: 
		{
		'X-Cisco-Meraki-API-Key': '2fbad3c7ee9287913116beca2b9f466d68871f0d'
		}
	}); //ajax setup --fim

$(document).ready(function()
{
	
	
	
    

		 $("#btn").click(function() {
			var mac = $("#mac").val();
			var policy = $("#idPol").val();
			var cpf = $('#txtCpf').val();
			var group = $('#group').val();
			//alert(group);
			//alert(mac);
			//alert(policy);
			$.ajax({
				
			url: 'https://n264.meraki.com/api/v0/organizations/821400/networks/N_711568741124540272/clients/'+mac+'/policy?timespan=7200&devicePolicy=Group policy&groupPolicyId='+group,
			type: 'PUT',
			crossDomain: true,
			dataType: 'json',
			    success: function(data) { 
			    		alert("Success");
			    		//alert(data[0].id);
		    			//$("#id").val(data[0].id);
	        			//$("#idOrg").val(data[0].organizationId);
	        			//$("#idName").val(data[0].name);
		    					console.log(data);
		    					//alert(data);
		    					//alert(cpf);
		    					//alert(mac);
		    					//window.location='http://127.0.0.1/pbh2/gravamac.php?cpf='+cpf+'&mac='+mac;
		    					 },
		    error: function(data) { alert('Failed!');
								console.log(data);
		    					//alert(mac);
		    					 },
		    
		});


			


		


		

});

//begin 2

	 $("#mac").blur(function() {
			$.ajax({
			url: 'https://n264.meraki.com/api/v0/organizations/821400/networks/N_711568741124540272/groupPolicies',
		    //data: myData,
		    type: 'GET',
		    crossDomain: true,
		    dataType: 'json',
		    success: function(data) { 
			    		alert("Success");
			    		//alert(data[0].groupPolicyId);
			    		var dados = '<select class="form-control" id="group">';
					for (i=0;data.length >i;i++)
					{
						dados += '<option value='+data[i].groupPolicyId+'>'+ data[i].name +'</option>';
					}	
					dados += '</select>';
						$('#dados').html(dados);
						console.log(data);
		    					 },
		    error: function() { alert('Failed!'); },
		    
		});

	});
		
//end		


	 
});

</script>
	
	
	
	
	
		<meta charset="utf-8">
		<title> VIP </title>
<?php 
    include('./classes/userinfo.php');
    $cpf = $_GET['cpf'];
    
    //echo $cpf;
    
    $user = new usuario();
    $dados = $user->getInfoByCpf($cpf);
    echo $dados['cpf'];


    
    
?>		
		</head>
		<body>
		<div class="container">
		<div class="form group">
			<fieldset> 
				<legend> Incluir Mac</legend>
				
				<form action="gravamac.php" method="post">
				
				CPF <input class="form-control" type="text" value="<?php echo $dados['cpf']; ?>" name="cpf" id="txtCpf" readonly><br>
				Nome<input class="form-control" type="text" value="<?php echo $dados['name']; ?>" readonly><br>
								Email<input class="form-control" type="text" value="<?php echo $dados['Mail']; ?>" readonly><br>
				MAC<input  class="form-control" type="text" value="" placeholder="digite o mac com os :" name="txtMac" id="mac"><br>
				<!--  ID NETWORK<input class="form-control" type="text" value="" placeholder="digite o mac com os :" name="id" id="id"><br>
				ORGANIZTIONS<input class="form-control" type="text" value="" placeholder="digite o mac com os :" name="idOrg" id="idOrg"><br>
				NAME<input class="form-control" type="text" value="" placeholder="digite o mac com os :" name="idName" id="idName"><br> -->
				<br>
				<div id="dados"> </div><br>
				
				
<!-- 				<select class="form-control" name="policy" id="idPol">
					<option value="Whitelisted"> Whitelisted </option>
					<option value="Blocked"> Blocked </option>
					<option value="Normal"> Normal </option>
					<option value="vip"> vip </option>
					<option value="whitelist"> whitelist </option>
					
				</select><br>  -->
				<input class="btn btn-danger" type="button" value="cadastrar mac" id="btn">
			</fieldset>
		</body>
		</div>
		</div>
</htmL>
