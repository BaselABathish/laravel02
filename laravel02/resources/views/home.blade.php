@extends('layouts.app')

@section('content')
    <div class="form-container">



        <!-- Accordion -->
        <div class="accordion" id="dataAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingCompany">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCompany" aria-expanded="true" aria-controls="collapseCompany">
                        Company Table
                    </button>
                </h2>
                <div id="collapseCompany" class="accordion-collapse collapse show" aria-labelledby="headingCompany" data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <!-- Replace with your actual company table -->
                        <table class="table table-bordered">
                            <thead><tr><th>ID</th><th>Name</th></tr></thead>
                            @foreach($companies as $company)
                                <tbody><tr><td>{{$company->id}}</td><td>{{$company->name}}</td></tr></tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEmployee">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmployee" aria-expanded="false" aria-controls="collapseEmployee">
                        Employee Table
                    </button>
                </h2>
                <div id="collapseEmployee" class="accordion-collapse collapse" aria-labelledby="headingEmployee" data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <!-- Replace with your actual employee table -->
                        <table class="table table-bordered">
                            <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Company</th></tr></thead>
                            @foreach($employees as $employee)
                                <tbody><tr><td>{{$employee->id}}</td><td>{{$employee->name}}</td><td>{{$employee->email}}</td><td>{{$employee->company->name}}</td></tr></tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>




            <div class="accordion-item">
                <h2 class="accordion-header" id="headingAssistant">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAssistant" aria-expanded="false" aria-controls="collapseAssistant">
                        Assistant Table
                    </button>
                </h2>
                <div id="collapseAssistant" class="accordion-collapse collapse" aria-labelledby="headingAssistant" data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <!-- Replace with your actual assistant table -->
                        <table class="table table-bordered">
                            <thead><tr><th>ID</th><th>Name</th><th>Company</th></tr></thead>
                            @foreach($assistants as $assistant)
                                <tbody><tr><td>{{$assistant->id}}</td><td>{{$assistant->name}}</td><td>{{$assistant->company->name}}</td></tr></tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header" id="headingVector">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVector" aria-expanded="false" aria-controls="collapseVector">
                        Vector Table
                    </button>
                </h2>
                <div id="collapseVector" class="accordion-collapse collapse" aria-labelledby="headingVector" data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <!-- Replace with your actual vector table -->
                        <table class="table table-bordered">
                            <thead><tr><th>ID</th><th>Name</th><th>Description</th><th>Company</th></tr></thead>
                            @foreach($vector_stores as $vs)
                                <tbody><tr><td>{{$vs->id}}</td><td>{{$vs->name}}</td><td>{{$vs->description}}</td><td>{{$vs->company->name}}</td></tr></tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFile">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFile" aria-expanded="false" aria-controls="collapseFile">
                        File Table
                    </button>
                </h2>
                <div id="collapseFile" class="accordion-collapse collapse" aria-labelledby="headingFile" data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <!-- Replace with your actual file table -->
                        <table class="table table-bordered">
                            <thead><tr><th>ID</th><th>Filename</th><th>Uploaded by</th><th>Vector store</th></tr></thead>
                            @foreach($files as $f)
                                <tbody><tr><td>{{$f->id}}</td><td>{{$f->filename}}</td><td>{{$f->uploader_id}}</td><td>{{$f->vector_store->name}}</td></tr></tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
