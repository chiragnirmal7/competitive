<?php
session_start();
?>
<html lang="en">

<head>
    <?php include "headerfiles.html" ?>
    <title>FeedBack</title>
</head>
<style>
    form{
        text-align: center;
    }
    input, textarea{
        margin:10px 0;
        width: 80%;
    }
    button{
        margin: 10px;
        padding: 5px 10px;
    }
</style>
<?php
if(isset($_SESSION['id']))
{
    ?>
<body>
    <?php include"navbar.php"?>
    <div class="container-fluid h-75">
        <div class="home_main m-5">
            <div>
                <h2 class="text-start my-5"><u><i>FEEDBACK</i></u></h2>
            </div>
            <!-- <p class="h4 fw-light mt-5">
                SUBJECT, FULLNAME, EMAIL, ADDRESS, (COMMENTS ABOUT FEEDBACK)
                <br>[TABLE FOR SIMPLE FAQS] -->
            <form action="" method="POST">
                <input type="text" id="subject" name="subject" placeholder="Subject" required><br>
                <input type="text" id="firstName"name="name" placeholder="Your Name" required><br>
                <input type="email" id="email" name="email" placeholder="Email" name="email" required><br>
                <textarea id="address" name="address" class="textarea"
                    placeholder="Type your permanent address here" required></textarea><br>
                <textarea id="feedback" name="feedback" class="textarea"
                    placeholder="Type your feedback here" required></textarea><br>
                    <input type="submit" name="btn" value="SEND" />
            </form>
            </p>
        </div>
    </div>
<?php
if(isset($_POST['btn'])){
    include "connection.php";
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $feedback = $_POST['feedback'];
    $sql = "INSERT INTO feedback(subject , personName, email, address, feedback) VALUES ('$subject', '$name', '$email', '$address', '$feedback')";
    $conn->query($sql);
    header("Location:home.php");
}
?>
<section id="faq" class="bg-light my-5 py-3">
    <div class="h2 text-center fw-light my-5">FREQUENTLY ASKED QUESTIONS</div>

                        <div class="container">
                            <div class="row row-cols-2 text-justify">
                                <div class="col bg-success text-light border-end text-center p-3 h4">Question</div>
                                <div class="col bg-success text-light border-start text-center p-3 h4">Answer</div>
                                <?php
                                include"connection.php";
                                    $sql = "SELECT * FROM faq";
                                    $res = $conn->query($sql);
                                    foreach($res as $row){
                                        ?>
                                        <div class="col p-3 border border-info">
                                            <?php echo $row["question"]; ?>
                                        </div>
                                        <div class="col p-3 border border-info">
                                            <?php echo $row["answer"]; ?>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    
                    </section>
    <?php
include "footer.php";
?>
</body>
<?php
}else{
    header("Location:index.php");
}
?>

</html>