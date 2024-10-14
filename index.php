<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Serif,Georgia;
            background-image: url("best-online-course-platforms.png");
			height:100vh;
			background-size: cover;
			background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background:#a3e4d7  ;
            border: 2px solid #a3e4d7;
            border-radius: 8px;
            box-shadow: 0 3px 7px rgba(0, 0, 0, 0.1);
            width: 340px;
            padding: 35px;
            text-align: center;
        }

        .form-header {
            background: #FA8072;
            padding: 10px;
            color: #000000;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            margin: -20px -20px 20px -20px;
        }

        .form-header h1 {
            margin: 0;
            font-size: 20px;
        }

        .form-group {
            margin-bottom: 17px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-group label {
            font-size: 15px;
            margin-right: 15px;
            width: 70px;
            text-align: left;
        }

        .form-group input {
            flex-grow: 1;
            padding: 13px;
            font-size: 13px;
            border: 0.5px solid #008080;
            border-radius: 4px;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .form-buttons input {
            width: 38%;
            padding: 12px;
            font-size: 13px;
            border: 1px solid #83a4d4;
            border-radius: 3px;
            background: #f4f4f4;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .form-buttons input:hover {
            background: #800000;
        }

        .form-buttons input[type="submit"] {
            background:#04AA6D ;
            color: #fff;
            border-color: #83a4d4;
        }

        .form-buttons input[type="submit"]:hover {
            background: #008000;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h1>Welcome, new students!</h1>
        </div>
        <form action="home.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-buttons">
                <input type="submit" value="Proceed">
                <input type="button" value="Cancel" onclick="window.location.href='welcome.php';">
            </div>
        </form>
    </div>
</body>

</html>