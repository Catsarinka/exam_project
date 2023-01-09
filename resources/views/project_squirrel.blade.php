@extends('layout')

@section('title')Приключения белки@endsection

@section('main_content')

    <div class="page-content">
        <h1 id="title" class="title">Приключения белки</h1>


        <p>Белка обыкновенная распространена в бореальной зоне Евразии от побережья Атлантики до Камчатки, Сахалина и
            Японии (о. Хоккайдо). Успешно акклиматизирована в Крыму, на Кавказе и Тянь-Шане. Описано более 40 подвидов
            белки обыкновенной, отличающихся друг от друга особенностями окраски.</p>

        <p><img class="projectImage" id="I" src="images/squirrel_I.jpg" alt="В прыжке"> </p>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="picture">

        </div>


        <p><img class="projectImage" id="II" src="images/squirrel_II.png" alt="Довольная"></p>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="picture">

        </div>



        <p>В основном белки питаются растительностью, богатой белками, углеводами и жирами. Самым тяжёлым временем для
            белок является ранняя весна, когда зарытые семена начинают прорастать и более не могут служить в качестве пищи, а
            новые ещё не поспели. </p>

        <p> <img class="projectImage" id="III" src="images/squirrel_III.jpg" alt="Наблюдающая">
        </p>
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="picture">

        </div>


        <p>Белки очень ловко разгрызают орехи. Зверёк вонзает оба нижних резца в то место, где орех крепится к веточке.
            Нижняя челюсть белки состоит из двух половинок, соединённых эластичной мышцей. Когда белка слегка стягивает
            их вместе, резцы немного расходятся в стороны и, как клин, вбитый в отверстие, раскалывают орех пополам.</p>

            @endsection