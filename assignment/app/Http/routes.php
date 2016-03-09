<?php

Route::get('/', 'PageController@home');
	
Route::get('description/{id}','PageController@description');

//Taking input within route
	  /*
	  $url = curl_init();
      curl_setopt($url, CURLOPT_URL, "http://offline-news-api.herokuapp.com/stories");
      curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($url);
      curl_close($url);
      $result = json_decode($result,true);
	  
     Route::get('/', 'Pagecontroller@home')->with($result);

     Route::get('description/{id}','Pagecontroller@description($result)');

*/
//Route::get('/{result}', ['uses' =>'Pagecontroller@home']);


