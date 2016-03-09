<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
class PageController extends Controller
{
    // Function for home
    public function home(){
     /* $handle = fopen("https://offline-news-api.herokuapp.com/stories","r");
      $result = json_decode($handle, true);
      
     */
	 //using curl	to fetch JSON data from given link   
      $url = curl_init();
      curl_setopt($url, CURLOPT_URL, "http://offline-news-api.herokuapp.com/stories");
	  curl_setopt($url, CURLOPT_CONNECTTIMEOUT, 2);
      curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
      $handle = curl_exec($url);
      curl_close($url);
      $result = json_decode($handle,true);
	  //Checking Whether Network Connection is established or not
	  if($result != NULL){
    	return view('welcome',compact('result'));}
		else
		{
			echo '<h1 style= "color:blue;font-size:30px;text-align:center ">
			Problem in Network Connection <h1>';
		}
    }
    //Function on Clicking any book id
    public function description($id) {
   
		$url = curl_init();
  		curl_setopt($url, CURLOPT_URL, "http://offline-news-api.herokuapp.com/stories");
	    curl_setopt($url, CURLOPT_CONNECTTIMEOUT, 2);
  		curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
  		$handle = curl_exec($url);
  		curl_close($url);
  		$result = json_decode($handle,true);
	    if($result != NULL){
		  //Fetching data into book variable
			foreach($result as $data  )
			{
				if($data['guid'] == $id){
				$book['guid'] = $data['guid'];
				$book['title'] = $data['title'];
				$book['date'] = $data['date'];
				$book['author'] = $data['author'];
				$book['body'] = $data['body'];
				return View('description',compact('book'));
				}
			}
		}
	  else
		{
			echo '<h1 style= "color:blue;font-size:30px;text-align:center ">
			Problem in Network Connection <h1>';
		}
	  
    }
}