@extends('layout')

@section('body')

        {{Form::open(['url' => 'receive/' . $slug,
                      'method' => 'post']
                      )}}
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="secure-content">Unlock Your Content</label>
                <textarea type="text" class="form-control textarea-sm" id="secure-content" placeholder="" readonly>
SendCreds is a simple and safe way to send plain text content. Please input the SMS code we sent to you to unlock your content</textarea>
            </div>

            <div class="form-group">
                <label for="receiver-email">SMS Code</label>
                <span class="badge pull-right help" data-toggle="tooltip" title="We sent you a text, input it below.">?</span>
                <!-- <input type="text" class="form-control" id="receiver-email" placeholder="********"> -->
                {{Form::text('code', '',
                    ['class' => 'form-control',
                    'placeholder' => '********'])}}
            </div>

            <!-- <button class="btn btn-primary btn-lg btn-block" type="button">Unlock Content</button> -->
            {{Form::submit('Unlock Content', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            <p class="callout1">All content is deleted after 1 hour.</p>

            <p class="callout1 small mt15"><a href="#">Delete this content immediately.</a></p>
        </div>
    </div>
</div>


        {{Form::close()}}
@stop
