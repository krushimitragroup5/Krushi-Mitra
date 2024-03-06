<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Krushi Mitra</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/social_post.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</head>

<body>
    <!-- Navbar  -->
    <div class="container-fluid-lg m-2">
        <h1 class="heading">KRUSHI MITRA</h1>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navabr-brand ">
                        <img src="images/logo.png" class="d-inline-block align-top img" alt="Logo not found">
                    </a>

                    <button class="navbar-toggler bg-white mx-3" data-toggle="collapse" data-target="#mynavbar">
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
    <main>
        <div class="container">
            
            <form>
                <h2 class="mt-5 mb-4">Crop Registration Form</h2>
              <div class="form-group">
                <label for="cropName">Crop Name</label>
                <input type="text" class="form-control" id="cropName" placeholder="Enter crop name">
              </div>
              <div class="form-group">
                <label for="cropQuantity">Crop Quantity</label>
                <input type="number" class="form-control" id="cropQuantity" placeholder="Enter crop quantity">
              </div>
              <div class="form-group">
                <label for="cropImage">Crop Image</label>
                <input type="file" class="form-control-file" id="cropImage">
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" placeholder="Enter location">
              </div>
              <div class="form-group ">
                <label for="img"></label>
                <img class="img img-fluid" src="images/socialimg/banana1.jpg" width="300" height="250">
              </div>
             
              <button type="submit" class="btn btn-primary">Post</button>
            </form>
          </div>
    </main>
    <footer>

    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const fileInput = document.getElementById("cropImage");
            const imgElement = document.querySelector(".form-group .img");
    
            fileInput.addEventListener("change", function () {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        imgElement.src = reader.result;
                    };
                }
            });
        });
    </script>
    
</body>

</html>