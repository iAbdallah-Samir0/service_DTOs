<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search on YouTube</title>
    <link rel="icon" href="https://www.youtube.com/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        form {
            text-align: center;
            margin: 20px 0;
        }

        input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            padding: 10px 15px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #cc0000;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        li {
            margin: 10px;
            width: 300px;
            text-align: center;
        }

        iframe {
            width: 100%;
            height: 180px;
            border-radius: 8px;
        }

        a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        a:hover {
            color: #ff0000;
        }
    </style>
</head>
<body>
<form action="{{ route('youtube.search') }}" method="GET">
    <input type="text" name="query" placeholder="Search for videos on YouTube">
    <button type="submit">Search</button>
</form>

<h2>Search Results:</h2>
<ul>
    @foreach ($videos as $video)
        <li>
            <iframe src="https://www.youtube.com/embed/{{ $video['id'] }}"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            <a href="https://www.youtube.com/watch?v={{ $video['id'] }}" target="_blank">
                {{ $video['snippet']['title'] }}
            </a>
        </li>
    @endforeach
</ul>
</body>
</html>
