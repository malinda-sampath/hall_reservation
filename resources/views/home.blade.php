<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hall Reservation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">HALL RESERVATION</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- sign in -->
        @extends('layouts.app')

        @section('content')
                        <div>
                            @if (session('status'))
                                <div role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        
        @endsection
        <!-- sign in -->

        <!-- table view start -->
        <div class="container">
            <h1>Table1 Data</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hall ID</th>
                        <th>Level</th>
                        <th>Subject ID</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Visible</th>
                        <th>Message</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->hall_id }}</td>
                        <td>{{ $row->level }}</td>
                        <td>{{ $row->subject_id }}</td>
                        <td>{{ $row->date }}</td>
                        <td>{{ $row->time }}</td>
                        <td>{{ $row->is_visible }}</td>
                        <td>{{ $row->message }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>{{ $row->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- table view start -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->

        <!-- Data Form start-->
        <div class="container-form">
            
            <form>
                <h3 class="heading-data-entry-form">Data Entry Form</h3><p>   
                
                <label for="hall_id" class="hall_id">Hall ID:</label>
                <input type="text" id="hall_id" name="hall_id" required>
                
                <label for="level" class="level">Level:</label>
                    <select id="level" class="level" name="level" required>
                            <option value="">Select Level</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                    </select>       
               
                <label for="subject_id" class="subid">Subject ID:</label>
                <input type="text" class="subid"id="subject_id" name="subject_id"><br>
                
                <label for="date">Date:</label>
                <input type="date" class="date" id="date" name="date" required>
        
                <label for="startTime" class="sTime">Start Time:</label>
                <input type="time" class="sTime" id="sTime" name="sTime" required>

                <label for="endTime" class="eTime">End Time:</label>
                <input type="time" class="eTime" id="eTime" name="eTime" required>
        
                <label for="visibility" class="visibility">Visibility:</label>
                <input type="checkbox" class="visibility" id="visibility" name="visibility"><p>

                <label for="lecturer_name">Lecturer Name:</label>
                <input type="text" class="lecturer_name" id="lecturer_name"><br>
        
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" cols="50"></textarea><p>
        
                <!-- Buttons -->
                <button type="button">Clear</button>
                <button type="button">Update</button>
                <button type="button">Delete</button>
                <button type="add">Add</button>
            </form>    
        </div>
        <!--Data Form End -->
        
        <!-- Footer Start -->
        <div class="footer bg-dark text-white-50 pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">DCS - University of Ruhuna</a>, All Right Reserved. 
                        </div>
                        <div class="col-md-6 text-center text-md-end footer-social">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
