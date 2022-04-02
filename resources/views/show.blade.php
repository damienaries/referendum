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
    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-16 h-16 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">
                        Awesome debate title
                    </a>
                </h4>
                <div class="text-gray-600 my-3 line-clamp-3">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, aperiam, ad porro sequi voluptatibus aspernatur, amet voluptatum sapiente praesentium quisquam facilis perferendis iste accusamus ipsum deleniti maxime provident est enim. Quibusdam, quaerat alias! Soluta numquam exercitationem sunt, iste ipsum repudiandae. Animi, illum corrupti. Assumenda, voluptas accusantium minus odit illum eveniet, iusto tempore voluptatum aut odio incidunt dicta doloremque dolores minima quam veniam voluptatem, aliquam velit maiores! Odit unde, reiciendis tempore est aperiam repellat autem quidem repellendus quam perferendis earum vel soluta, debitis quaerat, officiis harum facere ex dolorum ab alias veniam iure? Quisquam non eligendi assumenda adipisci provident! Dolor, obcaecati.
                </div>
                <div class="flex justify-between items-center mt-3">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 transition duration-200 ease-in">
                            Open
                        </div>
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
    </div>

    <!-- buttons container -->
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center justify-between space-x-4 ml-6">
            <button type="button" class="flex items-center justify-center h-11 text-xs text-white bg-blue-600 font-semibold rounded-xl border border-blue-600 hover:border-blue-400 hover:shadow-lg transition duration-150 ease-in px-6 py-3">
                <span>Reply</span>
            </button>

            <button type="button" class="flex items-center justify-center h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 hover:shadow-lg">
                <span class="mr-2">Set Status</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>

            </button>
        </div>

        <div class="flex items-center justify-center space-x-3">
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
    <div class="comments-container space-y-6 ml-12 my-8">
        <div class="comment-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-16 h-16 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <!-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">
                            Awesome debate title
                        </a>
                    </h4> -->
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
        </div>
    </div> <!-- Close comment contaienr  -->
    <!--end comments  container -->
</x-app-layout>