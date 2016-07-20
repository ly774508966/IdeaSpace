<div class="form-group {{ $errors->has($field_id)?'has-error':'' }}">
    <label class="control-label large">{{ $form['#label'] }}</label>
    <div class="form-control-color text-center {{ $errors->has($field_id)?'has-error':'' }}">
        <input type="color" name="{{ $field_id }}" class="form-control input-lg" value="{!! $form['#content']['#value'] !!}">
    </div>
    <span class="info-block">{{ $form['#help'] }} @if ($form['#required'] == false) <span class="label label-success">{{ trans('template_fields.optional') }}</span>@endif</span>
    {!! $errors->has($field_id)?$errors->first($field_id, '<span class="help-block">:message</span>'):'' !!}
</div>