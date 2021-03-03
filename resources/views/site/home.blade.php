@extends('adminlte::page')

@section('title', 'Principal')

@section('content_header')
    <h1></h1>
@stop

@section('content')
        <div class="col-md-6 offset-md-3 mt-5">
            <!-- Application buttons -->
            <div class="card text-center">
                <div class="card-header">
                    <h3 class="card-title">CADASTROS</h3>
                </div>
                <div class="card-body">


                    <a class="btn btn-app bg-success">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> Users
                    </a>
                    <a class="btn btn-app bg-secondary">
                        <span class="badge bg-success">300</span>
                        <i class="fas fa-barcode"></i> Products
                    </a>
                    <a class="btn btn-app bg-danger">
                        <span class="badge bg-teal">67</span>
                        <i class="fas fa-inbox"></i> Orders
                    </a>
                    <a class="btn btn-app bg-warning">
                        <span class="badge bg-info">12</span>
                        <i class="fas fa-envelope"></i> Inbox
                    </a>
                    <a class="btn btn-app bg-info">
                        <span class="badge bg-danger">531</span>
                        <i class="fas fa-heart"></i> Likes
                    </a>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script>
            console.log('Oi!');

        </script>
    @stop
