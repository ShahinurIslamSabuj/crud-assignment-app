<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    </style>
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
                <li class="nav-item"><br><br>
                    <a class="btn btn-info" class="nav-link" href="http://127.0.0.1:8000/result">Educational Qualification</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div id="content" class="main-content">
            <div class="container">
                <h2 class="mb-4">Student Information Form</h2>

                <form action="{{ route('insert.student') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="s_id">Student ID:</label>
                                <input type="text" class="form-control" id="s_id" name="s_id" required>
                            </div>

                            <div class="form-group">
                                <label for="d_name">District Name:</label>
                                <input type="text" class="form-control" id="d_name" name="d_name" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="institute">Institute:</label>
                                <input type="text" class="form-control" id="institute" name="institute" required>
                            </div>

                            <div class="form-group">
                                <label for="p_year">Passing Year:</label>
                                <input type="text" class="form-control" id="p_year" name="p_year" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>



<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
