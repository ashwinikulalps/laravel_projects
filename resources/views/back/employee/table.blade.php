@foreach($employee as $employ)
    <tr>
        <td>{{ $employ->id }}</td>
        <td>{{ $employ->employee_name }}</td>
        <td>{{ $employ->designation }}</td>
       
        <td><a class="btn btn-warning btn-xs btn-block" href="{{ route('employees.edit', [$employ->id]) }}" role="button" title="@lang('Edit')"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="{{ route('employees.destroy', [$employ->id]) }}" role="button" title="@lang('Destroy')"><span class="fa fa-remove"></span></a></td> 
    </tr>
@endforeach

