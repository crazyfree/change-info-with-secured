@extends('layout')
@section('content')
    {{var_dump($data); die()}}
    <div class="container">
        <div class="col-md-6">
            <form action="/profile" method="post">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName" value="{{data}}" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="exampleInputAddress">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputAddress" value="{{address}}" aria-describedby="AddressHelp" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPhone">Address</label>
                    <input type="number" class="form-control" name="phone" id="exampleInputPhone" placeholder="Enter your phone number">
                </div>
                <button type="submit" class="btn btn-primary">Change</button>

            </form>

        </div>
        <div class="col-md-6 text-right">
            <a href="/logout" class="badge badge-warning">Logout</a>
        </div>

    </div>

