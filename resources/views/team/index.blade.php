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
        <ul class="team-list">
            @foreach($team as $member)
                <li class="team-item">
                    <div class="member-text">
                        <b>{{ $member->name }}</b> —
                        {{ $member->email }} —
                        ({{ $member->role }})
                    </div>

                    <!-- زر الحذف -->
                    <form action="{{ route('team.destroy', $member->id) }}"
                          method="POST"
                          onsubmit="return confirm('Delete this member?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">deldte</button>

                    </form>
                </li>
            @endforeach
        </ul>
    @endif

</div>
@endsection
