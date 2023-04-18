<x-layout>

    <x-slot name="title">
        会員編集画面
    </x-slot>

    <div class="back-link">
        {{-- &laquo; <a href="/">Back</a> --}}

        {{-- 以下も同じ意味ですが、ページの別名を使っています "/"を>name('posts.index') --}}
        &laquo; <a href="{{ route('members.index') }}">戻る</a>

        </div>
        {{-- ページに表示されるのは＄pots[i]の格納されている文字列 --}}
        <h1>会員編集 </h1>
        <h2>会員ID: {{$member->id}}</h2>
        <form method="post" action="{{ route('members.update',$member) }}">
        {{-- <form method="post" action=""> --}}
            @method('PATCH')
            @csrf

            <div class="form-group">
                <label>
                    名前
                    <input placeholder="名前" type="text" name="name" value="{{ old('name', $member->name) }}">
                </label>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>
                    電話番号
                    <input placeholder="電話番号" type="text" name="phone" value="{{ old('phone', $member->phone) }}">
                </label>
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>
                    メールアドバイス
                    <input placeholder="メール" type="text" name="email" value="{{ old('email', $member->email) }}">
                </label>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-button">
                <button>編集</button>
            </div>

        </form>
        <form class="form-button" id="delete_post" method="post" action="{{ route('members.destroy', $member)}}">
            @method('DELETE')
            @csrf
            <button>削除</button>
        </form>
        <script>
            'use strict';
            {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

                if (!confirm('本当に削除してもよろしいですか?')) {
                    return;
                }

                e.target.submit();
            });
        }
        </script>
    </x-layout>
