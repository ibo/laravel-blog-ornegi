@extends('template.default')

@section ('content')

    
<div class="row">
    
    @if ($errors->count() > 0)
    <div class="col-lg-12">
    <div class="alert alert-danger">

        <ul>
        @foreach ($errors->all() as $msg)
        <li>{{ $msg }}</li>
        @endforeach
        </ul>

    </div>
    </div>

    @endif
    
    <div class="col-lg-6">
        <h3>Üye Girişi</h3>
        <hr />
            {{ Form::open(array('route' => 'signIn', 'method' => 'POST')); }}
            <div class="form-group">
              {{ Form::label('','Mail Adresiniz'); }}
              {{ Form::text('mail', Input::old('mail'), array('placeholder' => 'Mail Adresinizi Yazın', 'class' => 'form-control')); }}
            </div>
            <div class="form-group">
              {{ Form::label('','Parolanız'); }}
              {{ Form::password('password', array('placeholder' => 'Parolanızı Yazın', 'class' => 'form-control', 'type' => 'password')); }}
            </div>
            {{ Form::submit('GİRİŞ', array('class' => 'btn btn-default')) }}
          {{ Form::close(); }}
    </div>
    
    <div class="col-lg-6">
        <h3>Üye Ol</h3>
        <hr />
        
        {{ Form::open(array('route' => 'signUp', 'method' => 'POST')); }}
            <div class="form-group">
              {{ Form::label('','Ad - Soyad'); }}
              {{ Form::text('fullname', Input::old('fullname'), array('placeholder' => 'Adınızı ve Soyadınızı Yazın', 'class' => 'form-control')); }}
            </div>
            <div class="form-group">
              {{ Form::label('','Mail Adresiniz'); }}
              {{ Form::text('email', Input::old('fullname'), array('placeholder' => 'Mail Adresinizi Yazın', 'class' => 'form-control')); }}
            </div>
            <div class="form-group">
              {{ Form::label('','Parolanız'); }}
              {{ Form::password('password', array('placeholder' => 'Parolanızı Yazın', 'class' => 'form-control', 'type' => 'password')); }}
            </div>
            <div class="form-group">
              {{ Form::label('','Parolanız (Yeniden)'); }}
              {{ Form::password('password_confirmation', array('placeholder' => 'Parolanızı Yeniden Yazın', 'class' => 'form-control', 'type' => 'password')); }}
            </div>
            {{ Form::submit('ÜYE OL', array('class' => 'btn btn-default')) }}
          {{ Form::close(); }}
    </div>
    
</div>




@stop