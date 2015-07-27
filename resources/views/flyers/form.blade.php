@inject('countries', 'App\Http\Utilities\Country')

<div class="form-group">
    {!! Form::label('street', 'Street:') !!}
    {!! Form::text('street', Input::old('street'), ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('street') }}</small>
</div>

<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', Input::old('city'), ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('city') }}</small>
</div>

<div class="form-group">
    {!! Form::label('zip', 'Zip/Postal Code:') !!}
    {!! Form::text('zip', Input::old('zip'), ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('zip') }}</small>
</div>

<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::select('country', $countries::all(), Input::old('country'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'select a country']) !!}
    <small class="text-danger">{{ $errors->first('country') }}</small>
</div>

<div class="form-group">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state', Input::old('state'), ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('state') }}</small>
</div>

<hr>

<div class="form-group">
    {!! Form::label('price', 'Sale Price:') !!}
    {!! Form::text('price', Input::old('price'), ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('price') }}</small>
</div>

<div class="form-group">
    {!! Form::label('description', 'Home Description') !!}
    {!! Form::textarea('description', Input::old('description'), ['class' => 'form-control', 'required' => 'required', 'rows' => 10]) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>

<div class="form-group">
    {!! Form::label('photos', 'Photos:') !!}
    {!! Form::file('photos', ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('photos') }}</small>
</div>