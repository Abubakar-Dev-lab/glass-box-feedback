<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Glass Box</title>
</head>

<body>
    <h1>Anonmous Feedback</h1>
    @if (@session('status'))
        <div>
            <strong>Success! </strong> {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div>
            <strong>Whoops! Something went wrong.</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <form action="{{ route('feedback.submit') }}" method="POST">
        @csrf
        <label for="message">Your Message:</label><br>
        <textarea name="message" id="message" cols="50" rows="4"></textarea>
        <br><br>
        <button type="submit">Send It</button>
    </form>
</body>

</html>
