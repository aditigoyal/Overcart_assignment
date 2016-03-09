<!DOCTYPE html>
<html>
<title>{!!$book['guid']!!}</title>
<head>
	<link href="/assets/css/style.css" rel="stylesheet">
			
</head>
<body>
    <div class="pg1">  
		<h1> Title : {!!$book['title']!!}</h1><br>
		
			 Author : {!!$book['author']!!}
    </div>
	
    <div class="pg2">  
		Id : {!! $book['guid']!!} <br>
		
        Date : {!!$book['date']!!}
	</div>
	
    <div class ="pg3">
        Description : {!!$book['body']!!}
	</div>
	
</body>

</html>