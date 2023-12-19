@extends('layouts.dash')

@section('title', 'section')
@section('content')
    <button style=" margin: 25px;" type="button" class="btn btn-success "><i class="fa fa-plus"></i>
        <a style="color: white; text-transform: capitalize; margin-left: 9px;"
            href="{{ route('sections.create') }}">{{ trans('section_trans.section') }}</a></button>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">{{ trans('section_trans.Table') }}</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col-3">{{ trans('section_trans.Name') }}</th>
                            <th scope="col-3">{{ trans('section_trans.title') }}</th>
                            <th scope="col-3">{{ trans('section_trans.add') }}</th>
                            <th scope="col">{{ trans('section_trans.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sections as $section)
                            <tr>

                                <th scope="row">{{ $section->id }}</th>
                                <td>{{ $section->name }}</td>
                                <td>{{ $section->title }}</td>
                                <td><button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a
                                            style="color: white; text-transform: capitalize; margin-left: 9px;"
                                            href="{{ route('posts.create') }}"></a>{{ trans('section_trans.btn_add') }}</button></td>
                                <td>
                                    <div>

                                        <a href="{{ route('sections.edit', $section->id) }}"><span
                                                class="ti-wand"></span></a>

                                        <form action="{{ route('sections.destroy', $section->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf

                                            <span><input class="ti-trash" value="{{trans('section_trans.delete') }}" type="submit"></span>
                                        </form>
                                    </div>

                                </td>
                        @endforeach

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
