@extends('template')
@section('title', 'Registrar Libro')


@section('content')
<div class="d-flex justify-content-center">
    <div class="card p-3 text-center">
        @session('success')
            <script>alertify.alert("{{__('Registro Exitoso')}}","{{__('Todo correcto: Libro' )."'".$value."'".__(' guardado')}}");</script>
        @endsession
        <form action="/registrando-libro" method="GET">
            @csrf
            <p class="fs-4 mb-2 text-danger">{{__('Formulario: Registrar Libro')}}</p>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">ISBN</span>
                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="intISBN" value="{{old('intISBN')}}">
            </div>
            <small class="text-danger fst-italic">{{$errors->first('intISBN')}}</small>
            <div class="input-group mt-4 mt-4">
                <span class="input-group-text" id="basic-addon1">{{__('Título')}}</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="txtTitulo" value="{{old('txtTitulo')}}">
            </div>
            <small class="text-danger fst-italic">{{$errors->first('txtTitulo')}}</small>
            <div class="input-group mt-4">
                <span class="input-group-text" id="basic-addon1">{{__('Autor')}}</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="txtAutor" value="{{old('txtAutor')}}">
            </div>
            <small class="text-danger fst-italic">{{$errors->first('txtAutor')}}</small>
            <div class="input-group mt-4">
                <span class="input-group-text" id="basic-addon1">{{__('Páginas')}}</span>
                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="intPaginas" value="{{old('intPaginas')}}">
            </div>
            <small class="text-danger fst-italic">{{$errors->first('intPaginas')}}</small>
            <div class="input-group mt-4">
                <span class="input-group-text" id="basic-addon1">{{__('Año')}}</span>
                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="intAnio" value="{{old('intAnio')}}">
            </div>
            <small class="text-danger fst-italic">{{$errors->first('intAnio')}}</small>
            <div class="input-group mt-4">
                <span class="input-group-text" id="basic-addon1">{{__('Editorial')}}</span>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="txtEditorial" value="{{old('txtEditorial')}}">
            </div>
            <small class="text-danger fst-italic">{{$errors->first('txtEditorial')}}</small>
            <div class="input-group mt-4">
                <span class="input-group-text" id="basic-addon1">{{__('Email de Editorial')}}</span>
                <input type="email" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="txtCorreo" value="{{old('txtCorreo')}}">
            </div>
            <div class="mb-4">
                <small class="text-danger fst-italic">{{$errors->first('txtCorreo')}}</small>
            </div>
            <button type="submit" class="btn btn-success">
                {{__('Registrar')}}
            </button>
        </form>
    </div>
</div>
@endsection