<form action="{{ route('profile.password.update') }}" method="POST">

    @csrf
    @method('PUT')
    @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <input type="password" name="current_password" placeholder="Current Password">

    <input type="password" name="password" placeholder="New Password">

    <input type="password" name="password_confirmation" placeholder="Confirm Password">

    <button type="submit">
        Update Password
    </button>

</form>
