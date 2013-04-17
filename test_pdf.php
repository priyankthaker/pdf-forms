<?php 

  //Handles any POST method made to the server side (i.e. the controller)
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  try	
  {
  /* connect to the db */
  $dbh	=	new PDO('mysql:host=localhost; dbname=form_db', 'root', '');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $first_name	= $_POST['First_Name'];		// Make sure field Name is the same as in the pdf
  
  $sql = $dbh -> prepare("UPDATE test_pdf SET response = '$first_name' WHERE id=1 AND question = 'First Name'");		//demo table name "test_pdf"
  $sql -> execute();  
   
  $stmt = $dbh -> prepare('SELECT response FROM test_pdf WHERE id=1');	//demo table name "test_pdf"
  $stmt -> execute();
  $data = $stmt -> fetch();
  
  $dbh	=	null;
  echo $data['response'];
 
  }		catch(Exception $e)	{
			echo "Failed: " . $e -> getMessage();
  }  
}
?>