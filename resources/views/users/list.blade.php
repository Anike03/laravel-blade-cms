@extends ('layout.console')

@section ('content')

    <section class="w3-padding">

        <h2>Manage Users</h2>

        <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
            <tr class="w3-red">
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>
                <td>{{$user->first}} {{$user->last}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->format('M j, Y')}}</td>
                <td><a href="{{ env('APP_URL') }}/console/users/edit/{{$user->id}}">Edit</a></td>
                <td><a href="{{ env('APP_URL') }}/console/users/delete/{{$user->id}}">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <a href="{{ env('APP_URL') }}/console/users/add" class="w3-button w3-green">New User</a>

    </section>

@endsection