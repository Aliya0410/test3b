<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{$contact->fam}}
    {{$contact->name}}
    {{$contact->ot}}

    @foreach ($contact->phone as $phone)
        {{$phone->tel}}
        {{$phone->created_at}}
    @endforeach



    <form action="{{route('contact.store', $contact)}}" method="POST">
        @csrf
        <label for="content">Добавить номер</label>
        <input type="tel" id="tel" name="tel">
        <button type="submit">Добавить</button>
    </form>
</body>

</html>