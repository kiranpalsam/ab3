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
            <li><a href="./books/home.php">Health Services</a></li>
            <li><a href="./movies/home.php">Public Services</a></li>
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
    print "Server = $hostname"
    ?>
    
    <div class="well well-lg">
    Health and Human Services (HHS) agencies across all levels of government are leveraging AWS for initiatives ranging from the optimization of everyday administrative tasks to delivering a more personalized digital experience for citizens. Whether your focus is on agency modernization, helping to build healthier communities, or transforming payment and care delivery models, AWS provides cost-effective, […]
    </div>

    <div class="row">
        <div class="col-md-6">

            <a href="./books/home.php">
                <img src="/images/healthforce.png" alt="Health Services" width="450" height="200">
                <div class="caption">
                    <p>Health Services</p>
                </div>
            </a>

        </div>
        <div class="col-md-6">

            <a href="./movies/home.php">
                <img src="/images/public_services.jpg" alt="Public Services" width="300" height="200">
                <div class="caption">
                    <p>Public Services</p>
                </div>
            </a>

        </div>
    </div>
</div>

</body>
</html>




