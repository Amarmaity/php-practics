<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Scrollable Table</title>
    <style>
        .table-container {
            max-height: 400px; /* Set desired height */
            overflow-y: auto; /* Enable vertical scrolling */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Data Table</h2>
    <div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Pin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <!-- Add your data rows here -->
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->first_name}}</td>
                    <td>{{$item->midle_name}}</td>
                    <td>{{$item->last_name}}</td>
                    <td>{{$item->phone_number}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->adress}}</td>
                    <td>{{$item->pin}}</td>
                </tr>
               @endforeach
                <!-- Repeat as needed -->
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
