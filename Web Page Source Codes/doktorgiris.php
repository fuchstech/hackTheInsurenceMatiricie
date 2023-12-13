<?php
if(isset($_POST['giris'])){ // Bu, "Giriş Yap" düğmesine tıklanıp tıklanmadığını kontrol eder.
    // Kullanıcıdan gelen e-posta ve şifreyi alır.
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    // Kullanıcı e-posta ve şifresi kontrolü
    if ($email === 'doktor@matiricie.com' && $sifre === 'test') {
        // Başarılı oturum açma durumunda, ana sayfaya yönlendirsin.
        header("Location: doktor.html");
        exit;
    } else {
        // Hatalı giriş durumunda kullanıcıyı hata sayfasına yönlendirsin.
        header("Location: hatali_giris.html");
        
    }
}
?>
