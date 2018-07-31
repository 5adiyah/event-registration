@extends('layouts.master')

@section('content')
    <div class="flex-center full-height">
        <div class="content">
            <form method="POST">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <p>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}">
                </p>
                <button>Create Calendar</button>
            </form>
        </div>
        <div>
@endsection
