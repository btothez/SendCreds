@extends('layout')
@section('body')
    {{Form::open(['url' => '',
                  'method' => 'post',
                  'id' => 'credsForm']
                  )}}

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="secure-content">Your Content to Send</label>
                <span class="badge pull-right help" data-toggle="tooltip" title="Max 300 characters">?</span>
                <!-- <textarea type="text" class="form-control" id="secure-content" placeholder="Paste your credintials or message to send."></textarea> -->
                {{Form::textarea('note', '',
                    ['class' => 'form-control',
                    'id' => 'note',
                    'placeholder' => 'Note...'])}}
            </div>

            <div class="form-group">
                <label for="receiver-email">Receiver's Email</label>
                <span class="badge pull-right help" data-toggle="tooltip" title="Required, URL will be sent here.">?</span>
                <!-- <input type="text" class="form-control" id="receiver-email" placeholder="name@email.com"> -->
                {{Form::text('email', '',
                    ['class' => 'form-control',
                    'id' => 'email',
                    'placeholder' => 'Email'])}}
            </div>

            <div class="form-group">
                <label for="receiver-phone">Receiver's Phone</label>
                <span class="badge pull-right help" data-toggle="tooltip" title="Required, code to unlock will be sent here.">?</span>
                <!-- <input type="text" class="form-control" id="receiver-phone" placeholder="1+###-###-####"> -->
                {{Form::text('phone', '',
                    ['class' => 'form-control',
                    'id' => 'phone',
                    'placeholder' => '###-###-####'])}}
            </div>

            <!-- <button class="btn btn-primary btn-lg btn-block" type="button">Send Securely</button> -->
        {{Form::submit('Send Securely', ['class' => 'btn btn-primary btn-lg btn-block'])}}
        </div>
    </div>
</div>

        {{Form::close()}}
@stop
