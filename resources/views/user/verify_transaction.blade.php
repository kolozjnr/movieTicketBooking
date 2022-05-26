<?php
$ref = $_GET['reference'];
if($ref == ""){
    header("Location:javascript://history.go(-1)");
}
?>
<?php
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_a5587ec3db79f0dc658e0ed96aee9a7f17f58dcb",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $result = json_decode($response);
  }
  $user_input = [];
  if ($result->data->status == 'success') {
      $status = $result->data->status;
      $reference = $result->data->reference;
      $name = $result->data->customer->first_name;
      $user_email = $result->data->customer->email;
      $movieTitle = $result->movieTitle;
      $check = $result->data->customer->check;

      dd($result);
  }else{
      header("Location: '/'");
  }
?>
