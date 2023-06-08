<html>
    <?php
    include 'connection.php';
         ?>
    
    <head>
    <title>Login Form</title>
    <link rel="stylesheet" href="CSS/NewLogin.css">
    
    </head>
    <script type="text/javascript">
        const toggleMenu = () => {
            document.body.classList.toggle("open");
        }

    </script>    

    <body>
        <div class="container">
        <section>
            
            <button class="burger" onclick="toggleMenu()">
            </button>

            <div class="menu">
                <nav>
                    <a href="#" style="animation-delay: 0.1s">
                    Home
                    </a>
                    <a href="#" style="animation-delay: 0.2s">
                        About
                    </a>
                    <a href="#" style="animation-delay: 0.3s">
                        Contact
                    </a>
                </nav>
            </div>
        </section>
                        <section>
                                <div class="login-box">
                                
                                    <form action="api/login.php" method="POST">

                                        <div class="user-box">
                                            <input type="username" name="" required="">
                                            <label>Username</label>
                                        </div>

                                        <div class="user-box">
                                            <input type="password" name="" required="">
                                            <label>Password</label>
                                        </div>

                                        <a href="#">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Login 
                                        </a>

                                    </form>
                                </div>
                            
                        </section>
        </div>
    </body>
</html>