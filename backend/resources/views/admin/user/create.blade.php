@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить</h1>
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

                        <form action="{{ route('admin.user.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input name="name" type="text" value="{{ old('name') }}" class="form-control"
                                    placeholder="Имя">
                            </div>

                            <div class="form-group">
                                <input name="surname" type="text" value="{{ old('surname') }}" class="form-control"
                                    placeholder="Фамилия">
                            </div>

                            <div class="form-group">
                                <input name="patronic" type="text" value="{{ old('patronic') }}" class="form-control"
                                    placeholder="Отчество">
                            </div>

                            <div class="form-group">
                                <input name="age" type="integer" value="{{ old('age') }}" class="form-control"
                                    placeholder="Возраст">
                            </div>

                            <div class="form-group">
                                <input name="adress" type="text" value="{{ old('adress') }}" class="form-control"
                                    placeholder="Адрес">
                            </div>

                            <div class="form-group">
                                <select name="gender" class="custom-select" id="exampleSelectBorder">
                                    <option disabled selected>Пол</option>
                                    <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                                    <option {{ old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input name="email" type="text" value="{{ old('email') }}" class="form-control"
                                    placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input name="password" type="password" value="{{ old('password') }}" class="form-control"
                                    placeholder="Пароль">
                            </div>

                            <div class="form-group">
                                <input name="password_confirmation" type="password"
                                    value="{{ old('password_confirmation') }}" class="form-control"
                                    placeholder="Подтверждение пароля">
                            </div>

                            <button type="submit" class="btn btn-primary">Создать</button>

                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
