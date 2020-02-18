<?php

error_reporting(0);
if (!file_exists('token')) {
    mkdir('token', 0777, true);
}

include ("curl.php");
echo "\n";
echo "\e[94m          Voucher Claim Gojek           \n";
echo "\e[91m FORMAT NOMOR HP : INDONESIA '62***' , US='1***'\n";
echo "\e[93m SCRIPT GOJEK DENIS AUTO REGISTER + AUTO CLAIM VOUCHER\n";
echo "\e[93m SCRIPT : Denisganteng.com\n";
echo "\e[93m Github: Denismanis \n";
echo "\n";
echo "\e[96m[?] Masukkan Nomor HP Anda (62/1) : ";
$nope = trim(fgets(STDIN));
$register = register($nope);
if ($register == false)
    {
    echo "\e[91m[x] Nomor Telah Terdaftar\n";
    }
  else
    {
    otp:
    echo "\e[96m[!] Masukkan Kode Verifikasi (OTP) : ";
    $otp = trim(fgets(STDIN));
    $verif = verif($otp, $register);
    if ($verif == false)
        {
        echo "\e[100m[x] Kode Verifikasi Salah\n";
        goto otp;
        }
      else
        {
        file_put_contents("token/".$verif['data']['customer']['name'].".txt", $verif['data']['access_token']);
        echo "\e[200m[!] Trying to redeem Voucher : GOFOOD021120A !\n";
        sleep(3);
        $claim = claim($verif);
        if ($claim == false)
            {
            echo "\e[300m[!]".$voucher."\n";
            sleep(3);
            echo "\e[400m[!] Trying to redeem Voucher : GOFOOD021120A !\n";
            sleep(3);
            goto next;
            }
            else{
                echo "\e[300m[+] ".$claim."\n";
                sleep(3);
                echo "\e[400m[!] Trying to redeem Voucher : GOFOOD021120A !\n";
                sleep(3);
                goto ride;
            }
            next:
            $claim = claim1($verif);
            if ($claim == false) {
                echo "\e[300m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[400m[!] Trying to redeem Voucher : GOFOOD021120A !\n";
                sleep(3);
                goto next1;
            }
            else{
                echo "\e[300m[+] ".$claim."\n";
                sleep(3);
                echo "\e[400m[!] Trying to redeem Voucher : GOFOOD021120A !\n";
                sleep(3);
                goto ride;
            }
            next1:
            $claim = claim2($verif);
            if ($claim == false) {
                echo "\e[300m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[400m[!] Trying to redeem Voucher : GOFOOD021120A !\n";
                sleep(3);
                goto ride;
            }
          else
            {
            echo "\e[300m[+] ".$claim . "\n";
            sleep(3);
            echo "\e[400m[!] Trying to redeem Voucher : GOFOOD021120A !\n";
            sleep(3);
            goto ride;
            }
            ride:
            $claim = ride($verif);
            if ($claim == false ) {
                echo "\e[300m[!]".$claim['errors'][0]['message']."\n";
                sleep(3);
                echo "\e[400m[!] Trying to redeem Voucher : GOFOOD021120A !\n";
                sleep(3);

            }
            else{
                echo "\e[300m[+] ".$claim."\n";
                sleep(3);
                echo "\e[400m[!] Trying to redeem Voucher : GOFOOD021120A !\n";
                sleep(3);
                goto pengen;
            }
            pengen:
            $claim = cekvocer($verif);
            if ($claim == false ) {
                echo "\033VOUCHER INVALID/GAGAL REDEEM\n";
            }
            else{
                echo "\e[300m[+] ".$claim."\n";
            sleep(3);
            goto next8;  
            }
            next8 ( 3 );
            $ goride1 = permintaan ( '/ promosi-promosi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "COBAINGOJEK"}' );
            $ Message2 = fetch_value ( $ goride1 , ' "message": "' , '"' );
            gema  "\ n" . color ( "green" , "+] Pesan:" . $ message2 );
            tidur ( 3 );
            $ cekvoucher = permintaan ( '/ gopoints / v3 / wallet / voucher? limit = 10 & halaman = 1' , $ token );
            $ total = fetch_value ( $ cekvoucher , '"total_vouchers":' , ',' );
            $ voucher3 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "3" );
            $ voucher1 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "1" );
            $ voucher2 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "2" );
            $ voucher4 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "4" );
            $ voucher5 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "5" );
            $ voucher6 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "6" );
            $ voucher7 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "7" );
            gema  "\ n" . color ( "yellow" , "!] Total voucher" . $ total . ":" );
            warna gema ( "hijau" , "1." . $ voucher1 );
            gema  "\ n" . warna ( "hijau" , "2." . $ voucher2 );
            gema  "\ n" . warna ( "hijau" , "3." . $ voucher3 );
            gema  "\ n" . warna ( "hijau" , "4." . $ voucher4 );
            gema  "\ n" . warna ( "hijau" , "5." . $ voucher5 );
            gema  "\ n" . warna ( "hijau" , "6." . $ voucher6 );
            gema  "\ n" . warna ( "hijau" , "7." . $ voucher7 );
            gema "\ n" ;
            $ expired1 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '1' );
            $ expired2 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '2' );
            $ expired3 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '3' );
            $ expired4 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '4' );
            $ expired5 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '5' );
            $ expired6 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '6' );
            $ expired7 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '7' );
  

         
         }
         }
?>
