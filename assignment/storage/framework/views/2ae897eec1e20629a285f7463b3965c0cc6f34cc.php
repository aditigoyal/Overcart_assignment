<!DOCTYPE html>
<html>
<title><?php echo $book['guid']; ?></title>
<head>
	<link href="/assets/css/style.css" rel="stylesheet">
			
</head>
<body>
    <div class="pg1">  
		<h1> Title : <?php echo $book['title']; ?></h1><br>
		
			 Author : <?php echo $book['author']; ?>

    </div>
	
    <div class="pg2">  
		Id : <?php echo $book['guid']; ?> <br>
		
        Date : <?php echo $book['date']; ?>

	</div>
	
    <div class ="pg3">
        Description : <?php echo $book['body']; ?>

	</div>
	
</body>

</html>