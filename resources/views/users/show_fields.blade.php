<!-- Nom Société Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nom Société:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Code Anme Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Code Anme:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $user->updated_at }}</p>
</div>

