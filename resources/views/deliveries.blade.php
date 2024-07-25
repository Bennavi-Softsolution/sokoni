<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/signup-deliveries.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="delivery-page">
    <div class="delivery">
        <div class="title">
            <p>Due Delivery</p>
            <i class="ri-arrow-up-s-fill" onclick="display1()" ></i>
            <!-- <i class="fa-solid fa-caret-down  icon-hidden" id="icon"></i> -->
        </div>
        <div class="data" id="display1">
            <table class="table" id="table">
                <thead class="table-head" id="tablehead">
                    <tr>
                        <th scope="col">Item ID</th>
                        <th scope="col">Item</th>
                        <th scope="col">Client ID</th>
                        <th scope="col">Location</th>
                        <th scope="col">Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">001</th>
                        <td>Cuttlery</td>
                        <td>CL001</td>
                        <td>Nairobi</td>
                        <td>+254111111</td>
                    </tr>
                    <tr>
                        <th scope="row">002</th>
                        <td>Shoes</td>
                        <td>CL002</td>
                        <td>Kisumu</td>
                        <td>+254112222</td>
                    </tr>
                    <tr>
                        <th scope="row">003</th>
                        <td> Bag</td>
                        <td>CL003</td>
                        <td>Nakuru</td>
                        <td>+254113333</td>
                    </tr>
                    <tr>
                        <th scope="row">004</th>
                        <td> Groceries</td>
                        <td>CL004</td>
                        <td>Machakos</td>
                        <td>+254114443</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="title title2">
            <p>Pending Delivery</p>
            <i class="ri-arrow-up-s-fill" onclick="display2()"></i>
            <!-- <i class="fa-solid fa-caret-down  icon-hidden" id="icon"></i> -->
        </div>
        <div class="data" id="display2">
            <table class="table" id="table">
                <thead class="table-head" id="tablehead">
                    <tr>
                        <th scope="col">Item ID</th>
                        <th scope="col">Item</th>
                        <th scope="col">Client ID</th>
                        <th scope="col">Location</th>
                        <th scope="col">Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">001</th>
                        <td>Eggs</td>
                        <td>CL001</td>
                        <td>Nairobi</td>
                        <td>+254111111</td>
                    </tr>
                    <tr>
                        <th scope="row">002</th>
                        <td>Keys</td>
                        <td>CL002</td>
                        <td>Kisumu</td>
                        <td>+254112222</td>
                    </tr>
                    <tr>
                        <th scope="row">003</th>
                        <td> Books</td>
                        <td>CL003</td>
                        <td>Nakuru</td>
                        <td>+254113333</td>
                    </tr>
                    <tr>
                        <th scope="row">004</th>
                        <td> Phone</td>
                        <td>CL004</td>
                        <td>Machakos</td>
                        <td>+254114443</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <script>
        function display1() {
            document.getElementById("display1").style.display = "block";
            // document.getElementById("icon").style.display = "block";
        }

        function display2() {
            document.getElementById("display2").style.display = "block";
            // document.getElementById("icon").style.display = "block";
        }
    </script>


</body>

</html>