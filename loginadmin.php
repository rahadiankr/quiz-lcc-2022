<head>
    <link rel="stylesheet" href="css/css.css">
</head>
<div class="login-page">
    <div class="form">
      <form class="register-form">
        <input type="text" placeholder="name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email address"/>
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form class="login-form" method="post" action="admin.php?q=index.php">
        <input type="text" name="uname" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <button>login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>