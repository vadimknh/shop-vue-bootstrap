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

                        <form action="{{ route('admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <input name="title" type="text" class="form-control" placeholder="Наименование" value="{{ $product->title }}">
                            </div>
                            <div class="form-group">
                                <input name="description" type="text" class="form-control" placeholder="Описание"  value="{{ $product->description }}">
                            </div>
                            <div class="form-group">
                                <textarea name="content" class="form-control" placeholder="Контент">{{ $product->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <input name="quantity" type="text" class="form-control"
                                    placeholder="Количество на складе" value="{{ $product->quantity }}">
                            </div>
                            <div class="form-group">
                                <input name="price" type="text" class="form-control" placeholder="Цена" value="{{ $product->price }}">
                            </div>
                            

                            <div class="form-group">
                                <img class="mb-3" src="{{ asset('storage') . '/' . $product->preview_image }}" width="200px" alt="">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="preview_image" type="file" class="custom-file-input">
                                        <label class="custom-file-label" for="exampleInputFile">Изменить файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <select name="category_id" class="form-control category" style="width: 100%;">
                                    <option selected="selected" disabled>Выберите категорию</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" 
                                            {{ $product->category_id == $category->id ? ' selected' : ''}} 
                                            >{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Выберите теги"
                                    style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option
                                            @foreach($product->tags as $productTag)
                                                {{ $productTag->id == $tag->id ? ' selected' : ''}}  
                                            @endforeach
                                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Выберите цвет"
                                    style="width: 100%;">
                                    @foreach($colors as $color)
                                    <option 
                                        @foreach($product->colors as $productColor)
                                           {{ $productColor->id == $color->id ? ' selected' : ''}}  
                                        @endforeach
                                        value="{{ $color->id }}">{{ $color->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Изменить</button>

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
