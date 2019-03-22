@extends('template')

@section('content')
	<p>Enigme 3 : "Au point de départ de l'équipe jaune. A propos du bâtiment B : la 3ème est la seconde, la 7ème est la 8ème, 
	   la 8ème est la 4ème et la 38ème est la 6ème.  Au point de départ d'une autre équipe (qui n'est pas l'équipe violette), 
	   seul le premier bâtiment compte. Ici, la seconde est 5ème, la 9ème est première, la 10ème est 7ème et la 20ème est 3ème."</p>

    <form action="{{ url('equipebl3') }}" method="POST">
        {{ csrf_field() }}
         	<label for="enigme">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
    	<input id="enigme" type="text" name="nom" placeholder="Votre réponse">
    	<button type="submit">Valider</button>
	</form>
@endsection