<form action="/" method="post">
    @csrf
    <p>氏名</p>
    <input type="text" name="name">
    <p>メールアドレス</p>
    <input type="email" name="e-mail"><br>
    <button>送信</button>
</form>