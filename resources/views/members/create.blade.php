<x-layout>

<x-slot name="title">
    登録画面
</x-slot>

<div class="back-link">
    {{-- &laquo; <a href="/">Back</a> --}}

    {{-- 以下も同じ意味ですが、ページの別名を使っています "/"を>name('posts.index') --}}
    &laquo; <a href="{{ route('members.index') }}">戻る</a>

    </div>
    {{-- ページに表示されるのは＄pots[i]の格納されている文字列 --}}
    <h1>会員登録</h1>
    <form method="post" action="{{ route('members.store') }}">
    {{-- <form method="post" action=""> --}}

        @csrf

        <div class="form-group">
            <label>
                名前
                <input placeholder="名前" type="text" name="name" value="{{ old('name') }}">
            </label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>
                電話番号
                <input placeholder="電話番号" type="text" name="phone" value="{{ old('phone') }}">
            </label>
            @error('phone')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>
                メールアドバイス
                <input placeholder="メール" type="text" name="email" value="{{ old('email') }}">
            </label>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-button">
            <button>登録する</button>
        </div>

    </form>

</x-layout>
