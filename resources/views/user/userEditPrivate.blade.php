<x-navi>
    <x-slot name="title">
        ユーザー個別編集
    </x-slot>

    <div name="error_section">
    </div>

    <h1>ユーザー個別編集</h1>

    <form method="post" action="{{ route('user.update', $user) }}">
        {{-- PATCHはhtmlにまだ対応していないためこんな書き方 --}}
        @method('PATCH')
        @csrf

        {{-- unique値の更新を行う際、同じものの登録ができないため、自分のもでは許容する設定が必要 --}}
        <div class="form-group">
            <label>
                e-mail
                <input type="email" name="email" value="{{$user->email}}">
            </label>

        </div>

        <div class="form-group">
            {{-- <label>
                パスワード
                <input type="password" name="password"></textarea>
            </label> --}}
            <x-label for="password" :value="__('Password')" />
            <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
        </div>
        {{-- <div class="form-group">
            <label>
                パスワード確認
                <input type="text" name="cat"></textarea>
            </label>
        </div> --}}
        <div class="form-group">
            <label>
                ユーザー名
                <input type="text" name="name" value="{{$user->name}}"></textarea>
            </label>
        </div>
        <div class="form-group">
            <label>
                クラス
                <input type="text" name="class" value="{{$user->class}}"></textarea>
            </label>
        </div>

        <div class="form-button">
            <button>更新</button>
        </div>

    </form>



</x-navi>
