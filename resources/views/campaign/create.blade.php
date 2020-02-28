@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="panel-heading"><strong>Add New Campaign</strong></h3>
            @if (session('status'))
                <div class="panel-body">
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
            
            <form class="form-horizontal" method="POST" action="{{ route('campaign.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name *</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus >

                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    </div>
                </div>

                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                    <label for="body" class="col-md-4 control-label">Body *</label>

                    <div class="col-md-6">
                        <textarea id="body" class="form-control" name="body" required autofocus >{{ old('body') }} </textarea>
                        
                        @if ($errors->has('body'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('banner') ? ' has-error' : '' }}">
                    <label for="banner" class="col-md-4 control-label">Banner *</label>

                    <div class="col-md-6">
                        <input id="banner" type="file" class="form-control" name="banner" value="{{ old('banner') }}" >

                        @if ($errors->has('banner'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('banner') }}</strong>
                            </span>
                        @endif

                    </div>
                </div>


                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                    <label for="location" class="col-md-4 control-label">Location *</label>

                    <div class="col-md-6">
                        <select id="location" name="location">
                            <option value="">Select Location</option>
                            @foreach($locations as $location)
                                <option @if(old('location') == $location->id ) selected @endif value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                        
                        @if ($errors->has('location'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                    <label for="brand" class="col-md-4 control-label">Brand *</label>

                    <div class="col-md-6">
                        <select id="brand" name="brand">
                        <option value="">Select Brand</option>                            @foreach($brands as $brand)
                            <option @if(old('brand') == $brand->id) selected @endif value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        
                        @if ($errors->has('brand'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('brand') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
