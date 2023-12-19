@extends('layouts.dash')

@section('title', 'create post')
@section('content')

    <div class="card">
        <div class="card-header">
            <strong>create post</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('posts.store') }}" method="post" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Section Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                            placeholder="Section Name" class="form-control"><small class="form-text text-muted">Enter the
                            Post Name</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="title-input" class=" form-control-label">Title of the
                            post</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="title-input" name="title"
                            placeholder="Enter The Title of the post" class="form-control"><small
                            class="help-block form-text">Enter The Title of the post</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="description" class=" form-control-label">Textarea</label></div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="description" rows="9" placeholder="Content..."
                            class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                    <div class="col-12 col-md-9">
                        <select name="section_id" id="select" class="form-control">
                            <option value="">Please a section</option>
                            @foreach ($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
