@extends('back.layout')

@section('main')

    @yield('form-open')
        {{ csrf_field() }}

        <div class="row">

            <div class="col-md-12">
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Role Name'),
                    ],
                    'input' => [
                        'name' => 'role_name',
                        'value' => isset($role) ? $role->role_name : '',
                        'input' => 'text',
                        'required' => true,
                    ],
                ])
                
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Designation'),
                    ],
                    'input' => [
                        'name' => 'designation',
                        'value' => isset($role) ? $role->designation : '',
                        'input' => 'text',
                        'required' => true,
                    ],
                ])
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