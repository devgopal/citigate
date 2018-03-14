<?php 
$data = "PaymentTypeID=1&TransTypeID=0&MerchantName=Dummy1&MerchantPassword=p@s5w0Rd123&MerchantRef=112&Currency=USD&Amount=2099&Brand=VISA&CardholderName=John+Phillips&CardNo=4111111111111111&ExpiryYear=2021&ExpiryMonth=12&CVV=123&Firstname=John&Surname=Phillips&StreetLine1=92+West+Broadway&StreetLine2=&City=New+York&PostalCode=10007&StateProvince=NY&Country=US&Email=john.phillips.1972%40gmail.com&Telephone=2125661901&DateOfBirth=1972-04-19&UserIP=69.203.56.193&BankCode=DummyWallet&BankDescription=DummyWallet&BankCode=1&BankDescription=111";
$post_data 	= array("body"=>$data);		
$headers	= array('Content-Type: application/x-www-form-urlencoded');	

/* 
$ch_get = curl_init();
curl_setopt($ch_get, CURLOPT_URL,"http://test.dg-gw.co.uk/orion/interface/transaction.ashx");
curl_setopt($ch_get, CURLOPT_CUSTOMREQUEST, "POST"); 
curl_setopt($ch_get, CURLOPT_POSTFIELDS, $post_data );
curl_setopt($ch_get, CURLOPT_RETURNTRANSFER, true);  
curl_setopt($ch_get, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch_get);
print_r($response);
 */
$ch = curl_init("http://test.dg-gw.co.uk/orion/interface/transaction.ashx");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

$response = curl_exec($ch);
if (($error = curl_error($ch)) != false) {
	
	print_r($error);
	
		
}

?>

