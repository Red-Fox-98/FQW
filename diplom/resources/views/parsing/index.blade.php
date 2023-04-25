@extends('layouts.app')

@php
    /**  */
@endphp

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form method="post" action="{{route('file.parser.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file">Загрузить файл</label>
                        <input type="file" name="file" id="file" class="form-control">
                    </div>
                    <br><button class="btn btn-success">Обработка</button>
                </form>
            </div>
        </div>
    </div>
@endsection
