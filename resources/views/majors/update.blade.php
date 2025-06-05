<x-default-layout title="Majors" section_title="Edit Majors Data">
    <div class="grid grid-cols-3">
        <form action="{{ route('majors.edit', $major->id) }}" method="POST"
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-l-4 border-zinc-300 shadow col-span-3 md:col-span-2">
            
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="flex flex-col gap-2">
                <label for="name" class="font-medium text-zinc-700">Majors Name</label>
                <input type="text" id="name" name="name"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50 "
                    placeholder="e.g., S1 Teknik Informatika"
                    value="{{ old('name', $major->name) }}">
                @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            {{-- Code --}}
            <div class="flex flex-col gap-2">
                <label for="code" class="font-medium text-zinc-700">Majors Code</label>
                <input type="text" id="code" name="code"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50"
                    placeholder="e.g., IF"
                    value="{{ old('code', $major->code) }}">
                @error('code')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            {{-- Description --}}
            <div class="flex flex-col gap-2">
                <label for="description" class="font-medium text-zinc-700">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50 "
                    placeholder="Optional">{{ old('description', $major->description) }}</textarea>
                @error('description')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="self-end flex gap-2">
                <a href="{{ route('majors.index') }}"
                    class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>Cancel</span>
                </a>

                <button type="submit"
                    class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-floppy-disk block text-blue-500"></i>
                    <span>Update</span>
                </button>
            </div>
        </form>
    </div>
</x-default-layout>
