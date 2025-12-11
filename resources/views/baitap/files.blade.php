<!DOCTYPE html>
<html>
<head>
    <title>Index of /LabTH/{{ $lab }}</title>
</head>
<body>

<h2>Index of /LabTH/{{ $lab }}</h2>

<ul>
    <li><a href="{{ url('/baitap') }}">Parent Directory</a></li>

    @foreach ($files as $file)
        <li>
            <a href="{{ url("LabTH/$lab/$file") }}">{{ $file }}</a>
        </li>
    @endforeach
</ul>

</body>
</html>
