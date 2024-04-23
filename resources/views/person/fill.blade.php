<form action="{{ route('person.store') }}" method="post">
    @csrf
    <label for="name"> name :</label>
    <input id="name" type="text" name="name" value="{{$person->name}}"><br>
    @error('name')
        {{ $errors->first('name') }}
    @enderror

    <label for="age"> age :</label>
    <input id="age" type="text" name="age" value="{{$person->age}}"><br>
    @error('age')
        {{ $errors->first('age') }}
    @enderror

    <label for="nationalityID"> nationalityID :</label>
    <input id="nationalityID" type="text" name="nationalityID" value="{{$person->nationalityID}}"><br>
    @error('nationalityID')
    <br>
        {{ $errors->first('nationalityID') }}
    @enderror

    <label for="birthDate"> birthDate :</label>
    <input id="birthDate" type="date" name="birthDate" value="{{$person->birthDate}}"><br>
    @error('birthDate')
        {{ $errors->first('birthDate') }}
    @enderror
    <button>Submit</button>
</form>
