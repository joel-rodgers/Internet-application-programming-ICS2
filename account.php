<!DOCTYPE html>
<html>
<head>
    <title>User Login And Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
        <h2>Login Here</h2>
    <fieldset >
        <form action="user.php" method="post">
            <div class="form-group">
            <pre>
                <label>Full names</label>
                <input type="text" placeholder="Enter full names" name="user" class="form-control" required>
            </pre>
            </div>
            <div class="form-group">
            <pre>
                <label>Password</label>
                <input type="text" placeholder="Enter password" name="password" class="form-control" required>
            </pre>
            </div>
            <pre>
                <button type="submit" name="login" class="btn-primary">Login</button>
            </pre>
            </div>
    
    <div class="cd-md-6 login-right">
        <h2>Register Here</h2>
    <fieldset >
        <form action="register.php" method="post">
            <div class="form-group">
            <pre>
                <label>Full names</label>
                <input type="text" placeholder="Enter full names" name="user" class="form-control" required>
            </pre>
            </div> 
            <div class="form-group">
            <pre>
                <label>Email</label>
                <input type="text" placeholder="Enter email address" name="email" class="form-control" required>
            </pre>
            </div> 
            <div class="form-group">
            <pre>
                <label>City of residence</label>
                <input type="text" placeholder="Enter city of residence" name="city" class="form-control" required>
            </pre>
            </div>
            <div class="form-group">
            <pre>
                <label>Password</label>
                <input type="text" placeholder="Enter password" name="password" class="form-control" required>
            </pre>
            </div>
            <pre>
                <button type="submit" name="register" class="btn-primary">Register</button>
            </pre>
    
</div>
</fieldset >
</fieldset >
</div>
</div>
</div>
</div>
</body>
</html>  



