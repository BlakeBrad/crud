function add() {
		if (!empty($_POST['produto'])) {	
			 $today = 	   
			 date_create('now', new DateTimeZone('America/Sao_Paulo'));	
			 $produto = $_POST['produto'];
			 $produto['modified'] = $produto['created'] = $today->format("Y-m-d H:i:s");
			 save('produto', $produto);	 
			 header('location: index.php');	 
		 }
	 }
	 