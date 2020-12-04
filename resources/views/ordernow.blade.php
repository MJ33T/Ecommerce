@extends('master')
@section('content')
    <div class="custom-product">
        <h1 style="margin-left:365px;">Order Now</h1>
        <div class="col-sm-6">
            <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>{{$total}} Taka</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>0 Taka</td>
                  </tr>
                  <tr>
                    <td>Delivary Charge</td>
                    <td>100 Taka</td>
                  </tr>
                  <tr>
                    <td>Total Ammount</td>
                    <td>{{$total+100}} Taka</td>
                  </tr>
                </tbody>
              </table>

              <form class="custom-form" action="order_place" method="POST">
                @csrf
                <div class="form-group">
                  <textarea class="form-control" name="address" placeholder="Enter Your Address"></textarea>
                </div>
                <div class="form-group">
                  <label for="">Payment Method</label>
                  <p><input value="Online Payment" type="radio" name="payment"><span> Online Payment</span></p>
                  <p><input value="EMI Payment" type="radio" name="payment"><span> EMI Payment</span></p>
                  <p><input value="Payment on Delivary" type="radio" name="payment"><span> Payment on Delivary</span></p>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
        </div>    
    </div>
@endsection
