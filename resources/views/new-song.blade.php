@extends('mytemplate')

@section('title', 'Insert new song')

@section('content')

<h2>Insert Song</h2>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->any() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<form action="" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title"><br>
    <input type="date" name="release_date" placeholder="Release date"><br>
    <input type="text" name="poster" placeholder="Poster"><br>
    <input type="submit" value="Insert">
</form>


@endsection