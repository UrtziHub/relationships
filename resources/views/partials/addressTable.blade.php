<tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-200 text-gray-700 text-lg">
    <td class="px-6 py-3">{{ $address->id }}</td>
    <td class="px-6 py-3">{{ $address->street }}</td>
    <td class="px-6 py-3">{{ $address->city }}</td>
    <td class="px-6 py-3">{{ $address->user->name }}</td>
    <td class="px-6 py-3">
        <form action="{{ route('address.edit', ['id' => $address->id]) }}" method="get" class="mb-2">
            @csrf
            @method('GET')
            <button type="submit" class="text-green-500 font font-semibold">🔧 Edit</button>
        </form>
        <form action="{{ route('address.destroy', ['id' => $address->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 font font-semibold">🗑 Delete</button>
        </form>
    </td>
</tr>