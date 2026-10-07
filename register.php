<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>

    <style>
        body {
            padding: 100px;
            color: green;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        form {
            padding: 25px;
            border-radius: 8px;
            background-color: #f9dfad;
            width: 420px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 8px;
            cursor: pointer;
        }

        small {
            color: purple;
        }
    </style>
</head>

<body>

    <h2>User Registration</h2>
    <br><br>

    <form method="post" action="register_process.php">

        <label>Full Name:</label>
        <br>
        <input type="text" name="fullname" required>
        <br><br>

        <label>Password:</label>
        <br>
        <input type="password" name="password" required>
        <br><br>

        <small>
            requirements: 5-20 chars, 1 uppercase, 1 lowercase,
            1 number, no spaces/special chars
        </small>

        <br><br>

        <label>Confirm Password:</label>
        <br>
        <input type="password" name="confirm_password" required>
        <br><br>

        <input type="submit" value="Register">

    </form>

</body>
</html>