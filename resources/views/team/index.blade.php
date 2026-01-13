@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">

    <h1>Team Members</h1>

    <a href="{{ route('team.create') }}"
       style="
        padding:12px 20px;
        background:#0073e6;
        color:white;
        border-radius:10px;
        text-decoration:none;
        font-weight:600;
        display:inline-block;
        margin-bottom:20px;
       ">
        + Add New Member
    </a>

    <h2 style="margin-top:25px;">Team List</h2>

    @if($team->count() == 0)
        <p>No team members found.</p>
    @else
        <ul style="list-style:none; padding:0; margin-top:15px;">
            @foreach($team as $member)
                <li style="
                    display:flex;
                    justify-content:space-between;
                    align-items:center;
                    padding:12px 15px;
                    border:1px solid #ddd;
                    border-radius:10px;
                    margin-bottom:10px;
                    background:#fff;
                ">
                    <!-- info -->
                    <div style="color:#333;">
                        <b>{{ $member->name }}</b>
                        <span style="color:#666;">
                            — {{ $member->email }} — ({{ $member->role }})
                        </span>
                    </div>

                    <div style="display:inline-flex; justify-content: safe;">
                        <!-- edit -->
                        <a href="{{ route('team.edit', $member->id) }}"
                        style="
                                padding:4px 16px;
                                background:#28a745;
                                color:white;
                                border:none;
                                border-radius:8px;
                                cursor:pointer;
                                font-weight:600;
                                text-decoration:none;
                                margin-right:10px;
                        ">
                            Edit
                        </a>
                        <!-- delete -->
                        <form action="{{ route('team.destroy', $member->id) }}"
                            method="POST"
                            onsubmit="return confirm('Delete this member?');"
                            >
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    style="
                                        padding:8px 16px;
                                        background:#dc3545;
                                        color:white;
                                        border:none;
                                        border-radius:8px;
                                        cursor:pointer;
                                        font-weight:600;
                                    ">
                                Delete
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif

</div>
@endsection
