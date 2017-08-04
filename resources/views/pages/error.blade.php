@extends('layout')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="secure-content">Content Deleted</label>
                <textarea type="text" class="form-control textarea-sm" id="secure-content" placeholder="" readonly>{{$message}}</textarea>
            </div>
        </div>
    </div>
</div>@stop
