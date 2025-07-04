@extends('layouts.app')

@section('content')
    <form action="{{ route('vector_store.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>

            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>

            <div class="mb-3">
                <label for="company_id" class="form-label">Company</label>
                <select class="form-select" id="company_id" name="company_id" required>
                    <option value="" disabled selected>Select a company</option>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{$company->id}} : {{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
