@component('mail::message')
# Here are the today's results:

@if (!empty($results))
@foreach($results as $key => $result)
{{ $key }}: {{ $result }} <br>
@endforeach
@endif

@endcomponent
