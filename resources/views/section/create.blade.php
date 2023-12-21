@extends('layouts.dash')

@section('title', 'section')
@section('content')

    <div class="card">
        <div class="card-header">
            <strong>{{trans('section_trans.create_Section')}}</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('sections.store') }}" method="post" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">{{trans('section_trans.Section_Name')}}</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                            placeholder={{ trans('section_trans.section_plac_name') }} class="form-control"><small class="form-text text-muted">
                                {{ trans('section_trans.section_dis_name') }}</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="title-input" class=" form-control-label">{{ trans('section_trans.Section_title') }}</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="title-input" name="title"
                            placeholder={{ trans('section_trans.section_plac_title') }} class="form-control"><small
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
