<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Page Layout</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 200px;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
            overflow-y: auto;
            /* Enable vertical scrolling */
        }

        #content {
            margin-left: 200px;
            /* Adjust based on the width of the sidebar */
            padding: 20px;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-brand {
            color: #fff;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .main-content {
            padding: 20px;
            background-color: #e9ecef;
            /* Different color for main content */
            height: 1500px;
            /* Added height for scroll demonstration */
        }
    </style>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>

    <div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Your Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Sidebar -->
        <div id="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="result.form">Item 1</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-info" class="nav-link" href="http://127.0.0.1:8000/result/student-form">Add Qualification</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div id="content" class="main-content">
            <div class="container">
                <!-- Display Data in Table -->
                <h2 class="mt-4">Student Information Table</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>District Name</th>
                            <th>Institute</th>
                            <th>Passing Year</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data with a foreach loop -->
                        @foreach ($result as $result)
                            <tr>
                                <td>{{ $result->s_id }}</td>
                                <td>{{ $result->d_name }}</td>
                                <td>{{ $result->institute }}</td>
                                <td>{{ $result->p_year }}</td>
                                <td>
                                    <!-- Add your action buttons, such as delete and edit, here -->
                                    <a href="{{ route('edit',$result->id) }}"><button class="btn btn-danger">Edit</button></a>
                                </td>
                                <td>

                                    <form action="{{ route('delete', $result->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-dark">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
