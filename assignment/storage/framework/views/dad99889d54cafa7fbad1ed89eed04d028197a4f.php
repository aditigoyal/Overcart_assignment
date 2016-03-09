<!DOCTYPE html>
<html>
    <title>Books</title>

    <head>
	    <link href="assets/css/style.css" rel="stylesheet">  
        <h1 >   Books </h1>
	</head>
   
    <body>
	    <ul>
		<div  class = "pg1">
	<!-- Fetching values and making title as link linking to book(id) page -->
			<?php foreach($result as $book): ?>
				 <a href="<?php echo e(URL::to('description',array('id'=>$book['guid']))); ?>">  
					<li> Title: <?php echo $book['title']; ?><br /></li>
				 </a>
				<ul>
					<li>  Author: <?php echo $book['author']; ?> <br /> </li>
					<li>  Date: <?php echo $book['date']; ?> <br />    </li>
				</ul>
				<hr>
				<br/>
			<?php endforeach; ?>
		</div>
		</ul>
		
	</body>
</html>