<x-layout>
    <div class="relative overflow-x-auto">
        <div class="flex justify-end items-center mb-4 ">
            <a href="{{ route('clients.create') }}" class="px-4 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">Add Client</a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 mb-8">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Loan
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Value
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    LTV
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>

            @forelse ($clients as $client)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $client->fullName }}
                    </th>
                    <td class="px-6 py-4 text-right">
                        {{ number_format($client->loan, 2) }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        {{ number_format($client->value, 2) }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        {{ number_format(($client->loan / $client->value) * 100, 2) }}%
                    </td>
                    <td class="px-6 py-4 space-x-2 text-right">

                        <a href="{{ route('clients.edit', $client) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                         <form action="{{ route('clients.destroy', $client) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">
                        No clients found.
                    </td>
            @endforelse




            </tbody>
        </table>

        {{ $clients->links() }}

    </div>


</x-layout>
