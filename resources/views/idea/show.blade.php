<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

    <!-- Idea card -->
    <div class="idea-container bg-white rounded-xl flex mt-4 md:mt-0">
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
                    <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full flex flex-col justify-between">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">
                        {{ $idea->title }}
                    </a>
                </h4>
                <div class="text-gray-600 my-3 line-clamp-3 float-left md:float-none">
                    {{ $idea->description }}
                </div>
                <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center space-y-2 md:space-y-0 mt-3">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="hidden md:block font-bold text-gray-900">{{ $idea->user->name }}</div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->category->name }}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                        <div class="{{ $idea->getStatusClasses() }} text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 transition duration-200 ease-in">
                            {{ $idea->status->name }}
                        </div>
                        <button @click="isOpen = !isOpen" class="bg-gray-100 relative z-10 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-3">
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

    <!-- buttons container -->
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4 md:ml-6">
            <div x-data="{ isOpen: false }" class="relative">
                <button @click="isOpen = !isOpen" type="button" class="flex items-center justify-center h-11 text-xs text-white bg-blue-600 font-semibold rounded-xl border border-blue-600 hover:border-blue-400 hover:shadow-lg transition duration-150 ease-in px-6 py-3 mt-2 md:mt-0 w-full">
                    Reply
                </button>
                <div x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false" x-cloak class="absolute z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-small rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-2 md:py-6">
                        <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-0 px-4 py-2" placeholder="Go ahead, don't be shy and share your thoughts..."></textarea>

                        <div class="flex items-center space-x-3">
                            <button type="button" class="flex items-center w-1/2 justify-center h-11 text-xs text-white bg-blue-600 font-semibold rounded-xl border border-blue-600 hover:border-blue-400 hover:shadow-lg transition duration-150 ease-in px-6 py-3">
                                Post Comment
                            </button>

                            <button type="button" class="flex items-center justify-center w-1/2 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 hover:shadow-lg">
                                <svg class="h-5 w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-2">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div x-data="{ isOpen: false }" class="relative">
                <button @click="isOpen = !isOpen" type="button" class="flex items-center justify-center h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 hover:shadow-lg">
                    <span class="mr-2">Set Status</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false" x-cloak class="absolute z-15 w-64 md:w-76 text-left font-semibold text-sm bg-white shadow-small rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked class="text-green-600 bg-gray-100 border-0 checked:outline-none" name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="text-purple-600 bg-gray-100 border-0 checked:outline-none" name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="text-blue-600 bg-gray-100 border-0 checked:outline-none" name="radio-direct" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="text-yellow-500 bg-gray-100 border-0 checked:outline-none" name="radio-direct" value="4">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="text-red-600 bg-gray-100 border-0 checked:outline-none" name="radio-direct" value="5">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>
                        <textarea name="update_comment" id="update_comment" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-0 px-4 py-2" placeholder="Add an update (optional)"></textarea>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 hover:shadow-lg">
                                <svg class="h-5 w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-2">Attach</span>
                            </button>

                            <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs text-white bg-blue-600 font-semibold rounded-xl border border-blue-600 hover:border-blue-400 hover:shadow-lg transition duration-150 ease-in px-6 py-3">
                                <span>Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="bg-gray-100 rounded" checked="">
                                <span class="ml-2">Notify All Voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center justify-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-4 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-sm leading-none">Votes</div>
            </div>
            <button type="button" class="w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 uppercase  hover:border-gray-400 transition duration-150 ease-in px-6 py-3 hover:shadow-lg">
                <span>vote</span>
            </button>
        </div>
    </div>

    <!-- Comments container -->
    <div class="comments-container space-y-6 m;-6 md:ml-12 my-8">
        <div class="comment-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-16 h-16 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <div class="text-gray-600 my-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. A recusandae commodi expedita in eum atque, placeat aperiam ad sit accusamus?
                    </div>
                    <div class="flex justify-between items-center mt-3">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="bg-gray-100 hidden relative hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 20 20">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold bg-white shadow-large rounded-xl left-0">
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-200 ease-in">Mark as Spam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-200 ease-in">Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Close comment contaienr  -->

        <div class="comment-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-16 h-16 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <div class="text-gray-600 my-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. A recusandae commodi expedita in eum atque, placeat aperiam ad sit accusamus?
                    </div>
                    <div class="flex justify-between items-center mt-3">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="bg-gray-100 hidden relative hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 20 20">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold bg-white shadow-large rounded-xl left-0">
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-200 ease-in">Mark as Spam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-200 ease-in">Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Close comment contaienr  -->

    </div>
    <!--end comments  container -->

</x-app-layout>