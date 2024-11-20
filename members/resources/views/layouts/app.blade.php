<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="nabar nabar-expand-lg nabar-light bg-light">
        <a href="{{ route('members.index') }}" class="nabar-brand">会員管理</a>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>