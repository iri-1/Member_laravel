<x-layout>
<x-slot name="title">
会員一覧画面
</x-slot>

<h1>会員一覧画面</h1>
<div class="regester">
<a href="{{route('members.create')}}"> >> 登録 << </a>
</div>
<div>
<table>
    <tr>
        <td> 名前</td>
        <td> 電話番号 </td>
        <td> メールアドレス </td>
        <td>  </td>
        </tr>
        @forelse ($members as $member)
        <tr>
        <td> {{ $member->name }} </td>
        <td> {{ $member->phone }} </td>
        <td> {{ $member->email }} </td>
        <td> <a href="{{ route('members.edit', $member)}}"> >> 編集</a> </td>
        </tr>
        @empty
        NO Memer Yet!
        @endforelse
</table>
</div>

</x-layout>
