<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Inventory Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #0d6efd;
            color: white;
            font-weight: bold;
        }
        .btn-submit {
            background-color: #0d6efd;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/home">Inventory Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="/insert">Insert</a></li>
            <li class="nav-item"><a class="nav-link" href="/update">Update</a></li>
            <li class="nav-item"><a class="nav-link" href="/delete">Delete</a></li>
            <li class="nav-item"><a class="nav-link" href="/show">Show</a></li>
            <li class="nav-item"><a class="nav-link btn btn-danger text-white px-3 ms-2" href="/logout">Logout</a></li>
        </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="card mx-auto col-md-8">
        <div class="card-header text-center">Add New Inventory Item</div>
        <div class="card-body">
            <form action="/insert" method="POST">
                <div class="mb-3">
                    <label for="item_id" class="form-label">Item ID</label>
                    <input type="number" class="form-control" id="item_id" name="item_id" placeholder="Enter item ID" required>
                </div>
                <div class="mb-3">
                    <label for="item_name" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Enter item name" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price per Unit</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter price" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Optional description"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-submit">Add Item</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
