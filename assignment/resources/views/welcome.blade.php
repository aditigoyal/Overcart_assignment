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
			@foreach ($result as $book)
				 <a href="{{URL::to('description',array('id'=>$book['guid']))}}">  
					<li> Title: {!!$book['title']!!}<br /></li>
				 </a>
				<ul>
					<li>  Author: {!!$book['author']!!} <br /> </li>
					<li>  Date: {!!$book['date']!!} <br />    </li>
				</ul>
				<hr>
				<br/>
			@endforeach
		</div>
		</ul>
		
	</body>
</html>