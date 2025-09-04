<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Inventory Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { margin-top: 50px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .card-header { background-color: #dc3545; color: white; font-weight: bold; }
        .btn-submit { background-color: #dc3545; color: white; }
    </style>
</head>
<body>


<div class="container">
    <div class="card mx-auto col-md-6">
        <div class="card-header text-center">Delete Inventory Item</div>
        <div class="card-body">
            <form action="/delete" method="POST">
                <div class="mb-3">
                    <label for="item_id" class="form-label">Item ID</label>
                    <input type="number" class="form-control" id="item_id" name="item_id" placeholder="Enter Item ID to delete" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-submit">Delete Item</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
