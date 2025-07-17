@extends('layouts.master')
@section('content')
<div class="container-fluid basic_table">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>PhoneBook All data</h4>
                  </div>
                  
                  <div class="table-responsive theme-scrollbar">
                    <table class="table">
                      <thead>
                        <tr class="border-bottom-primary">
                          <th scope="col">User Id</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Phone Number</th>

                          <th scope="col">Email</th>
                          <th scope="col">Address</th>
                          <th scope="col">created_at</th>
                          {{-- <th scope="col">updated_at</th> --}} 
                        </tr>
                      </thead>
                      <tbody>
                          @forelse ($contacts as $contact )

                        <tr class="border-bottom-secondary">
                          {{-- <th scope="row">1</th> --}}
                            
                        
                          <td>{{$contact->user_id}}</td>
                          <td>{{$contact->first_name}}</td>
                          <td>{{$contact->last_name}}</td>
                          <td>{{$contact->phone_number}}</td>
                          <td>{{$contact->email}}</td>
                          <td>{{$contact->address}}</td>
                          <td>{{$contact->created_at}}</td>

                          <td><a href="/contacts/edit/{{ $contact->id }}"><button>Edit</button></a></td>
                         <td> <a href="/contacts/delete/{{ $contact->id }}"><button>delete</button></a></td>


                            @empty
                            {{ 'no data found' }}
                        </tr>
                          @endforelse

                      </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection