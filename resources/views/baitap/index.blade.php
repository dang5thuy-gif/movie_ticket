<!DOCTYPE html>
<html>
<head>
    <title>Index of /LabTH</title>
</head>
<body>

<h2>Index of /LabTH</h2>

<ul>
    <li><a href="{{ url('/') }}">Parent Directory</a></li>

    @foreach ($labs as $lab)
        <li>
            <a href="{{ url('baitap/' . $lab) }}">{{ $lab }}/</a>
        </li>
    @endforeach
</ul>

</body>
</html>
