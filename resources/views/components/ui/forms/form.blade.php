<form action='/jobs' method="POST" class="mt-6 w-3/4 mx-auto">
  @csrf

  {{$slot}}
</form>
