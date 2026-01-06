<h2>{{$name}}</h2>
@if($age >= 18)
    <h4>Adult</h4>
@endif
@if($age < 18)
    <h4>Minor</h4>
@endif
