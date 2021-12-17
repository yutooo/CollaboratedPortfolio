<x-navi>
    <x-slot name="title">
        ユーザー一覧
    </x-slot>

    <div class="card mb-4" style="width: 18rem;">
      <table class="table mb-0">
        <thead>
          <th>管理者</th>
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

</x-navi>
