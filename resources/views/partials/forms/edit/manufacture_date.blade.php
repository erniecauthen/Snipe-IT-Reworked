<!-- Manufacture Date -->
<div class="form-group {{ $errors->has('manufacture_date') ? ' has-error' : '' }}">
   <label for="manufacture_date" class="col-md-3 control-label">{{ trans('admin/hardware/form.manufacture_date') }}</label>
   <div class="input-group col-md-3">
        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true">
            <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="manufacture_date" id="manufacture_date" value="{{ Input::old('manufacture_date', ($item->manufacture_date) ? $item->manufacture_date->format('Y-m-d') : '') }}">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
       </div>
       {!! $errors->first('manufacture_date', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
   </div>
</div>

