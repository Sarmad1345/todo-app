<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Todo App')</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: system-ui, sans-serif; background: #f3f4f6; color: #111827; }
        .container { max-width: 700px; margin: 40px auto; padding: 0 16px; }
        .card { background: #fff; border-radius: 8px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        h1 { margin: 0; font-size: 24px; }
        .btn { display: inline-block; padding: 8px 14px; border: none; border-radius: 6px; font-size: 14px; cursor: pointer; text-decoration: none; }
        .btn-primary { background: #2563eb; color: #fff; }
        .btn-secondary { background: #e5e7eb; color: #111827; }
        .btn-danger { background: #dc2626; color: #fff; }
        .btn-small { padding: 5px 10px; font-size: 13px; }
        .alert { padding: 12px; border-radius: 6px; margin-bottom: 16px; background: #dcfce7; color: #166534; }
        .todo { display: flex; justify-content: space-between; align-items: flex-start; gap: 12px; padding: 14px 0; border-bottom: 1px solid #e5e7eb; }
        .todo:last-child { border-bottom: none; }
        .todo-title { font-weight: 600; }
        .todo-desc { color: #6b7280; font-size: 14px; margin-top: 4px; }
        .actions { display: flex; gap: 6px; }
        .actions form { margin: 0; }
        .empty { text-align: center; color: #6b7280; padding: 30px 0; }
        label { display: block; font-weight: 600; margin-bottom: 6px; }
        input[type=text], textarea { width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 14px; font-family: inherit; }
        .field { margin-bottom: 16px; }
        .error { color: #dc2626; font-size: 13px; margin-top: 4px; }
    </style>
</head>
<body>
    <div class="container">
        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <div class="card">
            @yield('content')
        </div>
    </div>
</body>
</html>
