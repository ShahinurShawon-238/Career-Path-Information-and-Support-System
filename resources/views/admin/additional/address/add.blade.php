@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Create Address</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.address')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address"
                        required>
                </div>
                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input type="text" class="form-control" id="number" placeholder="Enter Phone Number" name="number"
                        required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email"
                        required>
                </div>
                <div class="form-group">
                    <label for="map_link">Map Link(Map Embedded Link)</label>
                    <textarea class="form-control" name="map_link" id="map_link" rows="2" required></textarea>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
