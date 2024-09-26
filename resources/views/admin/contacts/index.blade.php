@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="card-title p-2">{{ __('List') }}</h3>
                        </div>
                        <div class="col-4">
                          <a
                              href="{{ route('admin.contacts.create') }}"
                              class="btn bg-gradient-success float-right">
                              <i class="material-icons">add_circle</i>
                              {{ __('Create Contact') }}  
                          </a>
                      </div>

                      <div class="col-4">
                        <a data-toggle="modal" data-target="#exampleModalLong"
                            class="btn bg-gradient-success float-right">
                            <i class="material-icons">add_circle</i>
                            {{ __('Import Contacts') }}  
                        </a>

                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{ __('Import Contacts') }}</h5>
                        
                        
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.contacts.import') }}" method="POST" class="basicform" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="form-control">
                                                    <input type="file" name="file" accept=".xml">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                        
                        
                                            <div class="import_area">
                                                <div>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                                                    <button type="submit" class="btn btn-primary basicbtn">{{ __('Import') }}</button>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                          </div>

                    </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('admin.contacts.includes.datatable')
                </div>
            </div>
        </div>
    </div>
    @include('includes.modal_delete')

@endsection
