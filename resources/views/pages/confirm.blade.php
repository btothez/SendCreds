@extends('layout')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="secure-content">Your Unlocked Content</label>
                <textarea type="text" class="form-control" id="secure-content" readonly="">{{$note}}</textarea>
            </div>

            <a href="/delete/{{$received_md5}}" class="btn btn-primary btn-sm btn-block" type="button">I got it, you can delete this now.</a>
            <p class="callout1">All content is deleted after 1 hour.</p>
        </div>
    </div>
</div>
@stop
