@foreach($tasks as $task_item)
    <tr>
        <td>{{ $task_item->id }}</td>
        <td>{{ $task_item->task_name }}</td>
        <td>{{ $task_item->task_description }}</td>
        <td>{{ $task_item->task_assigned_to }}</td>
        <td>{{ $task_item->task_assigned_from }}</td>
       
        <td><a class="btn btn-warning btn-xs btn-block" href="{{ route('tasks.edit', [$task_item->id]) }}" role="button" title="@lang('Edit')"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="{{ route('tasks.destroy', [$task_item->id]) }}" role="button" title="@lang('Destroy')"><span class="fa fa-remove"></span></a></td> 
    </tr>
@endforeach

