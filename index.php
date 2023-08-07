<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BulkBliss</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav>
        <div class="logo">
            <h1> Bulk <span> Bliss </span></h1>
        </div>

        <ul>
            <li><a href="#Home" class="fa-solid fa-home"> หน้าหลัก </a></li>
            <li><a href="#Product"> สินค้า </a></li>
            <li><a href="#About"> เกี่ยวกับเรา </a></li>
            <li><a href="#Contect"> ติดต่อเรา </a></li>
        </ul>

        <div class="icons">
            <i class="fa-solid fa-cart-shopping"> </i>
            <i class="fa-solid fa-user"> </i>
        </div>
    </nav>

    <div class="none-login">

        <section class="main" id="Home">
            <h1> เชี่ยมชม => <a href="forms/profile.php">ProFile</a> </h1>
        </section>

        <section class="Product" id="Product">

        </section>

        <section class="About" id="About">

        </section>

        <section class="Contect" id="Contect">

        </section>

    </div>

    <div class="login-form">
        <div class="box">
            <form>
                <div class="login">
                    <h2>LOGIN NOW</h2>
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span>Username & Email</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" required="required">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <div class="links">
                        <a href="#">Forgot Password</a>
                        <a href="#" class="register-link">Sign Up</a>
                    </div>
                    <input type="submit" value="Sign In">
                </div>
            </form>

            <form>
                <div class="register">
                    <h2>Create Profile</h2>
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span>Username</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="email" required="required">
                        <span>Email</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" required="required">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <div class="links">
                        <a href="#" class=""></a>
                        <a href="#" class="login-link">Sign In</a>
                    </div>
                    <input type="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>