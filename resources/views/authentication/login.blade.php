@extends('layout')
@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
        <div class="col-md-12 text-center">
            <p> this login form for getting access token only so all you need is press login button for success login</p>
            <form action="/login" method="POST" class="form-horizontal">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </form>
        </div>


    </div>