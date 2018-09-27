<div class="form-group">
    <label>NAMA</label>
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
    {!! $errors->first('nama', '<span style="color:red">:message</span>') !!}
</div>

<div class="form-group">
    <label>STATUS</label>
    {!! Form::select('status', ['BUKA' => 'BUKA', 'PENUH' => 'PENUH'], null, ['class' => 'form-control']) !!}
    {!! $errors->first('status', '<span style="color:red">:message</span>') !!}
</div>

<div class="form-group">
    <label>CREDIT</label>
    {!! Form::text('credit', null, ['class' => 'form-control']) !!}
    {!! $errors->first('credit', '<span style="color:red">:message</span>') !!}
</div>

<div>
    <button type="submit" class="btn btn-primary">SAVE</button>
</div>
