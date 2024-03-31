@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Цвета</h1>
                    </div><!-- /.col -->
                    {{-- <div class="col-sm-6"> --}}
                    {{-- <ol class="breadcrumb float-sm-right"> --}}
                    {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                    {{-- <li class="breadcrumb-item active">Starter Page</li> --}}
                    {{-- <li class="breadcrumb-item active">Home</li> --}}
                    {{-- </ol> --}}
                    {{-- </div><!-- /.col --> --}}
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mb-3">
                        <!-- Write anything .... -->
                        <a href="{{ route('admin.color.create') }}" class="btn btn-block btn-primary">Создать новый
                            цвет</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Цвета</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th>Цвет</th>
                                            <th>Дата создания</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($colors as $color)
                                            <tr>
                                                <td>{{ $color->id }}</td>
                                                <td>{{ $color->title }}</td>
                                                <td><i class="fas fa-square"  style="color:{{ $color->title }}"></i></td>
                                                <td>{{ $color->created_at }}</td>
                                                <td>
                                                    <a class="mr-1"
                                                        href="{{ route('admin.color.show', $color) }}">
                                                        <i class="fas fa-eye"></i></a>
                                                    <a class="mr-1 text-success"
                                                        href="{{ route('admin.color.edit', $color) }}">
                                                        <i class="fas fa-pen"></i></a>
                                                    <form style="display:inline;" method="POST"
                                                        action="{{ route('admin.color.destroy', $color) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="border-0 bg-transparent">
                                                            <i class="text-danger fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection