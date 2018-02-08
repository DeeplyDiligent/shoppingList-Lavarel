{!! Form::open(['url' => 'signin/submit']) !!}
    <div class="form-group">
        <div class="form-group">
            {{Form::label('name', 'Full Name')}}
            {{Form::text('name', '', ['class' => 'form-control'])}}
            
        </div> 
    </div>
    <div class="form-group">
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class' => 'form-control'])}}
            
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class' => 'form-control'])}}
            
        </div>
    </div>
    {{Form::submit('Submit',['class'=>'btn btn primary'])}}
{!! Form::close() !!}