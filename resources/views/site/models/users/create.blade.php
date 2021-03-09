@extends('adminlte::page')

@section('title', 'Principal')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Formulários</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Principal</a></li>
                        <li class="breadcrumb-item active">formulários</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@stop

@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Cadastro Geral</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">


            <form class="form-horizontal">



            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Oi!');

    </script>
@stop
