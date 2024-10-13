<x-layout>
  <x-slot:heading>
    Job
  </x-slot:heading>
  <h2>{{$job['title']}}</h2>
  <p>This job pays {{$job['salary']}} per year.</p>
  <div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <a href="/jobs/{{$job->id}}/update"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</a>
    </div>
  </div>
</x-layout>