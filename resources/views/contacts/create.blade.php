@extends('layouts.master')
@section('content')

                <!-- Page Sidebar Ends-->
    
                    <!-- Container-fluid starts-->
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-xl-12">
                                <div class="card height-equal">
                                    <div class="card-header">
                                        <h4>Contacts form</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="row g-3 needs-validation custom-input" action="/contacts"
                                            method="post" novalidate="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12">
                                                <label class="form-label" for="validationCustom01">First name</label>
                                                <input class="form-control" id="validationCustom01" name="first_name"
                                                    type="text" placeholder="Mark">
                                                @error('first_name')
                                                    <label class="pt-0 text-danger">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                                <div class="invalid-feedback">Please enter your valid </div>
                                                <div class="valid-feedback">
                                                    Looks's Good!</div>

                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="validationCustom01">Last name</label>
                                                <input class="form-control" id="validationCustom01" type="text"
                                                    placeholder="Mark" name="last_name">
                                                @error('last_name')
                                                    <label class="pt-0 text-danger">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                                <div class="invalid-feedback">Please enter your valid </div>
                                                <div class="valid-feedback">
                                                    Looks's Good!</div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="validationCustom01">Email</label>
                                                <input class="form-control" id="validationCustom01" type="email"
                                                    placeholder="abc@gmail.com" name="email">
                                                @error('email')
                                                    <label class="pt-0 text-danger">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                                <div class="invalid-feedback">Please enter your valid </div>
                                                <div class="valid-feedback">
                                                    Looks's Good!</div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="validationCustom01">Mobile No.</label>
                                                <input class="form-control" id="validationCustom01" type="text"
                                                    placeholder="8953122343" name="mobile_no">
                                                @error('mobile_no')
                                                    <label class="pt-0 text-danger">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                                <div class="invalid-feedback">Please enter your valid </div>
                                                <div class="valid-feedback">
                                                    Looks's Good!</div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="validationCustom01">Address</label>
                                                <input class="form-control" id="validationCustom01" type="text"
                                                    placeholder="city or state" name="address">
                                                @error('address')
                                                    <label class="pt-0 text-danger">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                                <div class="invalid-feedback">Please enter your valid </div>
                                                <div class="valid-feedback">
                                                    Looks's Good!</div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="formFile1">Upload Image</label>
                                                <input class="form-control" id="formFile1" type="file"
                                                    aria-label="file example" name="image">
                                                @error('image')
                                                    <label class="pt-0 text-danger">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>

                                          
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container-fluid Ends-->
                
    
@endsection

<!-- Container-fluid starts-->



<!-- Container-fluid Ends-->
