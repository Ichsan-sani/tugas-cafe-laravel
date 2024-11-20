<form action="{{ route('register') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="role">Role</label>
        <select name="role" id="role" required>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
        </select>
    </div>
    <button type="submit">Register</button>
</form>
