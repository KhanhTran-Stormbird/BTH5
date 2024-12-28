<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-6 text-gray-900 dark:text-white">{{ $user->name }}'s Profile</h2>

            <!-- Avatar Section -->
            <div class="flex justify-center mb-6">
                @if($user->avatar)
                    <img src="{{ Storage::url($user->avatar) }}" alt="Avatar" class="w-40 h-40 rounded-full object-cover border-4 border-indigo-600 shadow-lg">
                @else
                    <div class="w-40 h-40 bg-gray-300 rounded-full flex items-center justify-center text-xl text-white font-semibold">
                        No Avatar
                    </div>
                @endif
            </div>

            <!-- Profile Information Section -->
            <div class="mb-4">
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300"><strong>Name:</strong> {{ $user->name }}</p>
            </div>

            <div class="mb-4">
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300"><strong>Email:</strong> {{ $user->email }}</p>
            </div>

            <div class="mb-4">
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300"><strong>Bio:</strong> {{ $user->bio ?? 'No bio available' }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
