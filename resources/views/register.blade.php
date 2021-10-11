@extends("master")
@section("content")
    <div class="container custom-login">
        <form action="register" method="post">
            @csrf
            <div class="row mt-3 mb-3 justify-content-center">
                <div class="col-sm-2 col-md-2">
                    <label for="inputEmail3" class="col-form-label">Name</label>
                </div>
                <div class="col-sm-5 col-md-4">
                    <input type="text" name="username" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mt-3 mb-3 justify-content-center">
                <div class="col-sm-2 col-md-2">
                    <label for="inputEmail3" class="col-form-label">Email</label>
                </div>
                <div class="col-sm-5 col-md-4">
                    <input type="email" name="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <label for="inputPassword3"  class="col-sm-2 col-md-2 col-form-label">Password</label>
                <div class="col-sm-5 col-md-4">
                    <input type="password" name="password" class="form-control" id="inputPassword3">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
@endsection
