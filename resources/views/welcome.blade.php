<x-app-layout>
    <div class="shadow-md bg-white">

        @foreach ($categories as $item)
            <a href="{{ route('category.show', $item->id) }}"
                class="inline-block py-1 m-1 rounded-lg bg-red-100 hover:bg-red-500 hover:text-white p-2 border-2 text-sm">{{ $item->name }}>
            </a>
        @endforeach

    </div>




    <div class="shadow-md bg-white">
        <div class="col-span-3 bg-red-50 p-5 ">
            @foreach ($posts as $post)
                <div class="card bg-white rounded-md shadow-lg">
                    <div class="md:flex">

                        <div class="p-5 w-full">
                            <div>
                                <a href="{{ route('users.show', $post->user->id) }}"
                                    class="font-bold uppercase text-red-600">{{ $post->user->name }}</a>
                                <span>Wrote's</span>
                                <a href="" class="font-bold uppercase text-red-600">{{ $post->user->name }}</a>
                                <span>Wrote's</span>
                            </div>
                            <h2>{{ $post->title }}</h2>
                            <p class="flex justify-between ">{{ $post->created_at->format('d-m-Y') }} <span><a
                                        href="{{ route('category.show', $post->category->id) }}"
                                        class="font-bold text-red-600">{{ $post->category->name }}</a></span></p>
                        </div>
                    </div>
                    <div class="bottom p-5">
                        <p>{{ $post->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>


    </div>



    {{-- @foreach ($posts as $post)

        @endforeach --}}


</x-app-layout>
