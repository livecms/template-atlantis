<?php
$source = LC_CurrentTheme().'.views.layout';
$targetView = 'livecms-templates::'.$source; ?>
@extends($targetView)

@section('content')
<div class="page-inner">
    <div class="page-header d-flex justify-content-between">
        <div class="page-title mr-3">{{__('New :resource_title', ['resource_title' => ResTitle()])}}</div>
        <div class="buttons">
            <a href="{{ResRoute('index')}}" class="btn btn-default" title="{{__('Back To Index')}}">
                <i class="fa fa-arrow-left"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {!! Form::open(['url' => ResRoute('store'), 'id' => 'resource_form']) !!}
                <div class="card-body">
                {!! Form::render('form') !!}
                {!! Form::render('button') !!}
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary pull-right">{{__('Save')}}</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@push('js-bottom')
<script>
@if ($errors->any())
const form_errors = {!! json_encode($errors->toArray()) !!};
const validation_identifier = '{{old('_identifier')}}';
const validation_title = '{{ __('Validation Failed.') }}';
@endif

{!! Form::javascript() !!}

if (typeof form_errors != 'undefined') {
{!! ResValidationJS() !!}
}
</script>
@endpush
