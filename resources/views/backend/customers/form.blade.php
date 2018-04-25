<div class="box-body">
    <div class="form-group">
        {{ Form::label('first_name', trans('labels.backend.customers.table.first_name'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('first_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.customers.table.first_name'), 'required' => 'required']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('last_name', trans('labels.backend.customers.table.last_name'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('last_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.customers.table.last_name'), 'required' => 'required']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('email', trans('labels.backend.customers.table.email'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('email', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.customers.table.email'), 'required' => 'required']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('password', trans('labels.backend.customers.table.password'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::password('password', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.customers.table.password'), 'required' => 'required']) }}
        </div>
    </div>
    <div class="form-group">
                    {{ Form::label('status', trans('labels.backend.customers.table.status'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        <div class="control-group">
                            <label class="control control--checkbox">
                                {{ Form::checkbox('status', 1, true) }}
                                <div class="control__indicator"></div>
                            </label>
                        </div>
                    </div><!--col-lg-3-->
                </div><!--form control-->
</div>
@section("after-scripts")
    <script type="text/javascript">
        $( document ).ready( function() {
        });
    </script>
@endsection
