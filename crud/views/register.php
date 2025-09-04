<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #0d6efd;
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-register {
            background-color: #0d6efd;
            color: white;
            border-radius: 8px;
            width: 100%;
        }
        .btn-register:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card col-md-4 col-sm-8 col-10 mx-auto">
        <div class="card-header">Register</div>
        <div class="card-body">
            <form method="post" action="/register">
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-register">Register</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
