<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family:  Serif,Georgia;
            background-color: #3c7f97;
            margin: 0;
        }

        .navbar-container {
            margin-top: 10px;
            border: 4px solid #34b1dc  ;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .navbar {
            background: #a9cce3;
            border: 4px solid #c39bd3  ;
            display: flex;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 15px;
        }

        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 10;
            display: flex;
        }

        .navbar ul li {
            margin: 0 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #0a0a0a;
            font-weight: normal;
            font-size: 25px;
            margin-left: 10px;
            margin-left: 10px;
        }

        .cart img {
            margin-top: 3px;
            border: 4px solid #34b1dc;
            width:100px;
            height: 100px;
            margin-right: 20px;
        }

        .content {
            max-width: 1100px;
            margin: 20px auto;
            border: 4px solid #34b1dc  ;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .welcome-message {
            justify-content: space-between;
            align-items: center;
            border: 4px solid #34b1dc ;
            margin-top: 10px;
            padding: 10px;
            text-align: right;
        }

        .course-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 35px;
            justify-content: center;
            margin-bottom: 40px;
        }

        .course-card-border {
            margin-top: 20px;
            width: 290px;
            height: 250px;
            border: 4px solid #34b1dc ;

        }

        .course-card {
            margin-top: 20px;
            margin-left: 15px;
            width: 230px;
            height: 150px;
            background: #d9c7f3 ;
            padding: 15px;
            text-align: left;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .course-card h3 {
            font-size: 18px;
        }

        .course-card p {
            margin: 0;
            font-size: 20px;
        }

        .course-card .price {
            margin-top: 80px;
            margin-left: 65px;
        }

        .date {
            font-size: 18px;
            font-weight: bold;
        }

        .greeting {
            font-size: 18px;
            font-weight: bold;
        }

        .cart-button {
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: background 0.3s ease;
            margin-right: 10px;
            border: 4px solid #e3e1e6 ;
        }

        .cart-button:hover {
            background: #a9cce3 ;
        }

        .cart-button img {
            width: 80px;
            height: 70px;
        }

        .cart-button span {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="navbar-container">
            <div class="navbar">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">COURSES</a></li>
                    <li><a href="#">AFFILIATIONS</a></li>
                    <li><a href="#">HOW TO JOIN</a></li>
                    <li><a href="#">TESTIMONIALS</a></li>
                </ul>
            </div>
            <button class="cart-button" onclick="window.location.href='cart.php';">
                <img src="images/shopping-cart-icon.jpg" alt="Cart">
            </button>
        </div>

        <div class="welcome-message">
            <div class="date">
                <?php
                echo date("l, jS F, Y");
                ?>
            </div>
            <div class="greeting">
                <?php
                // Retrieve user input from POST request
                $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Guest User';
                $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'guestuser@example.com';
                echo "Welcome $name ($email)";
                ?>
            </div>
        </div>

        <div class="course-cards">
            <!-- 1st card -->
            <div class="course-card-border">
                <div class="course-card">
                    <h3>EC0001</h3>
                    <p>Quantitative Analysis in Business (45 H)</p>
                </div>
                <div class="price" style="margin-top: 10px; margin-left: 100px">Rs. 35,000/-</div>
            </div>
            <!-- 2nd card -->
            <div class="course-card-border">
                <div class="course-card">
                    <h3>EC0002</h3>
                    <p>Information Technology in Retailing (45 H)</p>
                </div>
                <div class="price" style="margin-top: 10px; margin-left: 100px">Rs. 35,000/-</div>
            </div>
            <!-- 3rd card -->
            <div class="course-card-border">
                <div class="course-card">
                    <h3>EC0003</h3>
                    <p>Brand Innovation and Development (30 H)</p>
                </div>
                <div class="price" style="margin-top: 10px; margin-left: 100px">Rs. 25,000/-</div>
            </div>
            <!-- 4th card -->
            <div class="course-card-border">
                <div class="course-card">
                    <h3>EC0004</h3>
                    <p>Packaging and Logistic Management (30 H)</p>
                </div>
                <div class="price" style="margin-top: 10px; margin-left: 100px">Rs. 25,000/-</div>
            </div>
            <!-- 5th card -->
            <div class="course-card-border">
                <div class="course-card">
                    <h3>EC0005</h3>
                    <p>Service Marketing (40 H)</p>
                </div>
                <div class="price" style="margin-top: 10px; margin-left: 100px">Rs. 30,000/-</div>
            </div>
            <!-- 6th card -->
            <div class="course-card-border">
                <div class="course-card">
                    <h3>EC0006</h3>
                    <p>E-Commerce (45 H)</p>
                </div>
                <div class="price" style="margin-top: 10px; margin-left: 100px">Rs. 35,000/-</div>
            </div>
        </div>
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            document.getElementById('date').textContent = now.toLocaleString();
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>

</body>

</html>