 <!----------login popup ----------->
 <div class="popup">
     <div class="close-btn">&times;</div>
     <div class="form">
         <h2>Log In</h2>
         <form action="" method="post">
             <div class="form-element">
                 <label for="email">Email</label>
                 <input type="text" id="email" placeholder="Enter Email" name="email">
             </div>
             <div class="form-element">
                 <label for="password">Password</label>
                 <input type="password" id="password" placeholder="Enter Password" name="password">
             </div>
             <div class="form-element">
                 <input type="checkbox" id="remember-me">
                 <label for="remember-me">Remember me</label>
             </div>
             <div class="form-element">
                 <button>Sign In</button>
             </div>
             <div class="form-element">
                 <a href="#">Forgot Password?</a>
             </div>
             <div class="register-acc">
                 <a href="#" id="reg"> Don't have an account? </a>
             </div>
         </form>
     </div>
 </div>

 <!----------register popup ----------->
 <div class="popup-reg">
     <div class="close-btn">&times;</div>
     <div class="form">
         <h2>Register</h2>
         <form action="/connect.php" method="post">
             <div class="form-element">
                 <label for="first-name">First Name</label>
                 <input type="text" id="f-name" placeholder="Enter First Name" name="f-name">
             </div>
             <div class="form-element">
                 <label for="last-name">Last Name</label>
                 <input type="text" id="l-name" placeholder="Enter Last Name" name="l-name">
             </div>
             <div class="form-element">
                 <label for="email">Email</label>
                 <input type="text" id="email" placeholder="Enter Email" name="email">
             </div>
             <div class="form-element">
                 <label for="password">Password</label>
                 <input type="password" id="password" placeholder="Enter Password" name="password">
             </div>
             <div class="form-element">
                 <button>Sign Up</button>
             </div>
             <div class="register-acc">
                 <a href="#" id="to-login"> Already have an account? </a>
             </div>
         </form>
     </div>
 </div>

 <style>
.popup {
    /*margin: 0px;*/
    padding: 20px 30px;
    box-sizing: border-box;
    /*background: linear-gradient(to right,#3a7bd5,#3a6073);*/
    font-family: Raleway, sans-serif;
    position: absolute;
    top: -150%;
    left: 50%;
    opacity: 0;
    transform: translate(-50%, -50%) scale(1.25);
    /*height: 100vh;*/
    width: 380px;
    background: white;
    box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.15);
    border-radius: 10px;
    z-index: 999;
    transition: top 0ms ease-in-out 200ms, opacity 200ms ease-in-out 0ms,
        transform 200ms ease-in-out 0ms;
}

.popup.active {
    top: 50%;
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
    transition: top 0ms ease-in-out 0ms, opacity 200ms ease-in-out 0ms,
        transform 200ms ease-in-out 0ms;
}

.center button {
    padding: 8px 15px;
    font-size: 13px;
    font-weight: 600;
    color: white;
    background: #f44336;
    border: none;
    outline: none;
    cursor: pointer;
    border-radius: 5px;
    margin-left: 8px;
}

/*.center button:hover{
    background: transparent;
    border: 1px solid #f44336;
    outline: #f44336;
}*/

.popup .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 15px;
    height: 15px;
    background: #888;
    color: #eee;
    text-align: center;
    line-height: 15px;
    border-radius: 15px;
    cursor: pointer;
}

.popup .form h2 {
    text-align: center;
    color: #222222;
    margin: 10px 0px 20px;
    font-size: 25px;
}

.popup .form .form-element {
    margin: 15px 0px;
    text-align: left;
}

.popup .form .form-element label {
    font-size: 14px;
    color: #222222;
}

.popup .form .form-element input[type="text"],
.popup .form .form-element input[type="password"] {
    margin-top: 5px;
    display: block;
    width: 95%;
    padding: 10px;
    outline: none;
    border: 1px solid #aaa;
    border-radius: 5px;
}

.popup .form .form-element input[type="checkbox"] {
    margin-right: 5px;
}

