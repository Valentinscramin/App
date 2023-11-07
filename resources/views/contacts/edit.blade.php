@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-2">
                <a class="btn btn-warning" href="{{ route('contacts.home') }}">Voltar</a>
            </div>
            <form method="POST" action="{{ route('contacts.update', $contacts->id) }}">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome"
                        value="{{ $contacts->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                        placeholder="Email" value="{{ $contacts->email }}">
                </div>
                <div class="form-group">
                    <label for="contact">Contato</label>
                    <input type="text" class="form-control" name="contact" id="contact" placeholder="Contato"
                        value="{{ $contacts->contact }}">
                </div>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    </div>
                @endif
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection
