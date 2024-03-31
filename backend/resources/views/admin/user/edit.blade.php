@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
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

                        <form action="{{ route('admin.user.update', $user) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <input name="name" type="text" value="{{ $user->name ?? old('name') }}" class="form-control"
                                    placeholder="Имя">
                            </div>

                            <div class="form-group">
                                <input name="surname" type="text" value="{{ $user->surname ?? old('surname') }}" class="form-control"
                                    placeholder="Фамилия">
                            </div>

                            <div class="form-group">
                                <input name="patronic" type="text" value="{{ $user->patronic ?? old('patronic') }}" class="form-control"
                                    placeholder="Отчество">
                            </div>

                            <div class="form-group">
                                <input name="age" type="integer" value="{{ $user->age ?? old('age') }}" class="form-control"
                                    placeholder="Возраст">
                            </div>

                            <div class="form-group">
                                <input name="adress" type="text" value="{{ $user->adress ?? old('adress') }}" class="form-control"
                                    placeholder="Адрес">
                            </div>

                            <div class="form-group">
                                <select name="gender" class="custom-select" id="exampleSelectBorder">
                                    <option disabled selected>Пол</option>
                                    <option {{ $user->gender == 1 || old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                                    <option {{ $user->gender == 2 || old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </form>

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
