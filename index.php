<?php
require_once 'head.php';
?>
        <div class="container">
            <div class="content">
                <div class="registrate">
                    <h3>Don’t have an account?</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit,
                        sed do<br> eiusmod tempor incididunt ut labore et<br> dolore magna aliqua.</p>
                    <button type="button" onclick="todo()" class="signupbtn1">Sign Up</button>
                </div>
                <div class="for-login">
                    <h3>Have an account?</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit.</p>
                    <button class="loginbtn1" type="button" onclick="todo2()">Log in</button>
                </div>
                <div id="slider">
                    <div class="sign-up" id="foo2">
                    <div id="triangle-bottomright"></div>
                        <div id="square"></div>
                        <h3 id="title">Sign Up<img src="styles/img/logo.jpg" class="logo" alt="logo">
                        </h3>
                        <hr>
                        <br>
                        <form action="registration.php" method="post">
<label for="name">Name<span style="color:red">*</span></label>
                        <br>
                        <input class="test-input" type="text" name="user" required />
                        <div class="input-icon"><img src="styles/img/profil.jpg" class="profil"></div>
                        <br>
                        <label for="email">Email<span style="color:red">*</span></label>
                        <br>
                        <input class="test-input" type="text" name="email" required />
                        <div class="input-icon"><img src="styles/img/email.jpg" class="profil"></div>
                        <br>
                        <label for="psw">Password<span style="color:red">*</span></label>
                        <br>
                        <input class="test-input" type="password" name="password" required />
                        <div class="input-icon"><img src="styles/img/lock.jpg" class="profil"></div>
                        <br>
                        <button type="submit" class="signupbtn">Sign Up</button>
</form>
                        <div id="triangle-topright2"></div>
                    </div>
                    <div class="login" id="foo">
                        <div id="triangle-bottomright"></div>
                        <div id="square"></div>
                        <h3 id="title">Login<img src="styles/img/logo.jpg" class="logo" alt="logo"></h3>
                        <hr>
                        <br>
                        <form action='validation.php' method='post'>
<label for='email'>Email<span style='color:red'>*</span></label>
                       <br>
 <input class='test-input' type='text' name='email' required />
 <div class='input-icon'><img src='styles/img/email.jpg' class='profil'></div>
                        <br>
                        <label for= 'psw'>Password<span style='color:red'>*</span></label>
                        <br>
                        <input class='test-input' type="password" name="password" required />
                        <div class='input-icon'><img src='styles/img/lock.jpg' class='profil'></div>
                        <br>
                        <button type='submit' class='loginbtn'>Log in</button>
</form>
                        <div id="triangle-topright"></div>
                    </div>

                </div>
            </div>
            </div>
        <?php
        require_once 'footer.php';
