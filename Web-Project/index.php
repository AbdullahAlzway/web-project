<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing-page</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <video  class="bg video-bg" autoplay loop muted>
<!--         <source src="./assets/wall-paper/6993442892f40146a4ab0c908f482a19.mp4">
 -->        <source src="./assets/wall-paper/space.mp4">
          <!-- <source src="./assets/wall-paper/room.mp4"> -->
        Your browser does not suppot the video tag.
    </video>
    <!-- <img src="./assets/wall-paper/knight.jpg" class="bg image-bg" alt=""> -->

    <div class="form-container">
        <div class="form-col">
            <div class="btn-box">
                <button class="btn btn-1" id="login">Sign In</button>
                <button class="btn btn-2" id="register">Sign up</button>
            </div>

            <form action="login_process.php" method="post" class="form-box login-form">
                <div class="form-title">
                    <span>Sign in</span>
                </div>
                <div class="form-input">
                    <div class="input-box">
                        <input type="text" name="username" class="inputs input-field" placeholder="Username" required>
                        <ion-icon name="person-outline" class="icon"></ion-icon>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" oninput="changeIcon(this.value)" id="logPassword" class="inputs input-field" placeholder="Password" required>
                        <ion-icon name="lock-closed-outline" class="icon" id="log-pass-icon" onclick="myLogPassword()"></ion-icon>                    
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="input-box">
                        <button class="inputs submit-btn">
                            <span>Sign in</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>

                <div class="social-login">

                    <div class="social-login-box">
                    <ion-icon name="logo-google" class="social-login-icon"></ion-icon>
                    </div>
    
                    <div class="social-login-box">
                        <ion-icon name="logo-facebook" class="social-login-icon"></ion-icon>
                    </div>
    
                    <div class="social-login-box">
                        <ion-icon name="logo-twitter" class="social-login-icon"></ion-icon>
                    </div>
    
                    <div class="social-login-box">
                        <ion-icon name="logo-github" class="social-login-icon"></ion-icon>
                    </div>
                </div>
            </form>

            <form action="login_process.php" method="post" class="form-box register-form">
                <div class="form-title">
                    <span>Sign up</span>
                </div>
                <div class="form-input">

                    <div class="input-box">
                        <input type="email" class="inputs input-field" placeholder="Email" required>
                        <ion-icon name="mail-outline" class="icon"></ion-icon>
                    </div>

                    <div class="input-box">
                        <input type="text" class="inputs input-field" placeholder="Username" required>
                        <ion-icon name="person-outline" class="icon"></ion-icon>
                    </div>

                    <div class="input-box">
                        <input type="password" oninput="changeIcon(this.value)" id="regPassword" class="inputs input-field"  placeholder="Password" required>
                        <ion-icon name="lock-closed-outline" class="icon" id="reg-pass-icon" onclick="myRegPassword()"></ion-icon>                    
                    </div>
                    <div class=".remember-me">
                        <input type="checkbox" name="" id="remember-me-check">
                        <label for="remember-me-check"> Remember Me</label>
                    </div>
                    <div class="input-box">
                        <button class="inputs submit-btn">
                            <span>Sign up</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>

                <div class="social-login">

                    <div class="social-login-box">
                    <ion-icon name="logo-google" class="social-login-icon"></ion-icon>
                    </div>
    
                    <div class="social-login-box">
                        <ion-icon name="logo-facebook" class="social-login-icon"></ion-icon>
                    </div>
    
                    <div class="social-login-box">
                        <ion-icon name="logo-twitter" class="social-login-icon"></ion-icon>
                    </div>
    
                    <div class="social-login-box">
                        <ion-icon name="logo-github" class="social-login-icon"></ion-icon>
                    </div>
                </div>
            </form>
            
        </div>
    </div>


    <script src="assets/js/main.js"></script>

               <!--  Web Icons Import -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>