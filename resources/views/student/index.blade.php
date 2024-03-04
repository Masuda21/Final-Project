<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <table class="min-w-full divide-y divide-gray-200 mx-auto">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Gender</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Location</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Mobile</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Age</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Institute</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800">
                        @foreach ($students as $student)
                            
                        <tr>
                            <td class="px-6 text-white py-4 whitespace-nowrap">{{ $student->name }}</td>
                            <td class="px-6 text-white py-4 whitespace-nowrap">{{ $student->gender}}</td>
                            <td class="px-6 text-white py-4 whitespace-nowrap">{{ $student->email}}</td>
                            <td class="px-6 text-white py-4 whitespace-nowrap">{{ $student->location}}</td>
                            <td class="px-6 text-white py-4 whitespace-nowrap">{{ $student->mobile}}</td>
                            <td class="px-6 text-white py-4 whitespace-nowrap">{{ $student->age}}</td>
                            <td class="px-6 text-white py-4 whitespace-nowrap">{{ $student->institute }}</td>
                            <td class="px-6 text-white py-4 whitespace-nowrap flex">
                                <a class="text-white me-2 text-indigo-600" href="{{route('student.edit', $student->id)}}">Edit</a>
                                <form action="{{route('student.destroy', $student->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="ms-2 text-red-600" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
