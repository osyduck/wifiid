<?php
$data = json_encode([
		'email' => "osyduck@example.com",       //Email
		'fullname' => "OsyDuck",                //Full Name
		'password' => "OsyDuck69",              //Password
		'msisdn' => "082325543919",             //Nomor HP
		'gender' => "pria",                     //Kelamin
		'msisdnAlt' => "082325543919",          //Konfirmasi Nomor HP
		'partnerId' => "",                      //Kosong
		'imei'	=> "865291021620868",           //Imei HP Android
		'serialNumber'	=>	"NFRWJBY95DDMSKAE"  //Serial Number HP
	]);

        $link  = "http://api.indihome.co.id/api/user-signup"; 
        $c = curl_init($link);
        curl_setopt($c, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.4.2; Lenovo_A3000 Build/KOT49H)");
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_TIMEOUT, 60);
        curl_setopt($c, CURLOPT_VERBOSE, false);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_POSTFIELDS,"guid=&code=0&data=$data");
        curl_setopt($c, CURLOPT_POST, 1);
        curl_setopt($c, CURLOPT_HTTPHEADER, array(
                'Accept: */*',
                'Accept-Language: en-US,en;q=0.5',
                'Authorization: Basic bXlpbmRpaG9tZTpwN2Qya0xYNGI0TkY1OFZNODR2Vw',
                'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
                'Connection: keep-alive'
        ));
        $cek = curl_exec($c);    
        $results = @json_decode($cek, true);
        echo $cek;

?>
