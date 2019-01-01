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
            <a href="#" class="btn btn-default" title="{{__('Delete')}}">
                <i class="fa fa-trash"></i>
            </a>
            <a href="{{ResRoute('edit', ['id' => ResModel()->id])}}" class="btn btn-primary" title="{{__('Edit')}}">
                <i class="fa fa-edit"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <table class="table">
                    <thead>
                        <td width="35%">{{$keyFieldLabel}}</td>
                        <td width="65%">{{$keyFieldValue}}</td>
                    </thead>
                    <tbody>
                        @foreach($showFields as $key => $value)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{!!$value!!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
