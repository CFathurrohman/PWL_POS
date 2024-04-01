@extends('m_user.template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>CRUD User</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('m_user.create') }}">Input User</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center bg-primary text-white">User ID</th>
        <th width="150px" class="text-center bg-primary text-white">Level ID</th>
        <th width="150px" class="text-center bg-primary text-white">Level Nama</th>
        <th width="200px" class="text-center bg-primary text-white">Username</th>
        <th width="200px" class="text-center bg-primary text-white">Nama</th>
        <th width="150px" class="text-center bg-primary text-white">Password</th>
        <th width="200px" class="text-center bg-primary text-white">Actions</th>
    </tr>
    @foreach ($useri as $index => $m_user)
    <tr style="background-color: {{ $index % 2 == 0 ? '#ffffff' : '#f0f0f0' }};">
        <td>{{ $m_user->user_id }}</td>
        <td>{{ $m_user->level_id }}</td>
        <td>{{ $m_user->level->level_nama }}</td>
        <td>{{ $m_user->username }}</td>
        <td>{{ $m_user->nama }}</td>
        <td>{{ $m_user->password }}</td>
        <td class="text-center" style="white-space:nowrap">
            <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
