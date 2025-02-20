@extends('layout.navigation')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>

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

</head>

<body>

    <!-- ======= Header ======= -->

    <!-- ======= Sidebar ======= -->

    @section('main-section')
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section dashboard">
                <div class="row">

                    <!-- Left side columns -->
                    <div class="col-lg-12">
                        <div class="row">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop" style="width: 200px;">
                                Add employee
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">New Employee</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.store') }}" method="POST">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="name" class="form-label">Enter Your Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Employee Name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="form-label">Enter Your Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Employee email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="password" class="form-label">Enter password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Employee Password">
                                                </div>

                                                <div class="form-group">
                                                    <label for="role" class="form-label">Enter role</label>
                                                    <input type="text" name="role" class="form-control"
                                                        placeholder="role">
                                                </div>

                                                <div class="form-group">
                                                    <label for="phone_number" class="form-label">Enter Your Phone
                                                        Number</label>
                                                    <input type="tel" name="phone_number" class="form-control"
                                                        placeholder="Employee Phone">
                                                </div>

                                                <div class="form-group">
                                                    <label for="address" class="form-label">Enter Your address</label>
                                                    <input type="text" name="address" class="form-control"
                                                        placeholder="Employee address">
                                                </div>

                                                <div class="form-check">
                                                    <label>Gender</label>
                                                    <input type="radio" id="Male" name="gender" value="Male">
                                                    <label for="Male">Male</label>
                                                    <input type="radio" id="Female" name="gender" value="Female">
                                                    <label for="Female">Female</label>
                                                    <input type="radio" id="Other" name="gender" value="Other">
                                                    <label for="Other">Other</label>
                                                </div>

                                                <div class="form-group">
                                                    <label for="dob">Birthday:</label>
                                                    <input type="date" id="dob" name="dob">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $('#exampleModal').on('show.bs.modal', event => {
                                    var button = $(event.relatedTarget);
                                    var modal = $(this);
                                    // Use above variables to manipulate the DOM

                                });
                            </script>

                            <div class="container mt-5">
                                <h2 class="mb-4">Employee Details</h2>
                                <table id="show" class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>status</th>
                                            <th>Address</th>
                                            <th>phone number</th>
                                            <th>Gender</th>
                                            <th>Dob</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Left side columns -->

                </div>
            </section>

        </main><!-- End #main -->
    @endsection

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="//cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script>
        $(document).ready(function() {
            $('#show').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('view') }}",
                    dataType: 'json'
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'role',
                        name: 'role'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'phone_number',
                        name: 'phone_number'
                    },
                    {
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'dob',
                        name: 'dob'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>

    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).on('click', '#servideletebtn', function(e) {
            e.preventDefault();
            var deleteUrl = $(this).attr('href'); // Get the href attribute for the delete action

            // Showing sweet alert for confirmation
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    // if user confirm to delete redirect to this url
                    window.location.href = deleteUrl;
                } else {
                    // if user cancel showing there data is safe
                    swal("Your data is safe!");
                }
            });
        });
    </script>



</body>

</html>
