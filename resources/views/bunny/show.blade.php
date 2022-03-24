<x-layout>
  <div >
    <div class="py" >
      <div>Name: {{ $bunny->name }}</div>
      <div class="flex items-center" >
        <div class="pr-2" >Color</div><div class="h-6 w-6 rounded-full" style="background-color: {{ $bunny->color }}" ></div>
      </div>
      <div>Fur: {{ $bunny->fur }}</div>
      <div>Ears: {{ $bunny->ear }}</div>
    </div>
  </div>
</x-layout>