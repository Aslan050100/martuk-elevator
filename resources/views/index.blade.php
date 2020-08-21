<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{ asset('assets/css/system.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}" type="text/css" />



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/hamburgers.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mmenu.all.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/personal.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/maskedinput.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}" defer></script>




</head>



<body>



<header id="main">
    <div id="long" class="long">

        <nav class="header">
            <div class="logo">
                <a href="#"><img src="{{ asset('assets/images/logo123.png') }}" style="width: 15%;height: 15%; padding-top: 15px;"></a>
            </div>
            <div class="links">
                <a data-target="anchor" href="#main">{{__('message.glav')}}</a>
                <a data-target="anchor" href="#history">{{__('message.history')}}</a>
                <a data-target="anchor" href="#price">{{__('message.price')}}</a>
                <a data-target="anchor" href="#contacts">{{__('message.contact')}}</a>
                <a data-target="anchor" href="#vacancy">{{__('message.vacancy')}}</a>
            </div>
            <div class="language">
                <a href="{{route(Route::currentRouteName(),'ru')}}">Ru</a>
                <a href="{{route(Route::currentRouteName(),'en')}}">En</a>
                <a href="{{route(Route::currentRouteName(),'kz')}}">Kz</a>
            </div>

        </nav>

    </div>

    <h1>
       {{__('message.welcome')}}
    </h1>
    <h2>
        {{__('message.desc')}}
    </h2>
</header>

<div class="section2">
    <h2 id="history">
        {{__('message.company')}}
    </h2>

    <div class="container">
        <div class="centering">
            <div class="centering_v2">

                <div class="video">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/6IJborZvwMI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="description">
                    {{__('message.description')}}
                </div>

            </div>
            <div class="absolution">
                <div class="grey">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="section3">
    <h2 id="price">
       {{__('message.uslugi')}}
    </h2>
    <div class="sec6_back">

    </div>
    <div class="sec6_back2">
        <img src="{{ asset('assets/images/agriculture.jpg') }}">
    </div>
    <div class="container">
        <div class="uslugi">
            <div class="usluga">
                <div class="hexagon_out"><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2"></div></div></div>   </div>
                <h4></h4>
                <p>
                    {{__('message.tarif1')}}
                </p>
                <div class="price">
                    900 тг
                </div>
            </div>

            <div class="usluga">
                <div class="hexagon_out"><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2"></div></div></div>   </div>
                <h4></h4>
                <p>
                    {{__('message.tarif2')}}
                </p>
                <div class="price">
                    900 тг
                </div>
            </div>

            <div class="usluga">
                <div class="hexagon_out"><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2"></div></div></div>   </div>
                <h4></h4>
                <p>
                    {{__('message.tarif3')}}
                </p>
                <div class="price">
                    507 тг
                </div>
            </div>

            <div class="usluga">
                <div class="hexagon_out"><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2"></div></div></div>   </div>
                <h4></h4>
                <p>
                    {{__('message.tarif4')}}
                </p>
                <div class="price">
                    200 тг
                </div>
            </div>

            <div class="usluga">
                <div class="hexagon_out"><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2"></div></div></div>   </div>
                <h4></h4>
                <p>
                    {{__('message.tarif5')}}
                </p>
                <div class="price">
                    400 тг
                </div>
            </div>

            <div class="usluga last">
                <div class="hexagon_out"><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2"></div></div></div>   </div>
                <h4></h4>
                <p>
                    {{__('message.tarif6')}}
                </p>
                <div class="price">ю№э
                    800 тг
                </div>
            </div>


        </div>
    </div>
</div>

<div class="section4">
    <h2>
        {{__('message.parther')}}
    </h2>

    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="company">
                        <img src="{{ asset('assets/images/mycomp.png') }}" alt="company">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="company">
                        <img src="{{ asset('assets/images/newcrest.png') }}" alt="company">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="company">
                        <img src="{{ asset('assets/images/livelib.png') }}" alt="company">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="company">
                        <img src="{{ asset('assets/images/mycomp.png') }}" alt="company">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="company">
                        <img src="{{ asset('assets/images/newcrest.png') }}" alt="company">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="company">
                        <img src="{{ asset('assets/images/livelib.png') }}" alt="company">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="company">
                        <img src="{{ asset('assets/images/mycomp.png') }}" alt="company">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="company">
                        <img src="{{ asset('assets/images/newcrest.png') }}" alt="company">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="company">
                        <img src="{{ asset('assets/images/livelib.png') }}" alt="company">
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->

        </div>
        <div class="swiper-pagination"></div>

        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 40,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                speed: 900,
                autoplay: {
                    delay: 5000,
                },
            });
        </script>
    </div>
