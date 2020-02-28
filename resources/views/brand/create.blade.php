@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="panel-heading"><strong>Add New Brand</strong></h3>

            <form class="form-horizontal" method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data">
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

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-4 control-label">Description *</label>

                    <div class="col-md-6">
                        <textarea id="description" class="form-control" name="description" required autofocus >{{ old('description') }} </textarea>
                        
                        @if ($errors->has('description'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('brand_logo') ? ' has-error' : '' }}">
                    <label for="brand_logo" class="col-md-4 control-label">Brand Logo *</label>

                    <div class="col-md-6">
                        <input id="brand_logo" type="file" class="form-control" name="brand_logo" value="{{ old('brand_logo') }}" >

                        @if ($errors->has('brand_logo'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('brand_logo') }}</strong>
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
