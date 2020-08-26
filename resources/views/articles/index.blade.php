@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page"
             class="container">

            @forelse($article as $article)
                <div class="content">
                    <div class="title">
                        <h2>
                            <a href="/>articles/{{ $article->id }}">
                                {{$article->title}}
                            </a>
                        </h2>
                    </div>
                </div>


                <p>
                    <img
                        src="/images/banner.jpg"
                        alt=""
                        class="image image-full"
                    />
                </p>

                {!! $article->excerpt !!}

            </div>
        @empty
            <p> No Relevent Articles</p>
        @endforelse

        </div>
    </div>

@endsection
