---
permalink: _redirects
---

@foreach ($page->links as $k => $v)
/{{ $k }} {{ $v }}
@endforeach

/  /in     302  Country=in
