<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w/full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-0 px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w/full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-0 px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>

        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Find an Idea" class="w-full rounded-xl bg-white px-4 py-2 border-0 pl-10 placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0z" />
                </svg>
            </div>
        </div>
    </div> <!--  END Filters -->

    <div class="ideas-container space-y-6 mt-6 mb-4">

        <!-- Idea card -->
        @foreach($ideas as $idea)
        <div class="idea-container bg-white rounded-xl flex hover:shadow-small transition duration-200 ease-in cursor-pointer">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-300 shadow-sm font-bold tracking-wide text-xs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-200 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-4">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full flex flex-col justify-between">
                    <h4 class="text-xl font-semibold">
                        <a href="{{ route('idea.show', $idea) }}" class="hover:underline">
                            {{ $idea->title }}
                        </a>
                    </h4>
                    <div class="text-gray-600 my-3 line-clamp-3 float-left md:float-none">
                        {{ $idea->description }}
                    </div>
                    <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center space-y-2 md:space-y-0 mt-3">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 transition duration-200 ease-in">
                                Open
                            </div>
                            <button @click="isOpen = !isOpen" class="bg-gray-100 relative hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 20 20">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false" x-cloak class="absolute w-44 font-semibold bg-white shadow-large rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-200 ease-in">Mark as Spam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-200 ease-in">Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex flex-row items-center mt-4 md:mt-0 md:hidden">
                            <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8 -mx-4">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xs font-semibold leading-none text-gray-400">Votes</div>
                            </div>
                            <button class="w-20 bg-gray-200 text-gray-900 border border-gray-200 font-bold text-xs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3">Vote</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> <!-- END Ideas container-->

    <div class="my-8">{{ $ideas->links() }}</div>
</x-app-layout>