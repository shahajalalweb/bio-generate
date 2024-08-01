<?php
$dataOutput = '';
$input1 = "";
$input2 = '';
$data =
    "I am a passionate Web Developer with few years of experience in designing and building responsive and user-friendly websites and applications. My expertise includes front-end development with HTML, CSS, JavaScript, and modern frameworks like React and Angular, as well as back-end development using Node.js, Python, and database management with SQL and MongoDB.
    I thrive in collaborative environments and enjoy working closely with designers, product managers, and other developers to create seamless user experiences. I am always eager to learn new technologies and improve my skills to stay ahead in this fast-evolving field.
    Whether it’s creating a dynamic single-page application, optimizing website performance, or developing custom solutions, I’m committed to delivering high-quality, scalable, and maintainable code. Let's build something amazing together!";

if (isset($_POST["submit"])) {
    $input1 = $_POST["name"];
    $input2 = $_POST['age'];    
    $dataOutput = $data;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Descrip Generator</title>
</head>

<body>
    <div class="container">
        <div class="content">

            <div class="text">
                <p><?php if (isset($_POST['submit'])) {
                        echo "Hi, i'm $input1. I'm $input2 years old.";
                    }else {
                        echo "Please, Input Name or Age and Click Bio Generate";
                    } ?><?php echo "$dataOutput" ?></p>
            </div>
            <form action="" method="post">
                <div class="input-filed">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="age" placeholder="Age" required>
                </div>
                <div class="submit-btn">
                    <button class="clicker" type="submit" name="submit">Bio Generate</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>