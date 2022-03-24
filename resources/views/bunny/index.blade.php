<x-layout>
  <div >
    <div>
      <div class="text-3xl my-4" >Show all bunnies:</div>
    </div>
    @foreach ($bunnies as $bunny)
    <div class="mt-2" >
      <a class="pl-4" href="{{'/bunny/' . strval($bunny->id)}}" >
        {{ $bunny->name }}
      </a>
    </div>
    @endforeach
  </div>
</x-layout>