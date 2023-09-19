@foreach ($tasks as $task)
    <from action="/api/tasks/{{$task->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="from-group">
            <input type="submit" value="{{$task->title}}">
        </div>
    </from>
@endforeach