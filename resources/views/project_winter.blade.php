@extends('layout')

@section('title')Макроснежинка@endsection

@section('main_content')

    <div class="page-content">
        <h1 id="title" class="title">Макроснежинка</h1>


        <p>Снеговики известны в течение очень долгого времени, хотя первые свидетельства о них относятся к XIV—XV векам.
            По мнению историков, снеговики появились в доисторические времена, поскольку с самого момента зарождения
            изобразительного искусства для него использовался любой доступный материал, а снег был доступен и легко
            обрабатывался.</p>

        <p><img class="projectImage" id="I" src="images/Снеговик_winter.jpg" alt="Снеговик_winter"> </p>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="picture">

        </div>

        <p>Снежинка - отдельный снежный или ледяной кристалл, выпадающий из облаков в виде атмосферных осадков с
            размерами от долей до нескольких миллиметров. Их формирование в атмосфере связано с процессами конденсации и
            кристаллизации из воздуха водяного пара.</p>

        <p><img class="projectImage" id="II" src="images/I_winter.jpg" alt="I_winter"></p>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="picture">

        </div>

        <p>Современная международная классификация форм ледяных кристаллов в атмосфере, принятая в 1949 году, выделяет
            более 40 основных типов снежинок.</p>

        <p> <img class="projectImage" id="III" src="images/II_winter.jpg" alt="I_winter">
        </p>
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="picture">

        </div>



        <p>Считается, что первое описание снежинок как кристаллических объектов было дано немецким математиком и
            астрономом Иоганном Кеплером в 1611 году в трактате «О шестиугольных снежинках».</p>


            @endsection