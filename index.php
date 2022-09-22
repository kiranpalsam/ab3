<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie DataBase</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>


</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Any State</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="./books/home.php">Books</a></li>
            <li><a href="https://demoab3.auth.us-east-1.amazoncognito.com/login?response_type=token&client_id=2t166qkdi1jl8a5sedr7s7gsrk&redirect_uri=https://demoab3.rohan.aws-info.net/movies/home.php">Movies</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <?php
    $curl_handle=curl_init();
    curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/local-hostname');
    $hostname = curl_exec($curl_handle);
    print "Server = $hostname"  . "<br>";
    echo date("l jS \of F Y h:i:s A") . "<br>";    
    ?>
    
    <div class="well well-lg">
    Health and Human Services (HHS) agencies across all levels of government are leveraging AWS for initiatives ranging from the optimization of everyday administrative tasks to delivering a more personalized digital experience for citizens. Whether your focus is on agency modernization, helping to build healthier communities, or transforming payment and care delivery models, AWS provides cost-effective, […]
    </div>

    <div class="row">
        <div class="col-md-6">

            <a href="./books/home.php">
                <img src="/images/healthforce.png" alt="Health Services" width="450" height="200">
                <div class="caption">
                    <p>Books</p>
                </div>
            </a>

        </div>
        <div class="col-md-6">

            <a href="https://demoab3.auth.us-east-1.amazoncognito.com/login?response_type=token&client_id=2t166qkdi1jl8a5sedr7s7gsrk&redirect_uri=https://ab3demo.kiran.aws-info.net/movies/home.php">
                <img src="/images/public_services.jpg" alt="Public Services" width="300" height="200">
                <div class="caption">
                    <p>Movies</p>
                </div>
            </a>

        </div>
        
        <div class="col-md-6">

            <a href="./books/book.pdf">
                <div class="caption">
                    <p>Show Book from Web Server</p>
                </div>
            </a>

        </div>
        
        <div class="col-md-6">

            <a href="/images/book.pdf">
                <div class="caption">
                    <p>Show Book from CDN</p>
                </div>
            </a>

        </div>
        
    </div>
</div>

</body>
</html>




