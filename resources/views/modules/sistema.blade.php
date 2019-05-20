@extends('layouts.master')

@section('content')
<h1 class="text-center display-3">
    Sistema FAAC webTV
</h1>

<div class="container">

    <!--Card group-->
    <div class="card-deck">
    
        <!--Card-->
        <div class="card mb-4">

            <!--Card image-->
            <div class="view overlay">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--Card image-->

            <!--Card content-->
            <div class="card-body">

                <!--Title-->
                <h4 class="card-title">Produção</h4>

                <!--Text-->
                <p class="card-text"></p>

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <a href="/admin/eventos" type="button" class="btn btn-blue btn-md">Eventos</a>
            </div>
            <!--Card content-->

        </div>
        <!--Card-->

        <!--Card-->
        <div class="card mb-4">

            <!--Card image-->
            <div class="view overlay">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--Card image-->

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Operações</h4>

                <!--Text-->
                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <a href="/admin/equipamentos" type="button" class="btn btn-blue btn-md">Equipamentos</a>

            </div>
            <!--Card content-->

        </div>
        <!--Card-->

        {{--<!--Card-->--}}
        {{--<div class="card mb-4">--}}
    {{----}}
            {{--<!--Card image-->--}}
            {{--<div class="view overlay">--}}
                {{--<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap">--}}
                {{--<a href="#!">--}}
                    {{--<div class="mask rgba-white-slight"></div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<!--Card image-->--}}
    {{----}}
            {{--<!--Card content-->--}}
            {{--<div class="card-body">--}}
                {{--<!--Title-->--}}
                {{--<h4 class="card-title">Card title</h4>--}}
    {{----}}
                {{--<!--Text-->--}}
                {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
    {{----}}
                {{--<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->--}}
                {{--<button type="button" class="btn btn-light-blue btn-md">Read more</button>--}}
            {{--</div>--}}
            {{--<!--Card content-->--}}
    {{----}}
        {{--</div>--}}
        {{--<!--Card-->--}}

    </div>
    <!--Card group-->
</div>

@endsection
