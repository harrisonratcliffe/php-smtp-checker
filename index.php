<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['smtp'])) {
    $smtp_server = ($_POST['smtp_server']);
    $smtp_port = ($_POST['smtp_port']);
    $smtp_encryption = ($_POST['smtp_encryption']);
    $smtp_debug = ($_POST['smtp_debug']);
    $smtp_username = ($_POST['smtp_username']);
    $smtp_password = ($_POST['smtp_password']);
    $email_from = ($_POST['email_from']);
    $email_to = ($_POST['email_to']);

    require 'lib/phpmailer/src/Exception.php';
    require 'lib/phpmailer/src/PHPMailer.php';
    require 'lib/phpmailer/src/SMTP.php';

    $email = new PHPMailer;
    $email->IsSMTP();
    $email->Host = $smtp_server;
    $email->Port = $smtp_port;
    $email->SMTPAuth = true;
    $email->SMTPDebug = $smtp_debug;
    $email->SMTPSecure = $smtp_encryption;
    $email->Username = $smtp_username;
    $email->Password = $smtp_password;
    $email->setFrom($email_from);
    $email->addAddress($email_to);
    $email->Subject = 'SMTP Test Email';
    $email->Body = 'Hooray, your SMTP is working correctly!';
    if ($email->send()) {
        $message = '<div class="alert alert-success" role="alert">SMTP is working and email has been successfully sent!</div>';
    } else {
        $message = '<div class="alert alert-danger" role="alert">SMTP is not working and email has failed to send!<br>Error: ' . $email->ErrorInfo . '</div>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Harrison Ratcliffe">
    <meta name="description" content="A simple tool to check your SMTP is working, built in PHP.">
    <title>PHP SMTP Checker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<main class="form-signin">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="pure-form pure-form-stacked">
        <fieldset>
            <legend>PHP SMTP Checker</legend>
            <?php if(!empty($message)) { echo $message; } ?>
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="multi-first-name">SMTP Server:</label>
                    <input type="text" name="smtp_server" required placeholder="smtp.server.com" class="pure-u-23-24" />
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="multi-last-name">SMTP Port:</label>
                    <input type="number" name="smtp_port" required placeholder="465" class="pure-u-23-24" />
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="multi-state">Encryption</label>
                    <select name="smtp_encryption" require class="pure-input-1-2">
                        <option value="none">None</option>
                        <option value="ssl">SSL</option>
                        <option value="tls">TLS</option>
                    </select>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="multi-state">Debug mode</label>
                    <select name="smtp_debug" require class="pure-input-1-2">
                        <option selected value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                    </select>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="multi-email">SMTP Username:</label>
                    <input type="text" name="smtp_username" required class="pure-u-23-24" required="" />
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="multi-city">SMTP Password:</label>
                    <input type="password" name="smtp_password" required class="pure-u-23-24" />
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="multi-city">Email from:</label>
                    <input type="email" name="email_from" required class="pure-u-23-24" />
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label for="multi-city">Email to:</label>
                    <input type="email" name="email_to" required class="pure-u-23-24" />
                </div>
            </div>
            <button type="submit" name="smtp" class="pure-button pure-button-primary">Submit</button>
        </fieldset>
    </form>
</main>
</body>
</html>
