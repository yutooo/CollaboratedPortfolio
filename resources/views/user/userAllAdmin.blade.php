<x-navi>
    <x-slot name="title">
        管理者用ユーザー一覧
    </x-slot>

    <div class="card mb-4" style="width: auto;">
      <table class="table mb-0">
        <thead>
          <th>管理者</th>
        </thead>
        <tbody>
            @foreach($users as $user)
          <tr>
            <th scope="row">{{$user->name}}</th>
            <td>希望職種：{{$user->aspiring_job}}</td>

            <form method="post" action="{{ route('user.userAllUpdate', $user) }}">
                {{-- @method('PATCH') --}}
                @csrf

                <td>
                    <select name="role">
                        <option value="1" selected>管理者</option>
                        <option value="2">スタッフ</option>
                        <option value="3">利用者</option>
                    </select>

                    {{-- <input type="submit" name="submit" value="更新"> --}}
                </td>
                <td>
                    <div class="form-button">
                        <button>更新</button>
                    </div>
                </td>
            </form>
            {{-- <form method="get" action="{{ route('user.userAllUpdate', $user) }}">


                    権限：
                        <select name="role" id="role" onchange="myfunc('role')">
                            <option value="1" selected>管理者</option>
                            <option value="2">スタッフ</option>
                            <option value="3">利用者</option>
                        </select>

                    <div class="form-button">
                        <button>更新</button>
                    </div>

            </form> --}}

            <td>
                <form method="post" action="{{ route('user.userDestroy', $user )}} " class="delete-user">
                    @csrf
                    @method('delete')
                    <button class="btn">[x]</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div>
        @foreach($users as $user)

            <form method="post" action="{{ route('user.userAllUpdate', $user) }}">
                @method('PATCH')
                @csrf


                    {{-- <select name="role">
                        <option value="1" selected>管理者</option>
                        <option value="2">スタッフ</option>
                        <option value="3">利用者</option>
                    </select>

                    <div class="form-button">
                        <button>更新</button>
                    </div> --}}

                    <div class="form-group">
                        <label>
                            クラス
                            <input type="text" name="role" value="{{$user->role}}"></textarea>
                        </label>
                    </div>

                    <div class="form-button">
                        <button>更新</button>
                    </div>

            </form>
                <form method="post" action="{{ route('user.userDestroy', $user )}} " class="delete-user">
                    @csrf
                    @method('delete')
                    <button class="btn">[x]</button>
                </form>

          @endforeach

    </div>






    <div class="card mb-4" style="width: 18rem;">
      <table class="table mb-0">
        <thead>
          <th>スタッフ</th>
        </thead>
        <tbody>
            @foreach($users as $user)
          <tr>
            <th scope="row">{{$user->name}}</th>
            <td>希望職種：{{$user->aspiring_job}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="card mb-4" style="width: 18rem;">
      <table class="table mb-0">
        <thead>
          <th>利用者</th>
        </thead>
        <tbody>
            @foreach($users as $user)
          <tr>
            <th scope="row">{{$user->name}}</th>
            <td>希望職種：{{$user->aspiring_job}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <script>
        'use strict';
        {
            document.querySelectorAll('.delete-user').forEach(form => {
                form.addEventListener('submit',e=> {
                    e.preventDefault();

                    if(!confirm('Sure to delete?')) {
                        return;
                    }

                    form.submit();
                });
            });
        }
    </script>

</x-navi>
