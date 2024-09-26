@extends('layouts.app')
@section('title') {{ config('app.name', 'Laravel') }} | {{ __('Contact') }} @endsection
@section('heading') {{ __('Contact') }} @endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('admin.contacts.update', $contact->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title p-2">{{ __('Edit') }} - &quot;{{ $contact->first_name.' '.$contact->last_name }}&quot;</h3>
                        <a
                            href="{{ route('admin.contacts.index') }}"
                            class="btn btn-default float-right">
                            <i class="material-icons">reply_all</i>&nbsp;
                            {{ __('Back to list') }}
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            {{ __('Contact Information') }}
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group input-group-sm ">
                                                            <label class="mb-0 font-weight-normal"
                                                                for="first_name">{{ __('First Name') }}</label>
                                                            <input type="text" id="first_name" name="first_name"
                                                                class="form-control @error('first_name') is-invalid @enderror"
                                                                placeholder="{{ __('First Name') }}"
                                                                value="{{ old('first_name' , $contact->first_name) }}" maxlength="200">
                                                            @include('admin.includes.invalid', [
                                                                'field' => 'first_name',
                                                            ])
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group input-group-sm ">
                                                            <label class="mb-0 font-weight-normal"
                                                                for="last_name">{{ __('Last Name') }}</label>
                                                            <input type="text" id="last_name" name="last_name"
                                                                class="form-control @error('last_name') is-invalid @enderror"
                                                                placeholder="{{ __('Last Name') }}"
                                                                value="{{ old('last_name', $contact->last_name) }}" maxlength="200">
                                                            @include('admin.includes.invalid', [
                                                                'field' => 'last_name',
                                                            ])
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group input-group-sm ">
                                                            <label class="mb-0 font-weight-normal"
                                                                for="email">{{ __('Phone') }}</label>
                                                            <input type="text" id="email" name="phone"
                                                                class="form-control @error('phone') is-invalid @enderror"
                                                                placeholder="{{ __('Please enter phone number') }}"
                                                                value="{{ old('phone', $contact->phone) }}" maxlength="30">
                                                            @include('admin.includes.invalid', [
                                                                'field' => 'phone',
                                                            ])
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                                <div class="row d-flex justify-content-end">
                                                    <div class="card-footer">
                                                        <button type="submit"
                                                                class="btn bg-gradient-primary">
                                                            <i class="material-icons">save_alt</i>&nbsp;{{ __('Save') }}
                                                        </button>
                                                    </div>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                        
                        </div>

                    </div>
                    <!-- /.card -->
                  
                </div>


            </form>
        </div>
    </div>
@endsection