</div>

{{--<div class="section5">--}}
{{--    <h2 id="vacancy">--}}
{{--        Вакансии--}}
{{--    </h2>--}}

{{--    <div class="container">--}}
{{--        @foreach($vacancies as $vacancy)--}}
{{--        <div class="list">--}}
{{--            <div class="for_photo">--}}
{{--                <img src="{{Voyager::image($vacancy->image)}}"  class="img-responsive img-thumbnail">--}}
{{--            </div>--}}
{{--            <div class="hired">--}}
{{--                {{$vacancy->name}}--}}
{{--            </div>--}}
{{--            <div class="prof_desc">--}}
{{--                {{$vacancy->description}}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--    <form class="more_vacancy">--}}
{{--        <button>Больше Вакансии</button>--}}
{{--    </form>--}}
{{--</div>--}}



<div class="section6">
    <div class="sec6_back">

    </div>
    <div class="sec6_back2">
        <img src="{{ asset('assets/images/wheat.jpg') }}">
    </div>
    <h2>{{__('message.mesto')}}</h2>
    <div class="container">
        <div class="for_map ontop">
            <div class="address left">
                <div class="country">
                    <div class="svg">
                        <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect x="0.547913" width="15.9501" height="21" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="translate(-0.158302) scale(0.0137146 0.0104167)"/>
                                </pattern>
                                <image id="image0" width="96" height="96" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>

                    </div>
                    <span>{{__('message.country')}}</span>
                </div>
                <div class="desc">
                    {{__('message.city')}}
                </div>
                <div class="number">
                    <a href="tel:+7 713 313 19-79">8 (71331) 31-9-79</a>
                </div>
            </div>
            <div class="map right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6361.279871864365!2d56.505451741196886!3d50.748207148116094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4178b1140cf3b2d3%3A0x7caab34a7c481ba5!2z0YPQu9C40YbQsCDQldGB0LXRgtCwINCa0L7QutC10YPQu9GLLCDQnNCw0YDRgtGD0Lo!5e0!3m2!1sru!2skz!4v1597053975795!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></iframe>            </div>
        </div>
        <div class="for_map">
            <div class="map left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.859873020235!2d57.22883161560909!3d50.27587497945167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x418221482862b8f7%3A0x6f36f17ef86ce51b!2z0KDQsNC80LDQt9Cw0L0!5e0!3m2!1sru!2skz!4v1596710491893!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="address right">
                <div class="country">
                    <div class="svg">
                        <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect x="0.547913" width="15.9501" height="21" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="translate(-0.158302) scale(0.0137146 0.0104167)"/>
                                </pattern>
                                <image id="image0" width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAKUUlEQVR4Ae2dD4xcRR3HP7+92pZy0KrFFv/EakQNlaopUkrZ9VCDogjGSIpQo6VRkUYLQlI1aBQ12tQa0aiJBFCqqKCiaAGrttfbvVbUlj8qkRb5J9CmWv7au9re7s/MdPe66e3evpk378+2neSy7+b9/n935r2Z+c0sHClHInA4R0Dy7rz28VqqnIryGoRXAScAU+t/vXX7/ws8bf+EB1C2ofyDCWySfh7Is4+5A0DfxlT28h6Ud6OcjjAjZgC3AwMIv6bKrTLIczHlBWXPBQAKBYqcAywG3g5MCurlAWF7EG6nxnVUuE2gduBWNleZAqALOIYCS4CPA69MOQTbEK5mMt+XtexOWfeoukwA0D4mMMJFCF8AZo5ak83FfxC+RIFvSz8jaZuQOgBa4kyUbwGvTtvZDvruAz4hZf7QgS7o7dQA0HkcyyRWonwYSE2vY7QU4RqqXJHWwzqVQOibmU+NnwIvcwxIVuQPAwulzJ+SNqCQtAItsoga67oo+CYks8yrq57ORUnHJzEAzKulFvkmsBqYnLQjCcifhHCtFvm6JthlJtIF6Xn0sINr6u/1CcQmZZHKtVT4SBLjhuAA2FfMqv3Wn59ymJJWt5qZLJabqYZUFL4LGuEbwKEWfBPzD7CDr4UMvpEVFAAtchnC0tBG5kjepVoK61+wLkiLdg5nDdCTo4AlYYoZLb8j1IAtCADax3Sq3Ascn4THuZMpPM4+5sgmnoxrW5guqMZ3Dpvgm4grL2EC34sbfMMfuwVokfcBN4cwputkCOfKALfGsTsWAHoiE3khfwe7UhXHjii8zwLmGbOOAvdQ42GG7CoYTGEaBWZR4w3AW4B3AcdEERqT5n6GOEk2s89XTjwASixD7Wunr/4ofFtRVjDMT2QzQ1EYdC5TOJr3oyyvL2FGYfOjUZZKxXbBXvzeAGgfk6nyKHCcl+bOTMMIn6XA1b7z9DqX5zGFS4GrEpwO2UEvs+R2/tfZpbEU/g/hGgsTDP42ejhFBljlG3zjqukapMxKapwBmLXhJMpMdtvnoJdsfwA07ICkyfq7gAXSz9+a6mJdyiB/NICCfVWOJaslc4xYeHVBWuKNKFtaGhOvcpsNfpl/xxPTmlv7eClV/pzIMqgwRwb4a2vN7Wt9W8C57UV639mDcp4kFHxjlfTzGMrZwLC3le0Yazaro93dtvV+AChntZXoe0O4Uirc48selU8qbAa+GpU+Mp3YV9/I5A1C5y5I5zGDiTwReCJvKz3MjvPAbTgU5VP76KWK6e5CZmSYaerjXVuwewuYyMmBg2+G9ivSCr4BSPoxqYzm1TRk6UGZ6yrQHQDhJFclHeifNYOsDjThbx/FDRA4TbHA61wNdQdA3ZV0MGpN1BFuBzlOt+vZcLc5MXUmdv5yugMQPqHKZExkU9Rma4TTbTK4HYsPAM931DE+uZlYy6po8IGZc2x8ADg2aLyEh4LKcxGmPOhC3pFW7b6FjmTNBD4AmM0R4cpOzDRzNmUqzwRVLExzlecDgA+Pq13dSu88rvIJZthc+hcRtktzge4Z9y6jg3gzvnAqPgCYvVjhSjX1jRkHbJfgup86IDzalQ8AJnM4ZHl9SGFOsnoIrfsRJ/2eUwqh31rMGm5W5a2BFTu/Vbm3AOXuwEafrWdydGCZHcVZnaFndRWzmORU3AEQO53rpKQDcS97MsglHeYCoLHPuIOJkW+bqW6n4g5AjwUg7IKGstwuoDuZ7k9s02ngU/4SWnLu5skUWoD0swcotzTBv/KEevaCvwQXzul8Mvi2WGFA7mOvixmG1r0F7Ndwh6uiCPRX6QJOjUAXi0RLnIby+VhCWjP/tnX1+LV+AOzfcBd0o4LN2ylwi5aS28inC3gxcFMCO/Fr7ONn44e69V0vAGTQLkluaC0yVu1MlN/Y7IVYYsYyW2AL3GETa8fejluzTjbxuI8QLwCsIuFGH4UReOZQZYuWKEWgjURit8mq3XLqvGASSQH8KCLdGDJ/AAr8HOwDeYzQABXHoazVIp+LM0Ywbzta5NPUWB94Ab7ZxWH28ovmCpdr59m7ZuFatGu5JkUxybLDLqAfxQ1RD9WwoA1xIWKTc5M+BOTHUrZjCq8YxAXApPvd6aXZncnMNK5BWE+Nu6nxEE/X09On2fT0VyA2Y+8MhHcmMMhqbXGBU2SDzbZrfb9DbSwAjGwtYh7GwfrrDvbm67ayXip2P4K3Xf7PgIZKZWXj8rD7FFbF9Tl+CzDbnIo2KXV2XGO6it+cSVdhdtzd87FbgJi8NjkMW4GwIm7wzRcuNgD2WzuDH4LdK9ZVX2JvY823v8f67C2iwRgEAHt+gvCZhtBD/rPA8lC5rLGfAc3B1qId8PQ11x2C1xUpUwzlV5AWMGqM2jl2Hf3/0LwIuo4QFACpcCfCLw/NuNtt7bdImcGQ/gUFwBpWtdtCw+YOhfTYX5bZo3y5P3trzuAAyCCP2nM4W+vr3lrhizIQPo816EO4Ed36EQYmQ+DERl2Xf26llzm+m7HH8z14CzDK7NpogYvtuSLjae+We8LHkgi+cT8RACwIG+zCvdkG1O1ltQwE3sjRFJHEALA6JrEMeKxJX7ddbmfEvlQkZneiAMjvbf696Yq6tVwS4lSs8ZxPFACjWMr2jJ/rxzMip/eul3LyY5rEAbDBncRlYI+2yWmsx5j1BBr+nX+MliQfws3KbFck9tT0bpimMNPri6WCc65/s89Rr9NpAaYrGmAtxF9BiupYDLpVdVtjiIjOmshArJ36+glWJq90XjuajOu3sIv5Pjmevnan1gKMgfZwuyoXQoY7I9tHajc1Lkgz+MaUVAGwIGzkn6j90Z72ocjijrBUBrk/bdWpA2BBqNiDMszx9nkpZrT7gyyMyQQA6+iQPXMu6Ny6ZwDvYoSPevLGZkv1IXywtVq0Z02bbT1ZnTm9E+FkGeBfB9uW1v/ZtYD9o+TtiD3y0XlnSYAAjaAszDL4xodMATAGyAAbwSbRBoipgwjhCqnQ78CRCGmmXVCzR1rEzBd9qLkusWvlRqnY1+HEVEQVnHkLGDV0hEsg+BbYUfFNF/cybKdFmqqyu8xNCzAh0NN4OT38BZieUEieosqbxIxFclLy0wLM82Ajj1Cwmx28j4MfJ677KLAwT8E3tuYKAGOQbOB3qF1PHieWXreWWdlerMkx5Q4A46pUuA74SjC3hS9Lme8GkxdQUK6eAc1+2Z8PLNopi0XN9c7Xyk1UON+m0TszJ8+QyxZg3LYB28US1Cb8+kaiwgQ+mNfg1/309S0dPp3PC5hgB2uuZ3KaN535rmc5p+PVAS25bQENE21WgtpdjzsbdRE+dyGclffgGz9yD4AxUio8SMGe+/9chOAPIZwjA/Z09Ajk2ZJ0BQAWBLMXt4D54QhzXE67Yib13lufX2pHk6v6rgHARE022Aey+aVW83uOB5cqyiIp43VszMHC0vq/qwAwQZEyv0JZclDir0l3uVgqh+kv+qX1bWnWoyUu1yJq/0rpJFE16z9ybZpAiSvNXzcH4/+b/0SCNC5eOAAAAABJRU5ErkJggg=="/>
                            </defs>
                        </svg>

                    </div>
                    <span>{{__('message.country')}}</span>
                </div>
                <div class="desc">
                    {{__('message.city2')}}
                </div>
                <div class="number">
                    <a href="tel:+7 713 313 19-79">8 (71331) 31-9-79</a>
                </div>
            </div>

        </div>

    </div>

