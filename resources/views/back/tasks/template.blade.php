@extends('back.layout')

@section('main')

    @yield('form-open')
        {{ csrf_field() }}

        <div class="row">

            <div class="col-md-12">
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Task Name'),
                    ],
                    'input' => [
                        'name' => 'task_name',
                        'value' => isset($task) ? $task->task_name : '',
                        'input' => 'text',
                        'required' => true,
                    ],
                ])
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Task Description'),
                    ],
                    'input' => [
                        'name' => 'task_description',
                        'value' => isset($task) ? $task->task_description : '',
                        'input' => 'text',
                        'required' => true,
                    ],
                ])
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Task Status'),
                    ],
                    'input' => [
                        'name' => 'task_assigned_from',
                        'value' => isset($task) ? $task->task_assigned_from : '',
                        'input' => 'text',
                        'required' => true,
                    ],
                ])
                
                
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Task Assigned level'),
                    ],
                    'input' => [
                        'name' => 'task_assigned_from',
                        'value' => isset($task) ? $task->task_assigned_from : '',
                        'input' => 'text',
                        'required' => true,
                    ],
                ])
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h6 class="box-title">@lang('Assigned To')</h6>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group ">
                        {{ Form::select('employee_id',$employees,null,['class'=>'form-control'])}}
                        
                </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <button type="submit" class="btn btn-primary">@lang('Submit')</button>
            </div>

        </div>
        <!-- /.row -->
    </form>

@endsection

@section('js')

    <script src="{{ asset('adminlte/plugins/voca/voca.min.js') }}"></script>
    <script>

        $('#slug').keyup(function () {
            $(this).val(v.slugify($(this).val()))
        })

        $('#title').keyup(function () {
            $('#slug').val(v.slugify($(this).val()))
        })

    </script>

@endsection