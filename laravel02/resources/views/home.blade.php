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
                            <tbody><tr><td>1</td><td>Example Co</td></tr></tbody>
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
                            <thead><tr><th>ID</th><th>Name</th></tr></thead>
                            <tbody><tr><td>1</td><td>John Doe</td></tr></tbody>
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
                            <thead><tr><th>ID</th><th>Name</th></tr></thead>
                            <tbody><tr><td>1</td><td>Jane Smith</td></tr></tbody>
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
                            <thead><tr><th>ID</th><th>Data</th></tr></thead>
                            <tbody><tr><td>1</td><td>[1, 2, 3]</td></tr></tbody>
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
                            <thead><tr><th>ID</th><th>Filename</th></tr></thead>
                            <tbody><tr><td>1</td><td>example.pdf</td></tr></tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
