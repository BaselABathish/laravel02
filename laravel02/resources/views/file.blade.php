@extends('layouts.app')

@section('content')
    <form action="{{ route('file.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="filename" class="form-label">File Name</label>
            <input type="text" class="form-control" id="filename" name="filename" required>
        </div>
        <div class="mb-3">
            <label for="uploader_id" class="form-label">User</label>
            <?php
                echo "<p>In a real project I would use a logged in user's information</p>";
                ?>
            <input type="text" class="form-control" id="uploader_id" name="uploader_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
