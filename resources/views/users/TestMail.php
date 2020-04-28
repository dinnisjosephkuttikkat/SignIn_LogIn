 <?php   
$otp = rand(000000,111111);
   
session()->put('OTP', $otp);

echo session()->get('OTP');
?>