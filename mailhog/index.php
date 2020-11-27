<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("mysql:3306", "root", "password", "training");
        if (!$conn) {
            echo "Error No: " . mysqli_connect_error();
            echo "Error Description: " . mysqli_connect_error();
            exit;
        } else {
            echo "Connect mysql success!";
        }

        use PHPMailer\PHPMailer\PHPMailer;

        require_once "./PHPMailer/src/Exception.php";
        require_once "./PHPMailer/src/PHPMailer.php";
        require_once "./PHPMailer/src/SMTP.php";

        // if(isset($_POST['name']) && isset($_POST['email'])){
            $name = "lechitu-24h";
            $email = "tule.24hdev.gmail.com";
            $listEmail = explode(" ", $_POST['toEmail']);
            $subject = "Maihog";
            $body = 'hello world';
            
            foreach ($listEmail as $toEmail) {
                echo $toEmail;
                $mail = new PHPMailer;
                //smtp settings
                $mail->isSMTP();
                $mail->Host = "mailhog";
                $mail->SMTPAuth = true;
                $mail->Username = "";
                $mail->Password = "";
                $mail->Port = 1025;
                //email settings
                $mail->isHTML(true);
                $mail->setFrom($email, $name);
                $mail->addAddress($toEmail);
                $mail->addAddress($address);
                $mail->Subject = ($subject);
                $mail->Body = $body;
                if($mail->send()){
                    $status = "success";
                    $response = "Email is sent!";
                }
                else
                {
                    $status = "failed";
                    $response = "Something is wrong: <br>" . $mail->ErrorInfo;
                }
            }
        // }
    ?>
    <form action="" method="POST">
        <textarea id="toEmail" name="toEmail" rows="4" cols="50">
        </textarea>
        <input type="submit" value="submit"/>
    </form>
</body>
</html>