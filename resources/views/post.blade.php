<x-layout>
  <x-slot:titlepage>{{ $titlepage }}</x-slot>
  <x-slot:title>{{ $title }}</x-slot>
  <article class="py-8 max-w-screen-md" >
      <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{ $post ['title'] }}</h2>
    <div class="text-base text-gray-500">
      <a href="#">{{ $post['author'] }} | 24 Agustus 2024</a>
    </div>
    <p class="my-4 font-light">{{ $post ['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
  </article>
</x-layout>