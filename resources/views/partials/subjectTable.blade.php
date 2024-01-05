<tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-200 text-gray-700 text-lg">
    <td class="p-3">{{ $subject->id }}</td>
    <td>{{ $subject->name }}</td>
    <td>
        <form action="{{ route('subjects.edit', $subject) }}" method="get">
            @csrf
            @method('GET')
            <button type="submit" class="text-green-500 font font-semibold">🔧 Edit</button>
        </form>
    </td>
    <td>
        <form action="{{ route('subjects.destroy',$subject) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 font font-semibold">🗑 Delete</button>
        </form>
    </td>
</tr>