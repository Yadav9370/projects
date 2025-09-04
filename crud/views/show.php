<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { margin-top: 50px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .card-header { background-color: #198754; color: white; font-weight: bold; }
        table { margin-top: 20px; }
    </style>
</head>
<body>
<div class="container">
    <div class="card mx-auto col-md-8">
        <div class="card-header text-center">Search Inventory by Item ID</div>
        <div class="card-body">
            <form method="GET" action="/show">
                <div class="input-group">
                    <input type="number" class="form-control" name="item_id" placeholder="Enter Item ID" required>
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>

            <?php if (isset($result) && count($result) > 0): ?>
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Item ID</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row): ?>
                            <tr>
                                <td><?= $row['item_id'] ?></td>
                                <td><?= $row['item_name'] ?></td>
                                <td><?= $row['quantity'] ?></td>
                                <td><?= $row['price'] ?></td>
                                <td><?= $row['description'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php elseif (isset($_GET['item_id'])): ?>
                <div class="alert alert-danger mt-3 text-center">No record found</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
