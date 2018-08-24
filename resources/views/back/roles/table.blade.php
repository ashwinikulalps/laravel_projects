@foreach($role as $roles)
    <tr>
        <td>{{ $roles->id }}</td>
        <td>{{ $roles->role_name }}</td>
        <td>{{ $roles->designation }}</td>
       
        <td><a class="btn btn-warning btn-xs btn-block" href="{{ route('roles.edit', [$roles->id]) }}" role="button" title="@lang('Edit')"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="{{ route('roles.destroy', [$roles->id]) }}" role="button" title="@lang('Destroy')"><span class="fa fa-remove"></span></a></td> 
    </tr>
@endforeach

