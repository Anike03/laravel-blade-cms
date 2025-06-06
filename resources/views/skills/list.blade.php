@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Title</th>
            <th>URL</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($skills as $skill)
            <tr>
                <td>
                    @if ($skill->image)
                        <img src="{{asset('storage/'.$skill->image)}}" width="200">
                    @endif
                </td>
                <td>{{$skill->title}}</td>
                <td>
                    <a href="{{$skill->url}}">
                        {{$skill->url}}
                    </a>
                </td>
                <td>{{ $skill->created_at->format('M j, Y') }}</td>
            <td><a href="{{ env('APP_URL') }}/console/skills/image/{{ $skill->id }}" class="action-view">Image</a></td>
            <td><a href="{{ env('APP_URL') }}/console/skills/edit/{{ $skill->id }}" class="action-edit">Edit</a></td>
            <td><a href="{{ env('APP_URL') }}/console/skills/delete/{{ $skill->id }}" class="action-delete">Delete</a></td>
          </tr>
        @endforeach
    </table>
    
    <a href="{{ env('APP_URL') }}/console/skills/add" class="w3-button w3-green">+ New Skill</a>
</section>

@endsection