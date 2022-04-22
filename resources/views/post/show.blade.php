<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      投稿の個別表示
    </h2>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-message :message="session('message')" />

  </x-slot>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-4 sm:p-8">
      <div class="px-10 mt-4">

        <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
          <div class="mt-4">
            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">
              <a href="{{route('post.show', $post)}}">{{ $post->title }}</a>
            </h1>
            <hr class="w-full">
          </div>
          <div>
            @if($post->image)
            <img src="{{ asset('storage/images/'.$post->image)}}" class="mt-20 mx-auto" style="height:300px;">
            @endif
            <p class="mt-10 text-gray-600 py-4">{{$post->body}}</p>
            <div class="text-sm font-semibold flex flex-row-reverse">
              <p> {{ $post->user->name}} • {{$post->created_at->diffForHumans()}}</p>
              <div class="flex justify-end mt-4">
                <a href="{{route('post.edit', $post)}}">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full float-right">編集</button>
                </a>
                <form method="post" action="{{route('post.destroy', $post)}}">
                  @csrf
                  @method('delete')
                  <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full ml-4" onClick="return confirm('本当に削除しますか？');">削除</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
