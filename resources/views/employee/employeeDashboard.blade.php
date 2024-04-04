@extends('layout.navigation')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Employee Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->

    <!-- ======= Sidebar ======= -->

    @section('main-section')
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>employee Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <button type="button" class="btn btn-info"><a href="leave">Leave</a></button>

            <section class="section dashboard">
                <div class="row">

                    <!-- Left side columns -->
                    <div class="col-lg-12">
                        <div class="row">

                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-4">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Monthly <span>| leave</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-cart"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ Auth::user()->userleave->monthly }}</h6>
                                                <span class="text-success small pt-1 fw-bold"></span> <span
                                                    class="text-muted small pt-2 ps-1">taken</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->

                            <!-- Revenue Card -->
                            <div class="col-xxl-4 col-md-4">
                                <div class="card info-card revenue-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Yearly <span>|Leaves</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-currency-dollar"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ Auth::user()->userleave->yearly }}</h6>
                                                <span class="text-success small pt-1 fw-bold"></span> <span
                                                    class="text-muted small pt-2 ps-1">taken</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Revenue Card -->

                            <!-- Customers Card -->
                            <div class="col-xxl-4 col-xl-4">

                                <div class="card info-card customers-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Pending <span>|Leaves</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ Auth::user()->userleave->pending }}</h6>
                                                <span class="text-danger small pt-1 fw-bold"></span> <span
                                                    class="text-muted small pt-2 ps-1">Remainning</span>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><!-- End Customers Card -->


                            <!-- Recent Sales -->
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="text-center card-title">Your Information</h5>
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th>Id</th>
                                                    <td>{{ Auth::user()->id }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Name</th>
                                                    <td>{{ Auth::user()->name }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{ Auth::user()->email }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Role</th>
                                                    <td>{{ Auth::user()->role }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Address</th>
                                                    <td>{{ Auth::user()->user->address }}</td>
                                                </tr>


                                                <tr>
                                                    <th>phone number</th>
                                                    <td>{{ Auth::user()->user->phone_number }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Gender</th>
                                                    <td>{{ Auth::user()->user->gender }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Dob</th>
                                                    <td>{{ Auth::user()->user->dob }}</td>
                                                </tr>
                                            </thead>
                                        </table>




                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary ms-5" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Edit info
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Personal
                                                            Information</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('update', ['id' => Auth::user()->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="form-group mt-3">
                                                                <label for="name">Name:</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" value="{{ Auth::user()->name }}">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="email">Email:</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    name="email" value="{{ Auth::user()->email }}">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="password">Password:</label>
                                                                <input type="password" class="form-control"
                                                                    id="password" name="password"
                                                                    value="{{ Auth::user()->password }}">
                                                            </div>
                                                            <div class="form-group mt-3 mt-3">
                                                                <label for="role">Role:</label>
                                                                <input type="text" class="form-control" id="role"
                                                                    name="role" value="{{ Auth::user()->role }}"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="phone_number">Phone Number:</label>
                                                                <input type="tel" class="form-control"
                                                                    id="phone_number" name="phone_number"
                                                                    value="{{ Auth::user()->user->phone_number }}">
                                                            </div>


                                                            <div class="col">
                                                                <div class="form-group mt-3">
                                                                    <label for="gender">Gender:</label><br>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" id="male" value="Male"
                                                                            {{ Auth::user()->user->gender === 'Male' ? 'checked' : '' }}
                                                                            required>
                                                                        <label class="form-check-label"
                                                                            for="male">Male</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" id="female" value="Female"
                                                                            {{ Auth::user()->user->gender === 'Female' ? 'checked' : '' }}
                                                                            required>
                                                                        <label class="form-check-label"
                                                                            for="female">Female</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="gender" id="other" value="Other"
                                                                            {{ Auth::user()->user->gender === 'Other' ? 'checked' : '' }}
                                                                            required>
                                                                        <label class="form-check-label"
                                                                            for="other">Other</label>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="col">
                                                                <div class="form-group mt-3">
                                                                    <label for="dob">Date of Birth:</label>
                                                                    <input type="date" name="dob" id="dob"
                                                                        class="form-control"
                                                                        value="{{ Auth::user()->user->dob }}">
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="address">Address:</label>
                                                        <textarea class="form-control" id="address" name="address" cols="20" rows="2">{{ Auth::user()->user->address }}</textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary"
                                                        style="width: 100px;margin:7px auto;">Submit</button>
                                                    </form>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of model -->
                                    </div>


                                </div>
                            </div><!-- End Recent Sales -->




                        </div>
                    </div><!-- End Left side columns -->



                    {{-- <script>
                        setInterval(function() {
                            const d = new Date();

                            if (d.getHours() === 11 && d.getMinutes() === 48) {
                                // alert("It's working!");
                                window.location.href = "/leave";
                            } else {
                                alert("Oops!");
                            }
                        }, 10000); // Check every second
                    </script> --}}

                </div>
            </section>

        </main><!-- End #main -->
    @endsection

    <!-- ======= Footer ======= -->



    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



    <script src="assets/js/jquery-3.7.1.js"></script>
</body>

</html>
