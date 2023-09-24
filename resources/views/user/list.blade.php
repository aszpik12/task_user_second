@foreach ($users as $user)
    <form action="/api/users/{{$user->id}}"method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <input type="text" value="{{$user->title}}">
    </div>
    </form>
    @endforeach
