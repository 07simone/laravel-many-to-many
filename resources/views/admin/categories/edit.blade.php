@extends('layouts.app')

@section('content')
    <h1>
        Edit nuovo post
    </h1>
    <div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form action="{{ route("admin.categories.store") }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}">
        <br>
        <label for="img">immagine</label>
        <input type="text" name="img" id="img" value="{{ $category->img }}">
        <br>
        <button type="submit">Send</button>

    </form>

@endsection

