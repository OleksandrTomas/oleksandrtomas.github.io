<?php 
if(isset($_POST['submit'])){
$to = "sa.tomash40@gmail.com";
$from = "sa.tomash50@gmail.com";
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = "Повідомлення";
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не існує");
}
     
$mail_to_myemail = "Доброго дня!
Було відправлено повідомлення з сайту!
Ім'я відправника:$first_name
E-mail:$email
Текст повідомлення:$message
Щоб відповісти на лист, створіть нове повідомлення, скопіюйте електронну адресу і вставте в поле Кому.";
     
$headers = "From: $from \r\n";
mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
echo "Повідомлення відправлено. Спасибі вам" . $first_name . ", Ми скоро зв'яжемося з Вами.";
echo "<br /><br /><a href='https://oleksandrtomas.github.io'>Вернуться на сайт.</a>";
}
?>
<script type="text/javascript">
function changeurl(){eval(self.location="https://oleksandrtomas.github.io");}
window.setTimeout("changeurl();",5000);
</script>