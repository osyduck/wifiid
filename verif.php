<?php
$data = json_encode([
		'email' => $email,       //Email Buat Verif
		'nonce' => $code                //Masukin Kode OTP
	]);

        $link  = "http://api.indihome.co.id/api/user-activate"; 
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
                'Authorization: Basic bXlpbmRpaG9tZTpwN2Qya0xYNGI0TkY1OFZNODR2Vw==',
                'Cookie: BIGipServerpool_api_indihome_co_id=2617705994.20480.0000',
                'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
                'Connection: keep-alive'
        ));
        $cek = curl_exec($c);    
        $results = @json_decode($cek, true);
        echo $cek;
        
       ?>
