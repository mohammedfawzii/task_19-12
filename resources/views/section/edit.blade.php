@extends('layouts.dash')

@section('title', 'section')
@section('content')

    <div class="card">
        <div class="card-header">
            <strong>edite Section</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('sections.update',$section->id) }}" method="post" class="form-horizontal">
                @method('PUT')
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">{{trans('section_trans.Section_Name')}}</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" value="{{ $section->name }}"
                            placeholder="Section Name" class="form-control"><small class="form-text text-muted">
                                {{ trans('section_trans.section_dis_name') }}</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="title-input" class=" form-control-label">
                        {{ trans('section_trans.Section_title') }}</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="title-input" name="title" value="{{ $section->title }}"
                            placeholder="Enter The Title of the Section" class="form-control"><small
                            class="help-block form-text">{{ trans('section_trans.section_dis_title') }}</small></div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> {{ trans('section_trans.submit') }}
                    </button>
                </div>
        </div>
        </form>
    </div>

@endsection
