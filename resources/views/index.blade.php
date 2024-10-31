<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach ($contacts as $contact)
        <a href="{{route('show', $contact)}}">{{$contact->fam}}
            {{$contact->name}}
            {{$contact->ot}}</a>
    @endforeach

    <form action="{{route('store')}}" method="POST">
        @csrf
        <label for="content">Введите фамилию</label>
        <input type="fam" id="fam" name="fam">

        <label for="content">Введите имя</label>
        <input type="name" id="name" name="name">

        <label for="content">Введите отчество</label>
        <input type="ot" id="ot" name="ot">

        <button type="submit">Добавить</button>
    </form>
</body>

</html>