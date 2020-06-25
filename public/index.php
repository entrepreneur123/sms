<?php require'../includes'/header.php?>
<?php
use Twilio \Rest\Client;

?>
<?php
if(isset($_POST['number']) && isset($_POST['message'])){
    $client = new Client($config['account_sid'],$config['auth_token']);
    $client->account->messages->sendmessage($config['phone_number'],$_POST['number'],$_POST['message']);
    echo "message sent";

}


?>
    <div class='col-sm-6 col-sm-offset-3'>
        <form role='form' method='post'>
            <div class='form-group'>
                <label for='email'>phone number</label>
                <input name='number' type='tel' class='form-control' id='email' required placeholder='enter your number'>
            </div>

            <div class='form-group'>
                <textarea name='message' id='message' cols='30' rows='10' class='form-control' ></textarea>
            </div>
            <input name='submit' type='submit' class='btn btn-primary btn-block' value='send message'>
        </form>
    </div>

<?php require '../includes'/footer.php?>

