@extends('template')
@section('titulo', 'Componentes')

@section('content')
    <!-- Componentes -->
    <x-card header="Hola S195" title="Titulo 1" textbutton="Guardar">Prueba de Slot</x-card>
    <x-card header="¿Dudas?" title="Titulo 2" textbutton="Eliminar">Prueba de Slot 2</x-card>
    <br>
    <x-alert type="success">Alerta Correcta</x-alert>
    <x-alert type="danger">Alerta Incorrecta</x-alert>
@endsection