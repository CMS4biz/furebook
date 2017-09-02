<div class="form-group">
	{!!  Form::label('name','Name')  !!}
	<div>
		{!! Form::text('name', null ,['class'=>'form-control'] )!!}
	</div>
</div>
<div class="form-group">
	{!!  Form::label('date_of_birth','Geboortedatum')  !!}
	<div>
		{!! Form::date('date_of_brith', null ,['class'=>'form-control'] ) !!}
	</div>
</div>
<div class="form-group">
	{!!  Form::label('breed_id','Soort')  !!}
	<div>
		{!! Form::select('breed_id', $breeds , null ,['class'=>'form-control']) !!}
	</div>
</div>
{!! Form::submit('Kat opslaan',['class'=>'btn btn-primaary']) !!}

