<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require 'includes/header.php';
?>    
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/slideshow/slide01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/slideshow/slide03.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    <main class="container-fluid mt-3">
    <h3 class="text-center text-uppercase mb-3 text-primary">TOP bài hát yêu thích</h3>
        <div class="row">
        <?php
        // Bước 01: Kết nối tới DB Server
        require 'includes/database-connection.php';
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM baiviet ";
        $result = mysqli_query($conn, $sql);

        // Bước 03: Xử lý kết quả trả về
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
              <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <img src="images/songs/cayvagio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="detail.php?id=<?= $row['ma_bviet'] ?>" class="text-decoration-none">
                            <?= $row['tieude']?></a>
                        </h5>
                    </div>
                </div>
            </div>  
        <?php
            }
        }
        ?>
        </div>
    </main>
    <?php require 'includes/footer.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>