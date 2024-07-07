<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    .btn-primary {
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
    <div>
        <a href="registerDoctor.php" class="btn btn-primary me-2">Register as a Doctor</a>
        <a href="registerPatient.php" class="btn btn-primary">Register as a Patient</a>
    </div>
</div>
</body>
</html>