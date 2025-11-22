@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">

    <h1>Team Members</h1>

    <a href="{{ route('team.create') }}"
       style="padding:12px 20px;background:#0073e6;color:white;border-radius:10px;text-decoration:none;font-weight:600;">
        + Add New Member
    </a>

    <h2 style="margin-top:25px;">Team List</h2>

    @if($team->count() == 0)
        <p>No team members found.</p>
    @else
        <ul>
            @foreach($team as $member)
                <li>
                    <b>{{ $member->name }}</b> — {{ $member->email }} — ({{ $member->role }})
                </li>
            @endforeach
        </ul>
    @endif

</div>
@endsection
