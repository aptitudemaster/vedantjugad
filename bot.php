<form action="" method="post">
    <input type="text" name="message">
    <input type="submit" name="submit">
</form>



<?php
if(isset($_POST['submit']))
{
$apiToken = "2103574632:AAECIl_9IIqpq_iSJokfvDhCIo3kJofflsM";
$data = [
    'chat_id' => '@vedantjugad',
    'text' => $_POST['message']
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

}
?>