<x-navi>
    <x-slot name="title">
        チケット登録
    </x-slot>

    <div name="error_section">
    </div>

    <div class="back-link">
        &laquo; <a href="{{ route('ticket.create')}}">Back</a>
    </div>

    <h1>Add New ticket</h1>

    <form method="post" action="{{ route('') }}">
        @csrf

        <div class="form-group">
            <label>
                Title
                <input type="text" name="title">
            </label>

        </div>

        <div class="form-group">
            <label>
                カテゴリー
                <input type="text" name="category"></textarea>
            </label>
        </div>

        <div class="form-button">
            <button>Add</button>
        </div>

    </form>



</x-navi>
