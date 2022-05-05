<form wire:submit.prevent="createIdea" action="#" method="POST" class="space-y-4 px-4 py-6 text-sm">
    <div>
        <input wire:model.defer="title" type="text" class="w-full bg-gray-100 rounded-xl text-xs placeholder-gray-900 px-4 py-2 border-0" placeholder="Your idea" required>
        @error('title')
        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <select wire:model.defer="category" name="category_add" id="category_add" class="bg-gray-100 w-full text-xs rounded-xl border-0 px-4 py-2">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <textarea wire:model.defer="description" name="idea" id="id" cols="30" rows="4" class="w-full bg-gray-100 text-xs rounded-xl placeholder-gray-900 px-4 py-2 border-0" placeholder="Describe your idea in a few words" required></textarea>
    @error('description')
    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
    @enderror
    <div class="flex items-center justify-between space-x-3">
        <button type="button" class="flex items-center justify-center w-1/2 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 hover:shadow-lg">
            <svg class="h-5 w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
            </svg>
            <span class="ml-2">Attach</span>
        </button>

        <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-sm text-white bg-blue-600 font-semibold rounded-xl border border-blue-600 hover:border-blue-400 hover:shadow-lg transition duration-150 ease-in px-6 py-3">
            <span>Submit</span>
        </button>
    </div>

    <div>
        @if(session('success-message'))
        <div x-data="{ isVisible: true }" x-init="setTimeout(() => {isVisible = false}, 3000)" x-show.transition.duration.300ms="isVisible" class="text-green-700 text-sm">
            {{ session('success-message') }}
        </div>
        @endif
    </div>
</form>