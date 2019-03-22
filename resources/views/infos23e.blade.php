@extends('templateve')


@section('title')

@endsection

@section('content')


<p><h1>Bravo ! Vous êtes arrivés au bout de cette énigme.Vous avez débloqué la vidéo. 
Regardez-la bien, elle vous donnera de précieux indices pour retrouver Théo.</h1></p>

        <div>
    
            <object type="application/x-shockwave-flash" width="425" height="355" data="https://youtu.be/Wq4tyDRhU_4">

                <param name="movie" value="https://youtu.be/Wq4tyDRhU_4" />

                <param name="wmode" value="transparent" />

            </object>


            <!--[if lte IE 6 ]>

            <embed src="https://youtu.be/Wq4tyDRhU_4" type="application/x-shockwave-flash" wmode="transparent" width="425" height="355"></embed>

            <![endif]-->

        </div>
@endsection


