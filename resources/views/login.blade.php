@extends("master")
@section("content")
    <div class="container size">
    <form action="login" method="post">
        @csrf
        <div class="row mt-3 mb-3 offset-4">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="email" name="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3 offset-4">
            <label for="inputPassword3"  class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="password" name="password" class="form-control" id="inputPassword3">
            </div>
        </div>

        <button type="submit" class="btn btn-primary offset-4">Sign in</button>
    </form>
    </div>
@endsection
