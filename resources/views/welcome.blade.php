<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <title>Test page</title>
    <link rel="stylesheet" type="text/css" href="./css/my_styles.css">
</head>
<body>
<main id="wrapper">
    <section>
        <article class="text_box box">
            <h1>Lorem ipsum </h1>
            <p>Nulla non tortor ut lorem ornare auctor.
                Quisque sagittis rutrum purus, vitae
                accumsan dui imperdiet non. Nulla aliquet,
                leo in dapibus posuere, ante tellus aliquet
                mi, et venenatis enim turpis eget nibh.
                Maecenas nec quam massa. Mauris iaculis
                egestas erat, eu dictum purus ultricies non.
                Phasellus pretium purus massa, at
                euismod dui feugiat quis. Aenean id ligula
                facilisis, posuere sapien vitae, pulvinar
                urna. In et pulvinar lorem. Vestibulum
                luctus convallis urna nec scelerisque.</p>

            <p>Nam faucibus lacus at auctor euismod.
                Proin est massa, sagittis eget porta sed,
                convallis aliquet lacus. Vestibulum blandit
                egestas ultrices. Sed mattis sapien arcu,
                pretium fringilla turpis pulvinar in. Donec
                dolor risus, aliquam vel elit eu, finibus
                maximus eros. Duis viverra ipsum varius
                ullamcorper consequat. Quisque ac magna
                tortor. In non placerat nulla. Etiam
                accumsan vitae urna vitae finibus. Nam
                commodo libero at lacus sodales, quis
                mattis lorem ultrices. Nam interdum
                tempus congue.</p>

            <p id="author">Lorem ipsum</p>
        </article>

        <div id="img" class="box">
            <img src="{{ url('img/M8_assets/photo.jpg') }}">
        </div>
    </section>

    <div id="button_box">
        <a href="#" id="add"><img src="{{ url('img/M8_assets/Add.png') }}"  alt="add"></a>
    </div>

    <section id="list">
        @foreach($data as $item)
            <div class="box_section" id="box{{ $item->id }}">
                <div id="number">
                    {{ $item->id }}
                </div>
                <div>
                    <input type="text" placeholder="{{ $item->name1 }}" id="ans1" name="name1"><br/>
                    <input type="text" placeholder="{{ $item->name2 }}" id="ans2" name="name2"><br/>
                    <input type="text" placeholder="{{ $item->name3 }}" id="ans3" name="name3">
                </div>

                <div id="buttons">
                    <span class="edit" data-value="{{ $item->id }}">
                        <img src="{{ url('img/M8_assets/Edit.png') }}" class="pt5">
                    </span>
                    <span class="delete" data-value="{{ $item->id }} ">
                        <img src="{{ url('img/M8_assets/Delete.png') }}" class="pt5pl20">
                    </span>
                </div>
            </div>
        @endforeach
    </section>

</main>

<div id="openModal" class="modalDialog">
    <div>
        <h2>Lorem ipsum</h2>
        <div id="bio"></div>
        <input type="text" id="name1" name="name1" placeholder="Lorem ipsum dolor sit amet.">
        <input type="text" id="name2" name="name2" placeholder="Lorem ipsum dolor sit amet.">
        <input type="text" id="name3" name="name3" placeholder="Lorem ipsum dolor sit amet.">
        <div class="modal_buttons">
            <a class="left" id="close"   href="#">Close</a>
            <a class="center" id="save" href="#">Save</a>
            <a class="right" id="delete" href="#">Delete</a>
        </div>
    </div>
</div><!--openmodal-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="application/javascript" src="{{ url('js/my_script.js') }}">

</script>
</body>
</html>
