<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h3> Enter your details in the form below</h3>
    <form method="POST" action="process.php">
        Name:
        <input type="text" name="name" id="name" placeholder="Enter your full name" />
        <br />
        Phone:
        <input type="text" name="phone" id="phone" placeholder="250-787xxxxx" />
        <br />

        Email:
        <input type="text" name="email" id="email" placeholder="example@gmail.com" />
        <br />
        <input type="submit" name="submit" id="submit" value="Save" />
    </form>
</body>
</html>