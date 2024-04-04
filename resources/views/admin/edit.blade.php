<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT EMPLOYEE</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>EDIT EMPLOYEE</h2>
        <form action="{{ route('update', ['id' => $data['user']->id]) }}" method="POST">

            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ $data['user']->name }}">
            </div>
            <div class="form-group mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="{{ $data['user']->email }}">
            </div>
            <div class="form-group mt-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password"
                    value="{{ $data['user']->password }}">
            </div>
            <div class="form-group mt-3 mt-3">
                <label for="role">Role:</label>
                <input type="text" class="form-control" id="role" name="role"
                    value="{{ $data['user']->role }}">
            </div>
            <div class="form-group mt-3">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number"
                    value="{{ $data['userdet']->phone_number }}">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group mt-3">
                        <label for="gender">Gender:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male"
                                {{ $data['userdet']->gender === 'Male' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female"
                                {{ $data['userdet']->gender === 'Female' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="Other"
                                {{ $data['userdet']->gender === 'Other' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>

                </div>


                <div class="col">
                    <div class="form-group mt-3">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" id="dob" class="form-control"
                            value="{{ $data['userdet']->dob }}">
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" cols="30" rows="5">{{ $data['userdet']->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
