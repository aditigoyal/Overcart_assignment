<!DOCTYPE html>
<html>
<title><?php echo e($book['title']); ?></title>
  <head>
	    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
          <div class="pg1">  
		     <h1> Title : <?php echo e($book['title']); ?></h1><br>
			   Author : <?php echo e($book['author']); ?>

           </div>
          <div class="pg2">  
		    Id : <?php echo e($book['guid']); ?> <br>
            Date : <?php echo e($book['date']); ?>

			</div>
		  <div class ="pg3">
       Description : <?php echo $book['body']; ?>

	     </div>
  </body>
</html>