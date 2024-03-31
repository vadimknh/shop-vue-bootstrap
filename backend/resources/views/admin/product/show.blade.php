@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Продукт</h1>
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
                                <h3 class="card-title">Продукт</h3>
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
                                            <td>{{ $product->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Наименование</td>
                                            <td>{{ $product->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Описание</td>
                                            <td>{{ $product->description }}</td>
                                        </tr>
                                        <tr>
                                            <td>Контент</td>
                                            <td>{{ $product->content }}</td>
                                        </tr>
                                        <tr>
                                            <td>Количество на складе</td>
                                            <td>{{ $product->quantity }}</td>
                                        </tr>
                                        <tr>
                                            <td>Цена</td>
                                            <td>{{ $product->price }}</td>
                                        </tr>
                                        <tr>
                                            <td>Превью</td>
                                            <td><img src="{{ asset('storage') . '/' . $product->preview_image }}" width="200px" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>Категория</td>
                                            <td>{{ $product->category->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Теги</td>
                                            <td>
                                                @foreach($product->tags as $tag)
                                                    {{ $tag->title }} <br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Цвета</td>
                                            <td>
                                                @foreach($product->colors as $color)
                                                <i class="fas fa-square"  style="color:{{ $color->title }}"></i>{{ $color->title }} <br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Дата создания</td>
                                            <td>{{ $product->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Действия</td>
                                            <td>
                                                <a class="me-2 text-success"
                                                    href="{{ route('admin.product.edit', $product) }}">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <form style="display:inline;" method="POST"
                                                    action="{{ route('admin.product.destroy', $product) }}">
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