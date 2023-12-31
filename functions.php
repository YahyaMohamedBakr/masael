<?php

include_once('data.php');

$host = $_SERVER['HTTP_HOST'];

$path = $_SERVER['REQUEST_URI'];

$url = "http://$host$path";


//get OAuth 2.0
function get_auth(){
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://accounts.spotify.com/api/token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'grant_type=client_credentials&client_id=1a3ef307a4e14422b6981d7d4c777577&client_secret=edc3ba82030645359752370fd28ebe3b',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    $data = json_decode($response);
  
    return $data;
  }

}


function get_show($t){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.spotify.com/v1/shows/2KgHpbRxeIAOawQsFQUNi6?market=eg',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer "."$t",
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        $data = json_decode($response);
      
        return $data;
      }
}

// function get_episode($t, $url){
//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//       CURLOPT_URL => $url.'/?market=EG',
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_ENCODING => '',
//       CURLOPT_MAXREDIRS => 10,
//       CURLOPT_TIMEOUT => 0,
//       CURLOPT_FOLLOWLOCATION => true,
//       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       CURLOPT_CUSTOMREQUEST => 'GET',
//       CURLOPT_HTTPHEADER => array(
//         "Authorization: Bearer "."$t",
//       ),
//     ));
    
//     $response = curl_exec($curl);
//     $err = curl_error($curl);
//     curl_close($curl);

//     if ($err) {
//         echo "cURL Error #:" . $err;
//       } else {
//         $data = json_decode($response);
      
//         return $data;
//       }
// }

$data=get_show($old_token);

if(isset($data->error->status)){
    $auth =get_auth()->access_token;
    $token = isset($auth)? $auth: '';
    if(!empty($token)){
      $file=fopen("data.php", "w");
      fwrite($file,'<?php $old_token = "'.$token.'";' );
      fclose($file);
      $data=get_show($token);
    }else{
      echo "حدث خطأ أثناء الاتصال بspotify";
      return;
    }

}

//echo $data->episodes->items[0]->html_description;

$count= count($data->episodes->items);
$items= $data->episodes->items;

foreach($items as $item){

    $name= $item->name;
    $date= $item->release_date;
    $image = $item->images[1]->url;

}


//Youtue videos
require_once 'vendor/autoload.php';

$apiKey = 'AIzaSyAu6CTW8dyClchf2DSx41Yv3U8aeZlvOQM';

try{
$client = new Google_Client();
$client->setDeveloperKey($apiKey);
$youtube = new Google_Service_YouTube($client);

$results = $youtube->channels->listChannels('id', array(
  'forUsername' => 'masaelorg'
));


//$channelId = 'UClk0TeopGpcdt2tpywA5rQw'; 


// $results = $youtube->search->listSearch('id,snippet', array(
//     'channelId' => $channelId,
//     'maxResults' => 10, 
// ));
}catch(Google_Service_Exception $e){
  echo 'خطأ في خدمة Google: ' . htmlspecialchars($e->getMessage());
}catch (Google_Exception $e) {
 
  echo 'خطأ Google آخر: ' . htmlspecialchars($e->getMessage());
} catch (Exception $e) {

  echo 'حدث خطأ غير متوقع: ' . htmlspecialchars($e->getMessage());
}
// foreach ($results['items'] as $index=>$video) {

//   if($index>0){
//     echo $video['snippet']['title']."<br>";
//     echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$video['id']['videoId'].'" frameborder="0" allowfullscreen></iframe>';
//   }
    
// }
