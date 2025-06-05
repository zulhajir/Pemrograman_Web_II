<x-default-layout title="Majors" section_title="Majors">
    @if (session('success'))
        <div class="bg-green-50 border border-green-500 text-green-500 px-3 py-2">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex">
        <a href="{{ route('majors.create') }}"
            class="bg-green-50 text-green-500 border border-green-500 px-3 py-2 flex items-center gap-2">
            <i class="ph ph-plus block text-green-500"></i>
            <div>Add Major</div>
        </a>
    </div>

    <div class="overflow-x-auto mt-4">
        <table class="min-w-full bg-white shadow">
            <thead>
                <tr class="border-b border-zinc-200 text-sm leading-normal">
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Major Name</th>
                    <th class="py-3 px-6 text-center">Major Code</th>
                    <th class="py-3 px-6 text-left">Description</th>
                    <th class="py-3 px-6 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-zinc-700 text-sm font-light">
                @forelse ($majors as $index => $major)
                    <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                        <td class="py-3 px-6 text-left">{{ $index + 1 }}</td>
                        <td class="py-3 px-6 text-left">{{ $major->name }}</td>
                        <td class="py-3 px-6 text-center">{{ $major->code }}</td>
                        <td class="py-3 px-6 text-left">{{ $major->description }}</td>
                        <td class="py-3 px-6 flex justify-center gap-1">
                            <a href="{{ route('majors.detail', $major->id) }}"
                                class="bg-blue-50 border border-blue-500 p-2 inline-block">
                                <i class="ph ph-eye block text-blue-500"></i>
                            </a>
                            <a href="{{ route('majors.update', $major->id) }}"
                                class="bg-yellow-50 border border-yellow-500 p-2 inline-block">
                                <i class="ph ph-note-pencil block text-yellow-500"></i>
                            </a>
                            <form action="{{ route('majors.destroy', $major->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this major?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-50 border border-red-500 p-2">
                                    <i class="ph ph-trash-simple block text-red-500"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">No majors available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-default-layout>