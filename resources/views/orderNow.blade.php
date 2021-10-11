@extends("master")
@section("content")
    <div class="container mt-3">
        <table class="table table-striped">
            <tbody>

            <tr>
                <th scope="row">Amount</th>
                <td>$ {{$total}}</td>

            </tr>
            <tr>
                <th scope="row">Tax</th>
                <td>$ 0</td>

            </tr>
            <tr>
                <th scope="row">Delivery</th>
                <td>$ 10</td>

            </tr>
            <tr>
                <th scope="row">Total Amount</th>
                <td>$ {{$total+10}}</td>

            </tr>
            </tbody>
        </table>
        <form action="/orderPlace" method="post">
            @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Address</label>
            <textarea type="text" class="form-control" name="address" placeholder="Enter your Address"></textarea>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Payment Method</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" id="gridRadios1" value="Cash" checked>
                <label class="form-check-label" for="gridRadios1">
                   Cash On Delivery
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" id="gridRadios2" value="VisaCard">
                <label class="form-check-label" for="gridRadios2">
                   VisaCard
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="payment_method" id="gridRadios3" value="PayPal" >
                <label class="form-check-label" for="gridRadios3">
                   PayPal
                </label>
            </div>
        </div>
        <div class="text-start mt-3">
            <button type="submit" class="btn btn-success">Order Now</button>
        </div>
        </form>
    </div>
@endsection
