@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form method="post" action="{{route('file.parser.processing')}}" enctype="multipart/form-data">
                    @csrf
                    @php /** @var \Illuminate\Support\ViewErrorBag $errors */ @endphp
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="file">Загрузить файл</label>
                        <input type="file" name="file" id="file" class="form-control">
                    </div>
                    <br><button class="btn btn-success">Обработка</button>
                </form>
            </div>
            <div class="col-md-9">
                <form method="post" action="{{route('file.parser.download')}}" enctype="multipart/form-data">
                    @csrf
                    <br><button class="btn btn-success">Скачать</button>
                </form>
            </div>
        </div>
    </div>
@endsection
