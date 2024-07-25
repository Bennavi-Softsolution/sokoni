<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Orders</h1>
        <input type="text" placeholder="Search...">
        <table>
            <thead>
                <tr>
                    <th>Order id</th>
                    <th>Product name</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $orders = [
                    ["id" => "#001", "product" => "Short", "customer" => "Fred", "date" => "7/1/2024", "price" => "500Ksh", "address" => "Eldoret", "status" => "Pending"],
                    ["id" => "#001", "product" => "Airpods", "customer" => "Alfred", "date" => "7/1/2024", "price" => "900Ksh", "address" => "Nairobi", "status" => "Pending"],
                    ["id" => "#001", "product" => "T-shirt", "customer" => "Arnaud", "date" => "7/1/2024", "price" => "750Ksh", "address" => "Kisumu", "status" => "Pending"],
                    ["id" => "#001", "product" => "Cap", "customer" => "Alain", "date" => "7/1/2024", "price" => "500Ksh", "address" => "Runda", "status" => "Pending"],
                    ["id" => "#001", "product" => "Jeans", "customer" => "Tresor", "date" => "7/1/2024", "price" => "600Ksh", "address" => "Thika", "status" => "Pending"],
                    ["id" => "#001", "product" => "Airbuds", "customer" => "Isaac", "date" => "7/1/2024", "price" => "550Ksh", "address" => "Juja", "status" => "Pending"],
                    ["id" => "#001", "product" => "Perfume", "customer" => "Kerubo", "date" => "7/1/2024", "price" => "520Ksh", "address" => "Kisi", "status" => "Pending"],
                ];

                foreach ($orders as $order) {
                    echo "<tr>";
                    echo "<td>{$order['id']}</td>";
                    echo "<td>{$order['product']}</td>";
                    echo "<td>{$order['customer']}</td>";
                    echo "<td>{$order['date']}</td>";
                    echo "<td>{$order['price']}</td>";
                    echo "<td>{$order['address']}</td>";
                    echo "<td class='status-pending'>{$order['status']}</td>";
                    echo "<td><a href='/order-details'>View Details</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="pagination">
            <p>1 out of 20 items <a href="#">view all</a></p>
        </div>
    </div>
</body>
</html>
