<x-app-layout>
    {{-- <h1>{{ $user->name }}</h1> --}}
    <div class=" bg-red-500  mb-10 ">
        <div class="flex gap-5 px-40 py-10 rounded m-30 justify-center items-center ">

            <div class="w-full">
                <div class=" flex-1 p-10 rounded  w-full text-white">
                    <p class="italic text-xl ml-10 mb-5">Category</p>
                    <a href="" class="font-black font-sans  text-4xl ml-10 ">{{ $category->name }}</a>

                </div>
            </div>
        </div>


    </div>
    @foreach ($category->posts as $post)
        <div class=" mb-10 ">
            <div class="flex gap-5 px-40 py-10 rounded m-30 justify-center items-center ">

                <div class="w-full">
                    <div class=" flex-1 p-10 rounded  w-full">
                        <p class="italic text-xl ml-10 mb-5">{{ $category->name }}</p>
                        <a href="" class="font-black font-sans  text-4xl ml-10 ">

                            {{ $post->title }}</a>
                        <p class=" italic text-xl w-full mt-20">
                            <span class="text-base italic text-gray-400">{{ $post->created_at->format('d-m-Y') }}</span>
                            -
                            {{ $post->description }}
                        <p>
                    </div>
                </div>
            </div>


        </div>
    @endforeach
</x-app-layout>
