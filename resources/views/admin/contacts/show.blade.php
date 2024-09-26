@extends('layouts.app')
@section('title') {{ config('app.name', 'Laravel') }} | {{ __('Contacts') }} @endsection
@section('heading') {{ __('Contacts') }} @endsection

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title p-2">{{ __('View') }} - &quot;{{ $contact->first_name.' '.$contact->last_name }}&quot;</h3>
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
                                       
                                        <div class="col-md-8 col-sm-12">
                                            <div class="row">

                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group input-group-sm ">
                                                        <label class="mb-0">{{__('First Name')}}</label>
                                                        <div class="text-muted">
                                                            {{$contact->first_name}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group input-group-sm ">
                                                        <label class="mb-0">{{__('Last Name')}}</label>
                                                        <div class="text-muted">
                                                            {{$contact->last_name}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group input-group-sm ">
                                                        <label class="mb-0">{{__('Phone')}}</label>
                                                        <div class="text-muted">
                                                            {{$contact->phone}}
                                                        </div>
                                                    </div>
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
        </div>
    </div>
@endsection
