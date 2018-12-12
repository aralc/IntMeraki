<htmL>
	<head>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>	
<script>

$.ajaxSetup({
	headers: 
		{
		'X-Cisco-Meraki-API-Key': '2fbad3c7ee9287913116beca2b9f466d68871f0d'
		}
	}); //ajax setup --fim

$(document).ready(function()
{
	alert('teste');

	 $("#mac").blur(function() {
		$.ajax({
		url: 'https://n264.meraki.com/api/v0/organizations/821400/networks',
	    //data: myData,
	    type: 'GET',
	    crossDomain: true,
	    dataType: 'json',
	    success: function(data) { alert("Success");
	    				
	    					console.log(data);
	    					 },
	    error: function() { alert('Failed!'); },
	    
	});

});
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
			<fieldset> 
				<legend> Incluir Mac</legend>
				<form action="gravamac.php" method="post">
				
				CPF <input type="text" value="<?php echo $dados['cpf']; ?>" name="cpf" readonly><br><br>
				Nome<input type="text" value="<?php echo $dados['name']; ?>" readonly><br><br>
				Email<input type="text" value="<?php echo $dados['Mail']; ?>" readonly><br><br>
				MAC<input type="text" value="" placeholder="digite o mac com os :" name="txtMac" id="mac"><br><br>
				ID NETWORK<input type="text" value="" placeholder="digite o mac com os :" name="id" id="id"><br><br>
				ORGANIZTIONS<input type="text" value="" placeholder="digite o mac com os :" name="idOrg" id="idOrg"><br><br>
				NAME<input type="text" value="" placeholder="digite o mac com os :" name="idName" id="idName"><br><br>
				<input type="submit" value="cadastrar mac">
			</fieldset>
		</body>
</htmL>
