<table class="table table-hover table-bordered table-sm">
    <thead>
    <tr>
        <th>ID</th>
        <th>Department</th>
        <th>Last name</th>
        <th>Middle name</th>
        <th>Firstname</th>
        <th>Last access</th>
        <th>Total access</th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr class="status-{{$user->status}}">
            <td>{{ $user->id }}</td>
            <td>{{ $user->type_user()->type }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->middle_name }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->lastAccess() }}</td>
            <td>{{ $user->totalAccess() }}</td>
            <td class="text-center">
                <button type="button" class="btn btn-primary btn-sm my-1" data-toggle="modal" data-target=".modalAdmin" data-code="{{ $user->id }}" data-modal="edit"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".modalAdmin" data-code="{{ $user->id }}" data-modal="access_room" data-status="{{ $user->status }}"><i class="fa fa-refresh"></i></button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".modalAdmin" data-code="{{ $user->id }}" data-modal="delete"><i class="fa fa-recycle"></i></button>
                <button type="button" class="btn btn-light border border-secondary btn-sm"><i
                            class="fa fa-history"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>