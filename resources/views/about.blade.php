<x-layout>
  <x-slot:titlepage>{{ $titlepage }}</x-slot>
  <x-slot:title>{{ $title }}</x-slot>
  <h3 class="text-xl">Halaman About</h3>
  <p>Owner : {{ $nama }}</p>
  <img src="img/ariel.jpg" alt="" width="200">
</x-layout>
