@extends('layouts.app')

@section('app-css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('body')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            {{ str_replace('-', ' de ', config('app.name', 'Laravel')) }}
        </div>

        <div class="subtitle m-b-md">
            Um exemplo básico de um projeto Laravel
        </div>

        <div class="flex-center">
            <div class="btn-group" role="group">
                <a href="{{ url('contacts') }}" type="button" class="btn btn-light">Visualizar mensagens</a>
                <a href="{{ url('contacts/create') }}" type="button" class="btn btn-light">Enviar mensagem</a>
            </div>
        </div>

    </div>
</div>
@endsection
