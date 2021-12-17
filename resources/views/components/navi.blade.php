<!DOCTYPE html>

<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>{{ $title }}</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">My Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('ticketAll') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">お知らせ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.userAll') }}">ユーザー一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.edit') }}">ユーザー編集</a>
                  </li>
              </ul>

            </div>
          </div>
        </nav>
            <span class="d-flex align-items-end">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input type="submit" value="ログアウト">
                </form>
            </span>
    </header>

    <div class="container">
        {{ $slot }}
    </div>

    <span>
        <a href="#"><p>戻る</p></a>
    </span>


    <footer class="bg-secondary text-center text-light p-5 mt-5">
      Collaborated Portfolio
    </footer>
</body>
</html>
