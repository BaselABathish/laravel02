@extends('layouts.app')

@section('content')
    <form action="{{ route('file.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="filename" class="form-label">File Name</label>
            <input type="text" class="form-control" id="filename" name="filename" required>
        </div>
        <div class="mb-3">
            <label for="uploader_id" class="form-label">Uploader id</label>
            <select class="form-select" id="uploader_id" name="uploader_id" required>
                <option value="" disabled selected>Select an uploader</option>
                @foreach($employees as $e)
                    <option value="{{ $e->id }}">{{$e->id}} : {{ $e->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="vector_store_id" class="form-label">Vector store</label>
            <select class="form-select" id="vector_store_id" name="vector_store_id" required>
                <option value="" disabled selected>Select a vector store</option>
                @foreach($vector_store as $vs)
                    <option value="{{ $vs->id }}">{{$vs->id}} : {{ $vs->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
