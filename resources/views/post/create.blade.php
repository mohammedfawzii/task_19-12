@extends('layouts.dash')

@section('title', 'create post')
@section('content')

    <div class="card">
        <div class="card-header">
            <strong>{{ trans('post_trans.add_post') }}</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('posts.store') }}" method="post" class="form-horizontal">
                @csrf
                @foreach (config('app.languages') as $key=>$lang )
                <div class="card-header">
                    <strong>{{$lang}}</strong>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">{{ trans('post_trans.post_name') }}</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="{{ $key }}[name]"
                            placeholder="Section Name" class="form-control"><small class="form-text text-muted">{{ trans('post_trans.dis_post_name') }}</small></div>
                        </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="title-input" class=" form-control-label">{{ trans('post_trans.post_title') }}</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="title-input" name="{{ $key }}[title]"
                            placeholder="Enter The Title of the post" class="form-control"><small
                            class="help-block form-text">{{ trans('post_trans.dis_post_title') }}</small></div>
                        </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="description" class=" form-control-label">{{ trans('post_trans.Textarea') }}</label></div>
                    <div class="col-12 col-md-9">
                        <textarea name="{{ $key }}[description]" id="description" rows="9" placeholder="Content..."
                            class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">{{ trans('post_trans.section') }}</label></div>
                    <div class="col-12 col-md-9">
                        <select name="section_id" id="select" class="form-control">
                            <option value="">Please a section</option>
                            @foreach ($sections as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                @endforeach

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> {{ trans('section_trans.submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
