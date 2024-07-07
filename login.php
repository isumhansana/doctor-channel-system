<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DocSpot Channeling Service</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="imgs/favicon_io/site.webmanifest">
        <style>
            body {
                background-color: #171717;
            }
            .center {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .button-container {
                display: flex;
                justify-content: center;
            }
            .btn-primary {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #007bff;
                color: #fff;
                height: 150px;
                width: 300px;
                font-size: x-large;
            }
            .btn-primary:hover {
                background-color: #0069d9;
            }
        </style>
    </head>
    <body>
        <div class="center">
            <div class="button-container">
                <a href="loginDoctor.php" class="btn btn-primary me-4">Login as a Doctor</a>
                <a href="loginPatient.php" class="btn btn-primary">Login as a Patient</a>
            </div>
        </div>
    </body>
</html>