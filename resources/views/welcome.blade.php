@extends('layouts.plantilla')

@section('title', 'Works')
@section('content')
<div>
    <h1>Hola Mundo</h1>
    <button class="bg-third">Hola</button>
</div>
<script>
    let app = document.getElementById('app');

    document.getElementById('works').addEventListener('click', () => {
        frame('works');
    });


    function frame(view) {
        let ajax = new XMLHttpRequest();

        ajax.open('GET', '/' + view);
        ajax.onreadystatechange = function(Evt) {
            if (ajax.readyState == 4) {
                if (ajax.status == 200) {
                    app.innerHTML = ajax.responseText;
                    console.log(ajax.responseText);
                } else
                    dump("Error loading page\n");
            }
        }

        ajax.send();
    }
</script>
@endsection()