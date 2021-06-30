<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $alamat = $_POST['alamat'];
    $phone = $_POST['phone'];
    $payment = $_POST['payment'];
    $email = $_POST['email'];
    $servis = $_POST['servis'];
    $message = $_POST['message'];
    $no_wa = $_POST['noWa'];
    header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0APhone:%20$phone%20%0AEmail:%20$email%20%0AServis:%20$servis%20%0APayment:%20$payment%20%0AAlamat:%20$alamat%20%0APesan:%20$message");
} else{
    echo "
    <script>
    window.location=history.go(-1);
    </script>
    ";}
?>