.popup .form .form-element button {
    width: 100%;
    height: 40px;
    border: none;
    outline: none;
    font-size: 16px;
    background: #f44336;
    color: white;
    border-radius: 10px;
    cursor: pointer;
}

.popup .form .form-element a {
    display: block;
    text-align: center;
    font-size: 15px;
    color: #1a79ca;
    text-decoration: none;
    font-weight: 600;
}

.popup .form .register-acc a {
    display: block;
    text-align: center;
    font-size: 12px;
    color: #555555;
    text-decoration: none;
    font-weight: 600;
}

/*-------register popup-----------*/

.popup-reg {
    /*margin: 0px;*/
    padding: 20px 30px;
    box-sizing: border-box;
    /*background: linear-gradient(to right,#3a7bd5,#3a6073);*/
    font-family: Raleway, sans-serif;
    position: absolute;
    top: -150%;
    left: 50%;
    opacity: 0;
    transform: translate(-50%, -50%) scale(1.25);
    /*height: 100vh;*/
    width: 380px;
    background: white;
    box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.15);
    border-radius: 10px;
    z-index: 999;
    transition: top 0ms ease-in-out 200ms, opacity 200ms ease-in-out 0ms,
        transform 200ms ease-in-out 0ms;
}

.popup-reg.active {
    top: 50%;
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
    transition: top 0ms ease-in-out 0ms, opacity 200ms ease-in-out 0ms,
        transform 200ms ease-in-out 0ms;
}

.center-reg button {
    padding: 8px 15px;
    font-size: 13px;
    font-weight: 600;
    color: white;
    background: transparent;
    border: 1px solid #f44336;
    outline: #f44336;
    cursor: pointer;
    border-radius: 5px;
    margin-left: 8px;
}

.center-reg button:hover {
    background: #f44336;
}

.popup-reg .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 15px;
    height: 15px;
    background: #888;
    color: #eee;
    text-align: center;
    line-height: 15px;
    border-radius: 15px;
    cursor: pointer;
}

.popup-reg .form h2 {
    text-align: center;
    color: #222222;
    margin: 10px 0px 20px;
    font-size: 25px;
}

.popup-reg .form .form-element {
    margin: 15px 0px;
    text-align: left;
}

.popup-reg .form .form-element label {
    font-size: 14px;
    color: #222222;
}

.popup-reg .form .form-element input[type="text"],
.popup-reg .form .form-element input[type="password"] {
    margin-top: 5px;
    display: block;
    width: 95%;
    padding: 10px;
    outline: none;
    border: 1px solid #aaa;
    border-radius: 5px;
}

.popup-reg .form .form-element input[type="checkbox"] {
    margin-right: 5px;
}

.popup-reg .form .form-element button {
    width: 100%;
    height: 40px;
    border: none;
    outline: none;
    font-size: 16px;
    background: #f44336;
    color: white;
    border-radius: 10px;
    cursor: pointer;
}

.popup-reg .form .form-element a {
    display: block;
    text-align: center;
    font-size: 15px;
    color: #1a79ca;
    text-decoration: none;
    font-weight: 600;
}

.popup-reg .form .register-acc a {
    display: block;
    text-align: center;
    font-size: 12px;
    color: #555555;
    text-decoration: none;
    font-weight: 600;
}
 </style>

 <script>
//     js for login popup
document.querySelector("#show-login").addEventListener("click", function() {
    document.querySelector(".popup").classList.add("active");
});
document
    .querySelector(".popup .close-btn")
    .addEventListener("click", function() {
        document.querySelector(".popup").classList.remove("active");
    });

//     js for register popup
document.querySelector("#reg").addEventListener("click", function() {
    document.querySelector(".popup-reg").classList.add("active");
    document.querySelector(".popup").classList.remove("active");
});
document
    .querySelector(".popup-reg .close-btn")
    .addEventListener("click", function() {
        document.querySelector(".popup-reg").classList.remove("active");
    });

document.querySelector("#to-login").addEventListener("click", function() {
    document.querySelector(".popup-reg").classList.remove("active");
    document.querySelector(".popup").classList.add("active");
});
 </script>