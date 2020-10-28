
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="cd-md-6 login-right">
        <h2>Register Here</h2>
    <fieldset >
        <form action="processregister.php" method="post">
            <div class="form-group">
            <pre>
                <label>Full names</label>
                <input type="text" placeholder="Enter full names" name="name" class="form-control" required>
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
</div>
</div>
</div>
</body>
</html>  



