<x-layout>
  <x-slot:heading>Hello from the About Page</x-slot:heading>
  <ul>
    @foreach ($jobs as $job)
    <li>
      <a href="/jobs/{{$job['id']}}">{{$job['title']}}: Pays {{$job['salary']}} per year.</a>
    </li>
  @endforeach
  </ul>
</x-layout>