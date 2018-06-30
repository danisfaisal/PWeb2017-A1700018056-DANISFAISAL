<?php
function auto_respon($email){
 include_once("class.phpmailer.php");
 $mail         = new PHPMailer();
 $mail->IsMail();
 $mail->From   = "admin@tokobukubekas.co.tv"; // silakan isi dengan email kamu..itu hanya sample,, $mail->FromName = "Admin TokoBukuBekas.Co.Tv";
 $mail->Subject = "Salam";
 $mail->Body = "Terimakasih Telah Mampir Ke Situs TokoBukuBekas.Co.Tv";
 $mail->AddAddress($email);
 $mail->IsHTML(true);
 if(!$mail->Send()){
 return FALSE;
 }else{
   return TRUE;
 }
 }
 
$aksi = $_POST['tbl'];
$mail = $_POST['email'];
  if($aksi=="Tunggu"){
   if(auto_respon($mail)){
    echo" Terimakasih telah mengisi email. Silahkan periksa email anda.Bila sudah selesai,,saya akan  konfirmasikan ke email anda!";
   }else{  echo"Terjadi Kesalahan Input Email,,Silakan Ulangi"; 
}
<?