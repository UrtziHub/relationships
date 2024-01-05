<tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-200 text-gray-700 text-lg">
    <td class="p-3">{{ $user->name }}</td>
    <td>{{ $user->age }}</td>
    <td>{{ $user->date_of_birth }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->gender }}</td>
    <td>{{ isset($user->address->street) ? $user->address->street:"- - -" }}</td>
    <td>
        <form action="{{ route('user.edit', ['id' => $user->id]) }}" method="get" class="mb-2">
            @csrf
            @method('GET')
            <button type="submit" class="text-green-500 font font-semibold">🔧 Edit</button>
        </form>
        <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 font font-semibold">🗑 Delete</button>
        </form>
    </td>
</tr>