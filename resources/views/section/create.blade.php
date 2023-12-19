@extends('layouts.dash')

@section('title', 'section')
@section('content')

    <div class="card">
        <div class="card-header">
            <strong>create Section</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('sections.store') }}" method="post" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                            placeholder="Section Name" class="form-control"><small class="form-text text-muted">Enter the
                            Section Name</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="title-input" class=" form-control-label">Title of the
                            Section</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="title-input" name="title"
                            placeholder="Enter The Title of the Section" class="form-control"><small
                            class="help-block form-text">Enter The Title of the Section</small></div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
        </div>
        </form>
    </div>

@endsection
