<h1>{{$heading}}</h1>

@unless(count($listings) == 0)
@foreach($listings as $listing)
<h2> 
    <a href="/listings/{{$listing['id']}}"> {{$listing['title']}}</a>
</h2>
<p>
    {{$listing['description']}}
</p>
@endforeach



@else
<h2>No listings found</h2>

@endunless