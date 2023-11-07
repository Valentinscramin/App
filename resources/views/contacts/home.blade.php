@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-2">
                <a class="btn btn-primary" href="{{ route('contacts.new') }}">Novo</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            @auth
                                <th scope="col">Actions</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $eachOne)
                            <tr class="">
                                <td scope="row">{{ $eachOne['name'] }}</td>
                                <td>{{ $eachOne['email'] }}</td>
                                <td>{{ $eachOne['contact'] }}</td>
                                @auth
                                    <td>
                                        <form action="{{ route('contacts.destroy', $eachOne['id']) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <a class="btn btn-sm btn-warning"
                                                href="{{ route('contacts.edit', $eachOne['id']) }}">Edit</a>
                                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                @endauth
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
