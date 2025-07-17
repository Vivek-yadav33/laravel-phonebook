@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Contacts Update Form</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation custom-input" action="{{ url('/contacts/update',$data->id) }}" method="post" novalidate=""
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label" for="validationCustom01">First name</label>
                                <input class="form-control" value="{{ $data->first_name }}" id="validationCustom01" name="first_name" type="text"
                                    >
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
                                <input class="form-control" id="validationCustom01" type="text" value="{{ $data->last_name }}"
                                    name="last_name">
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
                                <input class="form-control" id="validationCustom01" type="email" name="email"
                                    placeholder="abc@gmail.com" value="{{ $data->email }}">
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
                                <input class="form-control" id="validationCustom01" type="text" value="{{ $data->phone_number }}"
                                    name="mobile_no">
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
                                   value="{{ $data->address }}" name="address">
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
                                <input class="form-control" id="formFile1" type="file" aria-label="file example"
                                    name="image">
                               
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
@endsection