</div>

<div class="section7">
    <div class="container">
        <div class="contacts">
            <h5 id="contacts">{{__('message.contact')}}</h5>
            <div class="obertka">

                <div class="telephone">
                    <div>{{__('message.phone')}}</div>
                    <a href="tel:+7 713 313 19-79">8 (71331) 31-9-79</a>
                </div>
                <div class="telephone">
                    <div>{{__('message.social')}}</div>
                    <div class="social_media">
                        <a href=""><img src="{{ asset('assets/images/facebook.png') }}"></a>
                        <a href=""><img src="{{ asset('assets/images/instagram.png') }}"></a>
                        <a href=""><img src="{{ asset('assets/images/vk.png') }}"></a>
                    </div>
                </div>
                <div class="telephone last">
                    <div>E-mail</div>
                    <a href="mailto:Martuk.ramazan@mail.ru">Martuk.ramazan@mail.ru</a>
                </div>

            </div>
        </div>
        <div class="obratnaya_svyaz">
            <h5>{{__('message.question')}}
            </h5>
            <p>{{__('message.feedback_desc')}}</p>
            <form class="info"  method="post" action="{{route('req')}}">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="{{__('message.in_name')}}">
                <input id="phone" type="tel" name="phone" placeholder="{{__('message.in_phone')}}">
                <textarea name="text" placeholder="{{__('message.in_message')}}"></textarea>
                <div class="send">
                    <button type="submit" name="submit">{{__('message.send')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>







<footer>
    <div class="upside">
        <div class="copyright">
            © 2020. All rigths reserved.
        </div>
    </div>
    <div class="down">

    </div>
</footer>





<script type="text/javascript">
    jQuery(function($){
        $('#phone').mask('+7 (999) 999-9999');
    });


    $(function(){
        $('a[data-target^="anchor"]').bind('click.smoothscroll', function(){
            var target = $(this).attr('href'),
                bl_top = $(target).offset().top - 120;
            $('body, html').animate({scrollTop: bl_top}, 1100);
            return false ;

        })

    })


    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("long").style.height = "70px";
            document.getElementById("long").style.background = "rgb(223 222 226)";
        } else {
            document.getElementById("long").style.height = "60px";
            document.getElementById("long").style.background = "transparent";
        }
    }
</script>

</body>

</html>
