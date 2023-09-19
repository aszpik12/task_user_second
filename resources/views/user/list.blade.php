@foreach ($users as $user)
    <from action="/api/users/{{$user->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        @foreach ($users as $user)
        <div class="from-group">
            <input type="text" value="{{$user->name}}">
        </div>
        @endforeach
    </from>
@endforeach