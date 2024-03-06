<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid-lg m-2"> 
        <h1 class="heading">KRUSHI MITRA</h1>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navabr-brand ">
                        <img src="images/logo.png" class="d-inline-block align-top img" alt="Logo not found">
                    </a>

                    <button class="navbar-toggler bg-white mx-3 " data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Labour_Feature.php">LABOUR REQUIREMENT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="social_media.php">SOCIAL MEDIA INTEGRATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">WHOLESALER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product.php">PRODUCT AND SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">LOGIN</a>
                            </li> 
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <ul class="nav nav-tabs mb-4 ms-auto" id="myTabs">
            <li class="nav-item">
                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login1">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="registration-tab" data-toggle="tab" href="#labour">Labour Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="registration-tab" data-toggle="tab" href="#farmer">Farmer Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="registration-tab" data-toggle="tab" href="#wholesaler">Wholesaler Registration</a>
            </li>
        </ul>
    
        
        <div class="tab-content">
            <!-- Login Form -->
            <div class="tab-pane fade show active" id="login1">
                <form>
                    <div class="form-group">
                        <label for="loginUsername">Username:</label>
                        <input type="text" class="form-control" id="loginUsername" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password:</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

            <!-- Registration Form -->
            <div class="tab-pane fade" id="labour">
                <form id="registrationForm" class="" method="post">
                    <h4 class="text-center mb-4">Labour Registration</h4>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-6 mb-3">
                            <label for="num" class="form-label">Age :</label><br>
                            <input type="number" class="form-control" id="num">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="mobileNumber" class="form-label">Mobile Number:</label>
                            <input type="tel" class="form-control" id="mobileNumber" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="Address1" class="form-label">Address :</label><br>
                            <textarea name="Address" id="Address1" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                      <label class="form-label">Gender:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                <label class="form-check-label mr-5" for="male">Male</label>

                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                <label class="form-check-label" for="female">Female</label>
                            </div>                            
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputState">Type of Work</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </div>        
                    <button type="button" class="btn btn-primary " onclick="registerUser()">Register</button>
                </form>
            </div>


            <div class="tab-pane fade" id="farmer">
                <form id="registrationForm" class="" method="post">
                    <h4 class="text-center mb-4">Farmer Registration</h4>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-6 mb-3">
                            <label for="num" class="form-label">Age :</label><br>
                            <input type="number" class="form-control" id="num">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="mobileNumber" class="form-label">Mobile Number:</label>
                            <input type="tel" class="form-control" id="mobileNumber" required>
                        </div>
                    </div>
                    
                    <div class="form-row">                            
                        <div class="col-md-12 mb-3">
                            <label for="Address1" class="form-label">Address :</label><br>
                            <textarea name="Address" id="Address1" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </div>        
                    <button type="button" class="btn btn-primary " onclick="registerUser()">Register</button>
                </form>
            </div>

            <div class="tab-pane fade" id="wholesaler">
                <form id="registrationForm" class="" method="post">
                    <h4 class="text-center mb-4">Wholesaler Registration</h4>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-6 mb-3">
                            <label for="num" class="form-label">Age :</label><br>
                            <input type="number" class="form-control" id="num">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="mobileNumber" class="form-label">Mobile Number:</label>
                            <input type="tel" class="form-control" id="mobileNumber" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="Address1" class="form-label">Address :</label><br>
                            <textarea name="Address" id="Address1" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <!-- <div class="col-md-6 mb-3">
                      <label class="form-label">Gender:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                <label class="form-check-label mr-5" for="male">Male</label>

                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                <label class="form-check-label" for="female">Female</label>
                            </div>                            
                        </div> -->

                        <div class="form-group col-md-12">
                            <label for="inputState">Type of Wholesaler</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </div>        
                    <button type="button" class="btn btn-primary " onclick="registerUser()">Register</button>
                </form>
            </div>

        </div>
    </div>
</body>
</html>
