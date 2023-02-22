<?php 
    $url = "https://newsapi.org/v2/everything?q=Tuberculosis&sortBy=relevancy&apiKey=393360438ee04a978ca214dfd34392c6";
    $fga = file_get_contents($url);
    $json = json_decode($fga, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Berita</title>
</head>
<body>
    
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="mt-5 mb-5">
                <a href="index.php" class="btn btn-primary">Back to Home</a>
            </div>

            <h1>
                Berita Lainnya
            </h1>

            <div class="mt-5 mb-5">
                <div class="row">
                    <?php foreach ($json['articles'] as $view){ ?>
                        <div class="col-sm-3 mb-3">
                            <a href="<?= $view['url']?>" style="text-decoration: none;color: black;" target="kanan">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mt-3 mb-3">
                                            <img src="<?= $view['urlToImage']?>" width="100%">
                                        </div>
                                        <?= $view['title'];?>
                                        <br><br>
                                        <div style="opacity: 0.5;">
                                            <?= $view['description'];?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>  



        </div>
    </div>



</body>
</html>