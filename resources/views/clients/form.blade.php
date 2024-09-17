<x-layout>
    <x-slot name="title">Create Client</x-slot>

    <div class="max-w-sm mx-auto">
        <form
            action="{{ isset($client) ? route('clients.update', $client->id) : route('clients.store') }}"
        method="POST"
        novalidate>
        @csrf
        @if (isset($client))
            @method('PUT')
        @endif

            <x-input-field name="first_name" label="First Name"
                           value="{{ old('first_name', isset($client) ? $client->first_name : '') }}" />

            <x-input-field name="middle_initial" label="Middle Initial"
                           value="{{ old('middle_initial', isset($client) ? $client->middle_initial : '') }}" />

            <x-input-field name="last_name" label="Last Name"
                           value="{{ old('last_name', isset($client) ? $client->last_name : '') }}" />

            <x-input-field name="loan" label="Loan Amount" type="number"
                           value="{{ old('loan', isset($client) ? $client->loan : '') }}" />

            <!-- Value Input -->
            <x-input-field name="value" label="Value" type="number"
                           value="{{ old('value', isset($client) ? $client->value : '') }}" />


            <x-input-field name="ltv" label="LTV" type="text" disabled />

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('clients.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
             </form>


    </div>
</x-layout>
