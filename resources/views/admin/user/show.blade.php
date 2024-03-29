@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователь</h1>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Пользователь</h3>
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

                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $user->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Имя</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Фамилия</td>
                                            <td>{{ $user->surname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Отчество</td>
                                            <td>{{ $user->patronic }}</td>
                                        </tr>
                                        <tr>
                                            <td>Возраст</td>
                                            <td>{{ $user->age }}</td>
                                        </tr>
                                        <tr>
                                            <td>Адрес</td>
                                            <td>{{ $user->adress }}</td>
                                        </tr>
                                        <tr>
                                            <td>Пол</td>
                                            <td>{{ $user->genderTitle }}</td>
                                        </tr>
                                        <tr>
                                            <td>Почта</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Дата создания</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Дата изменения</td>
                                            <td>{{ $user->updated_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Действия</td>
                                            <td>
                                                <a class="me-2 text-success"
                                                    href="{{ route('admin.user.edit', $user) }}">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <form style="display:inline;" method="POST"
                                                    action="{{ route('admin.user.destroy', $user) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="text-danger fas fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection