<x-navi>
    <x-slot name="title">
        チケット一覧
    </x-slot>

    {{-- foreachに重ね掛けはできる？
        1レコードずつ拾って、さらに1カラムずつ出したい
         --}}
    <div class="container mt-5" >
        <table class="table">
            <thead class="bg-primary">
                <tr>
                    <th> チケットid </th><th> タイトル </th><th> ユーザーid </th>
                    <th> カテゴリー </th>
                    {{-- <th> 公開・非公開 </th><th> 進捗率 </th><th> 状態 </th><th> 優先度 </th><th> 作業時間 </th><th> 開始予定日 </th><th> 終了予定日 </th><th> 開始日 </th><th> 終了日 </th><th> 登録日時 </th><th> 更新日時 </th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td> {{$ticket->id}} </td>
                    <td> {{$ticket->title}} </td>
                    <td> {{$ticket->user_id}} </td>
                    <td> {{$ticket->category->name}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
</x-navi>
